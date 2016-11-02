<?php

namespace App\Http\Controllers;

use App\Http\Requests\CheckOutRequest;
use App\Models\Order;
use App\Models\Product;
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
      foreach($items as $item)
      {
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

      return view('sendToGateway')->with('salt', $payUMoneySalt)->with('action', $action)->with('key', $payUMoneyKey)->with('txnid', $transactionId)->with('amount', $amount)->with('productinfo', $productInfo)->with('firstname', Auth::user()->name)->with('email', Auth::user()->email)->with('phone', \Auth::user()->phone)->with('surl', $successUrl)->with('furl', $failureUrl)->with('hash', $hash);
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
}
