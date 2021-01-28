<?php

namespace App\Http\Controllers;
use Auth;
use Illuminate\Http\Request;
use App\Models\Product as Product;
use App\Models\Comment as Comment;
class ProductsController extends Controller
{
    public function product($id){
        $product= Product::where('id',$id)->first();
        $user= auth()->user();
        $comments=Comment::all()->where('id_product',$id);
        return view('ClientPart.Layout.productTemplate',[
            'user'=>$user,
            'product'=>$product,
            'comments'=>$comments,
        ]);
    }
}
