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
        
        $result = auth()->attempt([
            'email'=> request('email'),
            'password'=> request('password')
        ]);

        if($result){
            return view('Portal.dashboard');
        }
        return back()->withErrors([
            'email'=>"Ces informations d'identification ne correspondent pas à nos enregistrements"
        ]);
    }
}
