<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Coupon;
use Cart;

class CouponsController extends Controller
{
    public function store(Request $request)
    {
        $this->validate($request, [
            'coupon_code' => 'required'
        ]);
        $coupon = Coupon::where('code', $request->coupon_code)->first();
        if(!$coupon) return redirect()->route('checkout.index')->with('error', 'Invalid Coupon Code');
        session()->put('coupon', [
            'code' => $coupon->code,
            'discount' => $coupon->discount(Cart::instance('default')->subtotal())
        ]);
        
        return redirect()->route('checkout.index')->withSuccess('Coupon applied successfully!');
    }

    
    public function destroy()
    {
        session()->forget('coupon');
        return redirect()->route('checkout.index')->with('success', 'Coupon has been removed');
    }
}
