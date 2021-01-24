<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('Connexion.login');
});
Route::group([
    'middleware'=>'App\Http\Middleware\Auth'
],function(){
    Route::get('/updatemembre','App\Http\Controllers\AdminController@form_update_membre');
    Route::post('/updatemembre','App\Http\Controllers\AdminController@update_membre');
    Route::get('Portal/dashboard','App\Http\Controllers\AdminController@dashboard');
    Route::get('Portal/membre','App\Http\Controllers\AdminController@membre');
    Route::get('/produit','App\Http\Controllers\AdminController@produit');
    Route::get('/signout','App\Http\Controllers\LoginController@signout');
});


Route::get('/forgotpassword','App\Http\Controllers\AdminController@forgotpassword');

Route::get('/register','App\Http\Controllers\RegisterController@register');
Route::post('/register','App\Http\Controllers\RegisterController@createUser');


Route::get('/login','App\Http\Controllers\LoginController@login');
Route::post('/login','App\Http\Controllers\LoginController@connexion');

