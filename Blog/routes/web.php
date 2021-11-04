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
    return view('welcome');
});

Route::get('/home', function () {
    return view('main');
});

Route::match(['get','post'],'Login', ['as' => 'Login', 'uses' =>'LoginController@index']);
Route::post('/RegistEmail', 'LoginController@sendMail');
