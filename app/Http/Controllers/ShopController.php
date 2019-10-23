<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\Category;

class ShopController extends Controller
{
    

    public function index() {
        $pagination = 12;
        if(request()->category) {
            $category = Category::where('slug', request()->category)->get()->first();
            $products = Product::where('category_id', $category->id);
            $categoryName = $category->name;
        } else {
            $products = Product::where('featured', true);
            $categoryName = 'Featured';
        }
        if(request()->sort == 'low_high') {
            $products = $products->orderBy('price')->paginate($pagination);
        } else if(request()->sort == 'high_low') {
            $products = $products->orderBy('price', 'desc')->paginate($pagination);
        } else {
            $products = $products->inRandomOrder()->paginate($pagination);
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
        $images = json_decode($product->images);
        $mightLike = Product::where('slug', '!=', $product->slug)->mightAlsoLike()->get();
        return view('product')->with([
            'product' => $product,
            'mightLike' => $mightLike,
            'images' => $images
        ]);
    }

    public function search($query) {
        if(strlen($query) < 3) return back()->with('error', 'minimum query length is 3');
        // $products = Product::where('name', 'like', '%' . $query . '%')
        //                         ->orWhere('details', 'like', '%' . $query . '%')
        //                         ->orWhere('description', 'like', '%' . $query . '%')
        //                         ->paginate(10);
        $products = Product::search($query)->paginate(10);
        return view('search')->with(['products' => $products, 'query' => $query]);
    }
}
