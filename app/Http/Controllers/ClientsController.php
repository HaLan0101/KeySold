<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User as User;
use App\Models\Product as Product;

class ClientsController extends Controller
{
    public function index(){
        $users= User::all();
        $products= Product::all();
        return view('ClientPart.Portal.index',[
            'products'=>$products,
            'user'=>$users
        ]);
    }

    public function profile(){
        $user= auth()->user();
        return view('ClientPart.Portal.profile',[
            'user'=>$user
        ]);
    }
}
