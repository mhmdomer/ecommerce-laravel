<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\Category;

class ShopController extends Controller
{
    

    public function index() {
        if(request()->category) {
            $category = Category::where('slug', request()->category)->get()->first();
            $products = Product::where('category_id', $category->id);
            $categoryName = $category->name;
        } else {
            $products = Product::inRandomOrder()->where('featured', true);
            $categoryName = 'Featured';
        }
        if(request()->sort == 'low_high') {
            $products = $products->orderBy('price')->paginate(9);
        } else if(request()->sort == 'high_low') {
            $products = $products->orderBy('price', 'desc')->paginate(9);
        } else {
            $products = $products->orderBy('id')->paginate(9);
        }
        $categories = Category::all();
        return view('shop')->with([
            'products' => $products,
            'categories'=> $categories,
            'categoryName' => $categoryName
            ]);
    }

    public function show($slug) {
        $product = Product::where('slug', $slug)->firstOrFail();
        $mightLike = Product::where('slug', '!=', $product->slug)->mightAlsoLike()->get();
        return view('product')->with('product', $product)->with('mightLike', $mightLike);
    }
}
