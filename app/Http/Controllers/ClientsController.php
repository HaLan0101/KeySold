<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User as User;
use App\Models\Product as Product;

class ClientsController extends Controller
{
    public function index(){
        // $users= User::all();
        $products= Product::all();
        return view('ClientPart.Layout.indexTemplate',[
            'products'=>$products,
            // 'user'=>$users
        ]);
    }

    public function profile(){
        $user= auth()->user();
        return view('ClientPart.Portal.profile',[
            'user'=>$user
        ]);
    }
    public function form_updateprofile(){
        $user= auth()->user();
        return view('ClientPart.Portal.updateprofile',[
            'user'=>$user
        ]);
    }
    public function updateprofile()
    {
        request()->validate([
            'email'=>['required'],
            'nom'=>['required'],
            'prenom'=>['required'],
            'date_de_naissance'=>['required'],
        ]);
        $id=request('id');
        User::where('id',$id)->first()->update([
            'email'=>request('email'),
            'nom'=>request('nom'),
            'prenom'=>request('prenom'),
            'date_de_naissance'=>request('date_de_naissance'),
        ]);
        flash('Vous avez réussi de mettre à jour')->success();
        return redirect('/profile');
    }
}
