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

    public function add(Request $request){
        $product = Product::find($request->id);

        if(auth()->user()){

            Cart::add(array(
                'id' => $product->id,
                'name' => $product->nom,
                'price' => $product->prix,
                'quantity' => 1,
                'attributes' => array()
            ));
            flash('Cet article a bien été ajouté à votre panier')->success();
            return back();
        }
        else{
            flash('Vous devez être connecté pour cela')->error();
            return back();
        }

    }

    // public function quantityUp(){

    //     Cart::update(1 /*productID*/,[
    //         'quantity' => [
    //             'relative' => true, //(false = écrase la valeur/ true = incremente de la valeur)
    //             'value' => 1
    //         ],
    //     ]);

    // }
    // public function quantityDown(){

    //     Cart::update(1 /*productID*/,[
    //         'quantity' => [
    //             'relative' => true, //(false = écrase la valeur/ true = incremente de la valeur)
    //             'value' => -1
    //         ],
    //     ]);

    // }

    public function clear(){
        Cart::clear();

        flash('Votre panier a bien été vidé')->success();
        return back();
    }
}
