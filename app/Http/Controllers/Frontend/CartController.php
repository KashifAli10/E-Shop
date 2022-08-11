<?php

namespace App\Http\Controllers\Frontend;

use App\Models\Cart;
use App\Models\Product;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class CartController extends Controller
{
    public function AddProduct(Request $request)
    {
        //dd($request);
        $product_id = $request->input('product_id');
        $product_qty = $request->input('product_qty');

        if (Auth::check()) {
            $prod_check= Product::where('id',$product_id)->first();

            if($prod_check)
            {
                if (Cart::where('prod_id', $product_id)->where('user_id', Auth::id())->exists())
                {
                    return response()->json(['status'=> $prod_check->name. "Already Added to Cart"]);
                }
                else
                {
                    $cartitem= new Cart();
                    $cartitem->prod_id = $product_id;
                    $cartitem->user_id = Auth::id();
                    $cartitem->prod_qty = $product_qty;
                    $cartitem->save();
                    return response()->json(['status'=> $prod_check->name. "Added to Cart"]);
                }

            }
        } else {
            return response()->json(['status'=> "Login to Continue"]);
        }
}

public function viewcart()
    {
        $cartitem =Cart::where('user_id',Auth::id())->get();
       // dd ($cartitem);
        return view('frontend.mycart', compact('cartitem'));
    }

    
}
