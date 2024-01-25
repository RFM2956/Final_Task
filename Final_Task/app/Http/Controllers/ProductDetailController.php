<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProductDetailController extends Controller
{
    public function index()
    {
        $productDetails = ProductDetail::all(); // Fetch all product details from the database

        return view('home.blade.php', ['productDetails' => $productDetails]);
    }

    // Other controller methods (create, edit, update, delete) can be added here
}
