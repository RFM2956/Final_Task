<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Img;
use App\Models\ProductsImg;
use App\Models\Slide;

class HomeController extends Controller
{
    public function index(){
        $images = Img::all();
        $productimgs = ProductsImg::all();
        $slides = Slide::all();

        return view('home', compact('images', 'productimgs', 'slides'));
    }
}
