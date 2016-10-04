<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Syscover\ShoppingCart\CartProvider;
use Syscover\ShoppingCart\Item;

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
    \Log::info('id'. $request->id. ' name '. $request->name. ' color '. $request->color. ' size '. $request->size);
    $cart = new CartProvider;
    $cart->instance()->add(new Item($request->id, $request->name, $request->quantity, $request->color));
    //new TaxRule('IVA', 21), ['size' => $request->size]

    if($cart)
    {
      return json_encode($cart);
    }
  }

  public function getCart()
  {
    $cart = new CartProvider();
    foreach ($cart->instance()->getCartItems() as $item)
    {
      echo'<pre>';
      print_r($item);
      echo '</pre>';
    }
  }
}
