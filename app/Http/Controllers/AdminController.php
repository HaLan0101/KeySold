<?php

namespace App\Http\Controllers;
use App\Models\User as User;
use App\Models\Product as Product;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    // public function dashboard(){
    //     return view('Portal.dashboard');
    // }
    public function membre(){
        $users= User::all(); 
        return view('Portal/membre',[
            'users'=>$users
        ]);
    }
    public function dashboard(){
        $usersCount= User::all();
        return view('Portal/dashboard',[
            'usersCount'=>$usersCount
        ]);
    }
    // public function form_update_membre(){
    //     return view ('Portal/updatemembre');
    // }
    public function update_membre()
    {
        request()->validate([
            'email'=>['required'],
            'nom'=>['required'],
            'prenom'=>['required'],
            'date_de_naissance'=>['required'],
        ]);
        //recuperer l'instance de l'utilisateur connecte
        //modifier ces donnees
        $id=request('id');
        User::where('id',$id)->first()->update([
            'email'=>request('email'),
            'nom'=>request('nom'),
            'prenom'=>request('prenom'),
            'date_de_naissance'=>request('date_de_naissance'),
        ]);
        flash('Vous avez réussi de mettre à jour')->success();
        return redirect('Portal/membre');
    }
    public function form_update_membre(int $id){
        $user= User::all()->where('id',$id)->first();
        return view('Portal/updatemembre',[
            'user'=>$user
        ]);
    }
    public function product(){
        $products= Product::all(); 
        return view('Portal/product',[
            'products'=>$products
        ]);
    }
    public function form_createproduct(){
        return view('Portal.createproduct');
    }
    public function createproduct(){
        request()->validate([
            'nom'=> ['required'],
            'description'=> ['required'],
            'prix'=> ['required'],
            'quantite'=> ['required'],
            'code'=> ['required','min:8'],
        ]);
        $product= Product::create([
            'nom'=> request('nom'),
            'description'=>request('description'),
            'prix'=>request('prix'),
            'quantite'=>request('quantite'),
            'code'=>request('code')
        ]);
        return redirect('Portal/product');
    }
    public function forgotpassword(){
        return view('Connexion.forgotpassword');
    }
}
