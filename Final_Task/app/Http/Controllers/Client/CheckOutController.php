<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Http\Request;

class CheckOutController extends Controller
{
     public function index(){
        $cartItems = Cart::content();
        return view('checkout', ['cartItems' => $cartItems]);
    }

}
