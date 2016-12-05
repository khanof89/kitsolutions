<?php

namespace App\Http\Controllers\Admin;

use App\Models\CategoryProduct;
use App\Models\Product;
use App\Models\ProductCategory;
use App\Models\ProductColor;
use App\Models\ProductImage;
use App\Models\ProductSize;
use App\Models\ProductTag;
use App\User;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;

class IndexController extends Controller
{
    public function index()
    {
      $count = Product::count();
      return view('admin.dashboard',compact('count'));
    }

    public function doAdd()
    {
        $categories= ProductCategory::get();
        return view('admin.add', compact('categories'));
    }

    public function showAdd(Request $request)
    {
        /*dd($request->all());*/
        if(!file_exists(public_path('images')))
        {
            mkdir(public_path('images'));
        }

        $file = $request->file('location');
        $extension = $file->getClientOriginalExtension();
        $destinationPath = public_path('images');
        $picture = str_random(15).'.'.$extension;
        $file->move($destinationPath, $picture);


        $product = new Product();
        $product->name = $request->name;
        $product->price = $request->price;
        $product->description = $request->description;
        $product->location = '/images/'.$picture;
        $product->quantity = $request->quantity;
        $product->save();


        $files = Input::file('multiple_images');

            foreach($files as $file){
                $extension = $file->getClientOriginalExtension();
                $destinationPath = public_path('images');
                $picture = str_random(15).'.'.$extension;
                $file->move($destinationPath, $picture);

                $saveImage = new ProductImage();
                $saveImage->location = 'images/'.$picture;
                $saveImage->product_id = $product->id;
                $saveImage->save();
            }


        if(count($request->category))
        {
            foreach ($request->category as $cat)
            {
                $ctry = new CategoryProduct();
                $ctry->category_id = $cat;
                $ctry->product_id = $product->id;
                $ctry->save();
            }
        }
        if(count($request->color))
        {
            foreach($request->color as $clr )
            {
                $klr = new ProductColor();
                $klr->color = $clr;
                $klr->product_id = $product->id;
                $klr->save();
            }
        }


        if(count($request->size))
        {
            foreach ($request->size as $sz)
            {
                $sze = new ProductSize();
                $sze->size = $sz;
                $sze->product_id = $product->id;
                $sze->save();
            }
        }
        if(count($request->tag))

        {
            $tag = new ProductTag();
            $tag->name = $request->tag;
            $tag->product_id = $product->id;
            $tag->save();
        }
        \Session::flash('flash_message', 'Product successfully added!');
        return redirect('admin/add-product');

    }

    public function showProducts()
    {
        $products = Product::paginate(15);
        return view('admin.show',compact('products'));
    }

    /**
     * @return string
     */
    public function showEdit($id)
    {
        $products = Product::with('categories', 'colors','sizes')->findOrFail($id);
        $tags = ProductTag::where('id', $id)->get();
        $categories = ProductCategory::get();

        return view('admin.edit',compact('products','categories','tags'));
    }

    public function doEdit(Request $request, $id){

        $name = $request->name;
        $price = $request->price;
        $description = $request->description;
        $location = $request->location;
        $quantity = $request->quantity;

        $edit = Product::findOrFail($id);
        if (!empty($name)) {
            $edit->name = $name;
        }
        if (!empty($price)) {
            $edit->price = $price;
        }
        if (!empty($description)) {
            $edit->description = $description;
        }
        if (!empty($location)) {
            $edit->location = $location;
        }
        if (!empty($quantity)) {
            $edit->quantity = $quantity;
        }

        if(count($request->category))
        {
            CategoryProduct::where('product_id', $id)->delete();
            foreach ($request->category as $cat)
            {
                $ctry = new CategoryProduct();
                $ctry->category_id = $cat;
                $ctry->product_id = $id;
                $ctry->save();
            }
        }

        $edit->save();
        \Session::flash('flash_message', 'Product successfully updated!');
        return redirect()->back();
    }
    public function doDelete($id){

        $product = Product::findOrFail($id)->delete();
        \Session::flash('flash_message', 'Product successfully Delete!');
        return redirect()->back();
    }
}
