<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Bnet\Cart\Facades\CartFacade;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Lutforrahman\Nujhatcart\Facades\Cart;
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
    unset($request['_token']);

    $product = Product::where('id', $request->id)->with(['colors','images'])->first();

    $item = [
        'id' => $request->id,
        'sku' => $request->sku,
        'name' => $request->name,
        'slug' => $request->id.'/'. Str::slug($request->name),
        'image' => $product->location,
        'description' => $product->name. '<br /> Size:'. $request->size. '<br /> Color:'. $request->color,
        'quantity' => $request->quantity,
        'price' => $product->price,
        'discount' => 0,
        'tax' => 0,
        'options' => array('size' => $request->size, 'color' => $request->color)
    ];

    $added = Cart::insert($item);
    if($added)
    {
      return json_encode('success');
    }
    else
    {
      return json_encode('failure');
    }
  }

  public function getCart()
  {
    $items = Cart::contents();
    return view('shop.cart', compact('items'));

  }
}
