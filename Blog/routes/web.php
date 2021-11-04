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

// Trang chu
Route::get('/home', function () {
    return view('main');
});

// Dang nhap
Route::match(['get','post'],'Login', ['as' => 'Login', 'uses' =>'LoginController@Login']);

// Dang ki
Route::match(['get','post'],'Register', ['as' => 'Register', 'uses' =>'LoginController@Register']);
// Dang ki nhan thong bao qua mail
Route::post('/RegistEmail', 'LoginController@sendMail');

// Sau khi dang nhap
Route::group(['middleware' => 'auth' ], function() {
    Route::get('/Logout', 'LoginController@Logout');
});