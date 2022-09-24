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
    return view('index',['menu'=>'Home']);
});

Route::get('/shop', function () {
    return view('Shop',['menu'=>'Shop']);
});

Route::get('/blog_home', function () {
    return view('Blog',['menu'=>'Blog']);
});

Route::get('/SignIn', function () {
    return view('SignIn',['menu'=>'SignIn']);
});
