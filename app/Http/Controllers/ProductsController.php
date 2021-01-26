<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product as Product;

class ProductsController extends Controller
{
    public function product(int $id){
        $products= Product::all()->where($id)->first();
        return view('ClientPart.Portal.product',[
            'products'=>$products
        ]);
    }
}
