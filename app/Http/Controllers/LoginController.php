<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    //
    public function login(){
        return view('Connexion.login');
     }
    //une fonction qui récupere les éléments du formulaire, check les validations
    public function connexion(){
        //regle validation
        request()->validate([
            //email required et format email
            'email'=>['required','email'],
            //password obligatoire
            'password'=>['required','min:8'],

        ]);

        if(auth()->attempt(['email'=> request('email'),'password'=> request('password')]))
        {
            if(auth()->user()->is_admin==1){
                return view('Portal.dashboard');
            }
            else{
                return view('ClientPart.Portal.index');
            }
        }else{
            return back()->withErrors([
                'email'=>"Ces informations d'identification ne correspondent pas à nos enregistrements"
            ]);
        }

    }
    public function signout(){
        auth()->logout();
        return redirect('/signout');
    }
}
