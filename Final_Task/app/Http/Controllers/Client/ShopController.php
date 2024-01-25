<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Products;
use App\Models\ProductsImg;
use Illuminate\Http\Request;

class ShopController extends Controller
{
    public function index($slug=null)
    {
        if ($slug) {
            $foundCategory = Category::where('slug', $slug)->first();
            $products = ProductsImg::where('category_id', $foundCategory->id)->get();
        } else {
            $products = ProductsImg::all();
        }

        return view('shop', compact('products'));
    }


    public function detail($id)
    {


        $product = ProductsImg::findOrFail($id);
        if (!$product) {
            return abort(404);
        }

        return view('shop_details', compact('product'));
    }
}
