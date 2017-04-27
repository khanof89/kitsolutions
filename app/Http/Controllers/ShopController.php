<?php

namespace App\Http\Controllers;

use App\Http\Requests\CheckOutRequest;
use App\Models\Order;
use App\Models\Product;
use App\Models\Transaction;
use App\User;
use Bnet\Cart\Facades\CartFacade;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Lutforrahman\Nujhatcart\Facades\Cart;
use Syscover\ShoppingCart\CartProvider;
use Syscover\ShoppingCart\Item;
use Auth;

class ShopController extends Controller
{
    public function index()
    {
      $products = Product::with(['colors', 'sizes','images', 'reviews', 'tags', 'related', 'categories.category'])->paginate(12);

      return view('shop.main', compact('products'));
    }

  public function product($id)
  {
    $product = Product::where('id',$id)->with(['colors', 'sizes','images', 'reviews', 'tags', 'related', 'categories.category', 'quantity'])->first();
    $rating = 0;
    if(count($product->reviews))
    {
      $rating = rating($product->reviews);
    }
    $relatedProducts[] = (array) $product->related;
    return view('shop.product', compact('product', 'rating', 'relatedProducts'));
  }

  public function addToCart(Request $request)
  {
    try
    {
      unset($request['_token']);

      $product = Product::where('id', $request->id)->with(['colors', 'images'])->first();

      $item = ['id' => $request->id, 'sku' => $request->sku, 'name' => $request->name, 'slug' => $request->id . '/' . Str::slug($request->name), 'image' => $product->location, 'description' => $product->name . '<br /> Size:' . $request->size . '<br /> Color:' . $request->color, 'quantity' => $request->quantity, 'price' => $product->price, 'discount' => 0, 'tax' => 0, 'options' => array('size' => $request->size, 'color' => $request->color)];

      Cart::insert($item);

      return json_encode('success');
    }
    catch(\Exception $e)
    {
      return json_encode('failure');
    }
  }

  public function getCart()
  {
    $items = Cart::contents();
    return view('shop.cart', compact('items'));

  }

  public function updatecart(Request $request)
  {
    try
    {
      $itemId = $request->item_id;
      $value = $request->value;
      $cart = Cart::get($itemId);
      $quantity = $cart->quantity;
      if($value == 1)
      {
        $quantity = $quantity - 1;
        Cart::update($itemId, $quantity);
      } else
      {
        $quantity = $quantity + 1;
        Cart::update($itemId, $quantity);
      }

      return json_encode('success');
    }
    catch(\Exception $e)
    {
      return json_encode('failure');
    }
  }

  public function checkout()
  {
    $items = Cart::contents();
    $subTotal = 0;
    foreach($items as $item)
    {
      $subTotal += $item->quantity * $item->price;
    }

   return view('shop.checkout', compact('items', 'subTotal'));
  }

  public function processCheckout(CheckOutRequest $request)
  {
    if($request->optionsRadios == 'online')
    {
      $payUMoneyKey = env('PAYUMONEY_KEY');
      $payUMoneySalt = env('PAYUMONEY_SALT');
      $payUMoneyURL = env('PAYUMONEY_URL');
      $successUrl = env('APP_URL') . env('SUCCESS_URL');
      $failureUrl = env('APP_URL') . env('FAILURE_URL');

      $data = $request->all();
      unset($data['_token']);

      $transactionId = substr(hash('sha256', mt_rand() . microtime()), 0, 20);

      if(!\Auth::user()->profile)
      {
        \Auth::user()->profile()->create($data);
      }

      $items = Cart::contents();

      $productInfo = 'order for ';
        $productIds = [];
      foreach($items as $item)
      {
          $productIds[] = $item->id;
        $data['product_id'] = $item->id;
        $data['quantity'] = $item->quantity;
        $data['size'] = $item->options->size;
        $data['color'] = $item->options->color;
        $data['transaction_id'] = $transactionId;
        Order::create($data);
        $productInfo .= $item->id. ' ';
      }

      $amount = $request->total. '.00';
      $action = env('PAYUMONEY_URL') . '/_payment';

      \Log::info('amount '. $amount);
      $hash = $this->generateHash($amount,$payUMoneyKey,$transactionId,$productInfo,$payUMoneySalt);

      $transaction = $this->createTransaction($request, $transactionId, $amount, $hash, $productIds);

        return view('sendToGateway')
          ->with('salt', $payUMoneySalt)
          ->with('action', $action)
          ->with('key', $payUMoneyKey)
          ->with('txnid', $transactionId)
          ->with('amount', $amount)
          ->with('productinfo', $productInfo)
          ->with('firstname', Auth::user()->name)
          ->with('email', Auth::user()->email)
          ->with('phone', \Auth::user()->phone)
          ->with('surl', $successUrl)
          ->with('furl', $failureUrl)
          ->with('hash', $hash);
    }

    return view('shop.finish');
  }

  /**
   * @param Request $request
   * @param         $payumoney_key
   * @param         $txnid
   * @param         $productinfo
   * @param         $payumoney_salt
   *
   * @return string
   */
  public function generateHash($amount, $payumoney_key, $txnid, $productinfo, $payumoney_salt)
  {
    $hash_string = '';
    $hash_string .= $payumoney_key . '|';
    $hash_string .= $txnid . '|';
    $hash_string .= $amount . '|';
    $hash_string .= $productinfo . '|';
    $hash_string .= \Auth::user()->name . '|';
    $hash_string .= \Auth::user()->email . '|';
    $hash_string .= '||||||||||';
    $hash_string .= $payumoney_salt;

    $hash = strtolower(hash('sha512', $hash_string));

    return $hash;
  }

  public function success(Request $request)
  {
      if($request->isMethod('get'))
      {
          return redirect('/');
      }
      try
      {
          $status = $request->status;
          $firstname = $request->firstname;
          $amount = $request->amount;
          $txnid = $request->txnid;
          $posted_hash = $request->hash;
          $key = $request->key;
          $productinfo = $request->productinfo;
          $email = $request->email;
          $salt = env('PAYUMONEY_SALT');
          $cashback = $request->udf1;

          //find the transaction detail for this transction_id
          $transaction = Transaction::where('transaction_id', $txnid)->first();

          //set the hash sequence
          $retHashSeq = $salt . '|' . $status . '||||||||||' . $cashback . '|' . $email . '|' . $firstname . '|' . $productinfo . '|' . $amount . '|' . $txnid . '|' . $key;

          //recreate the hash
          $hash = hash("sha512", $retHashSeq);

          //check if we have a transaction for the posted details
          if(count($transaction) < 1)
          {
              //if we do not have this transaction return view with error message
              return view('response')->with('message', 'transaction_not_found')->title('Transaction not found');
          } elseif($hash == $posted_hash && $transaction->job_created == 0 && $status == 'success')
          {
              //queue this recharge
              if($transaction->type == 1 || $transaction->type == 4)
              {
                  //prepaid recharge
                  $job = (new ProcessRecharge($transaction->amount, $transaction->number, $transaction->operator, $transaction->circle, $transaction->transaction_id))->onQueue('process-recharge');
              } elseif($transaction->type == 3)
              {
                  //postpaid bill
                  $job = (new ProcessBill($amount, $transaction->number, $transaction->operator, $transaction->circle, $transaction->transaction_id))->onQueue('process-bill');
              }
              $this->dispatch($job);

              //update transactions table and set the job_created to 1
              $transaction->job_created = 1;
              $transaction->save();

              if(!$cashback)
              {
                  //function for cashback
                  if($amount >= 20.00)
                  {
                      $this->cashBack($transaction->transaction_id, $amount);
                  }
              }
              if($cashback)
              {
                  return view('response')->with('message', 'success')->with('title', 'Success')->with('cashback', $cashback);
              } else
              {
                  return view('response')->with('message', 'success')->with('title', 'Success');
              }
          } else
          {
              return view('response')->with('message', 'invalid_transaction')->with('title', 'Invalid Transaction');
          }
      } catch(\Exception $e)
      {
          \Log::info($e->getMessage());

          return view('response')->with('message', 'something_wrong')->with('transaction_id', $txnid)->with('title', 'Something is not just right');
      }
  }

    /**
     * @param Request $request
     * @param         $txnid
     * @param         $hash
     *
     * @return Transaction
     */
    public function createTransaction(Request $request, $txnid, $amount, $hash, $productIds)
    {
        $transaction = new Transaction();
        $transaction->transaction_id = $txnid;
        $transaction->product_id = json_encode($productIds);
        $transaction->amount = $amount;
        $transaction->hash = $hash;
        $transaction->user_id = \Auth::user()->id;
        $transaction->status = 0;
        $transaction->save();

        return $transaction;
    }
}
