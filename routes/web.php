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
    return view('Layout.app');
});
Route::get('/dashboard','App\Http\Controllers\AdminController@dashboard');
Route::get('/membre','App\Http\Controllers\AdminController@membre');
Route::get('/produit','App\Http\Controllers\AdminController@produit');
Route::get('/login','App\Http\Controllers\AdminController@login');
Route::get('/register','App\Http\Controllers\AdminController@register');
Route::get('/forgotpassword','App\Http\Controllers\AdminController@forgotpassword');