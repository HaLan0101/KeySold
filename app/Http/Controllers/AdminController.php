<?php

namespace App\Http\Controllers;
use App\Models\User as User;
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
    public function form_update_membre(){
        return view ('Portal/updatemembre');
    }
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

        auth()->user()->update([
            'email'=>request('email'),
            'nom'=>request('nom'),
            'prenom'=>request('prenom'),
            'date_de_naissance'=>request('date_de_naissance'),
        ]);
        flash('Vous avez réussi de mettre à jour')->success();
        return redirect('Portal/membre');
    }
    public function produit(){
        return view('Portal.produit');
    }
    public function forgotpassword(){
        return view('Connexion.forgotpassword');
    }
}
