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

    public function store() {
        session()->forget('coupon');
        $duplicates = Cart::instance('default')->search(function($cartItem, $rowId) {
            return $cartItem->id == request()->id;
        });
        $duplicatesLater = Cart::instance('saveForLater')->search(function($cartItem, $rowId) {
            return $cartItem->id == request()->id;
        });
        if($duplicates->isNotEmpty()) {
            session()->flash('success', 'Item is already in your cart');
            return redirect()->route('cart.index');
        } else if($duplicatesLater->isNotEmpty()) {
            Cart::instance('saveForLater')->remove($duplicatesLater->first()->rowId);
        }
        Cart::instance('default')->add(request()->id, request()->name, 1, request()->price)->associate('App\Product');
        session()->flash('success', 'product added to the cart');
        return redirect()->route('cart.index');
    }

    public function update($id) {
        session()->forget('coupon');
        Cart::instance('default')->update($id, request()->quantity);
        session()->flash('success', 'quantity updated successfully!');
        return response()->json(['success' => ''], 200);
    }

    public function destroy($id, $cart) {
        if($cart == 'default')
        Cart::instance('default')->remove($id);
        else if($cart = 'saveForLater')
        Cart::instance('saveForLater')->remove($id);
        session()->flash('success', 'item has been removed');
        return back();
    }
    
    public function saveLater($id) {
        session()->forget('coupon');
        $item = Cart::get($id);
        Cart::remove($id);
        $duplicates = Cart::instance('saveForLater')->search(function($cartItem, $rowId) use ($id) {
            return $rowId == $id;
        });
        if($duplicates->isNotEmpty()) {
            session()->flash('success', 'Item is already saved for later');
            return redirect()->route('cart.index');
        }
        Cart::instance('saveForLater')->add($item->id, $item->name, 1, $item->price)->associate('App\Product');
        session()->flash('success', 'Item has been saved for later');
        return redirect()->route('cart.index');
    }
    
    public function addToCart($id) {
        session()->forget('coupon');
        $item = Cart::instance('saveForLater')->get($id);
        Cart::instance('saveForLater')->remove($id);
        $exist = Cart::instance('default')->search(function($cartItem, $rowId) use($item) {
            return $cartItem->id == $item->id;
        });
        if($exist->isNotEmpty()) {
            session()->flash('success', 'Item is already in the cart');
            return redirect()->route('cart.index');
        }
        Cart::instance('default')->add($item->id, $item->name, 1, $item->price)->associate('App\Product');
        session()->flash('success', 'item added to the cart');
        return redirect()->route('cart.index');
    }

}
