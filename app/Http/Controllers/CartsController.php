<?php

namespace App\Http\Controllers;

use Cart;
use Illuminate\Http\Request;
use App\Models\Product as Product;

class CartsController extends Controller
{
    public function cart(){
        return view("ClientPart.Portal.cart");
    }
    // utiliser au dessus ou en dessous pour la route
    public function cartA(){
        $params = [
            'title' => 'Shopping Cart Checkout',
        ];

        return view('ClientPart.Portal.cart')->with($params);
    }

    public function add(Request $request){
        $product = Product::find($request->id);

        Cart::add($product->id, $product->name, $product->prix, 1, array());

        return back()->with('success',"$product->name has successfully beed added to the shopping cart!");;
    }

    public function clear(){
        Cart::clear();

        return back()->with('success',"The shopping cart is clean !");;
    }
}
