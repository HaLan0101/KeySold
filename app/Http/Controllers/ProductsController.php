<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product as Product;

class ProductsController extends Controller
{
    public function product($id){
        $product= Product::where('id',$id)->first();
        return view('ClientPart.Portal.product',[
            'products'=>$product
        ]);
    }
}
