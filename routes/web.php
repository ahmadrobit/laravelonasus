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
//    return view('welcome');
    return view('home',[
        "nama"=>"ahmad robit"
    ]);
});
Route::get('/about ', function () {
    return view('about',[
        "name"=>"ahmad robit zumri"
    ]);
});
Route::get('/posts', function () {
    return view('posts');
});

Route::redirect('/pusat', '/bola');

