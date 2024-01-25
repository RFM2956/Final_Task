<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Support\Str;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\ProductsImg;
use Intervention\Image\Facades\Image;
use App\Models\shopproduct;
use Illuminate\Support\Facades\Storage;

class ShopAdminController extends Controller
{
     public function index(){
        $shopproduct = shopproduct::all();
        return view('admin.productimgs.index', compact('shopproduct'));
    }


     public function create()
    {
        return view('admin.shop.create');
    }
}
