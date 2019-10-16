<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use Cart;

class CartController extends Controller
{

    public function index() {
        $mightLike = Product::mightAlsoLike()->get();
        return view('cart')->with('mightLike', $mightLike);
    }


}
