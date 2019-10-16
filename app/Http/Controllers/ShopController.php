<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;

class ShopController extends Controller
{
    

    public function index() {
        $products = Product::inRandomOrder()->take(10)->get();
        return view('shop')->with('products', $products);
    }

    public function show($slug) {
        $product = Product::where('slug', $slug)->firstOrFail();
        $mightLike = Product::where('slug', '!=', $product->slug)->mightAlsoLike()->get();
        return view('product')->with('product', $product)->with('mightLike', $mightLike);
    }
}
