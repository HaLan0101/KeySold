<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function dashboard(){
        return view('Portal.dashboard');
    }
    public function membre(){
        return view('Portal.membre');
    }
    public function produit(){
        return view('Portal.produit');
    }
    public function login(){
        return view('Connexion.login');
    }
    public function register(){
        return view('Connexion.register');
    }
    public function forgotpassword(){
        return view('Connexion.forgotpassword');
    }
}
