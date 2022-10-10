<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

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

/***** view *****/
Route::get('/', function () {
    return view('index',['menu'=>'Home']);
});

Route::get('/shop', function () {
    return view('Shop',['menu'=>'Shop']);
});

Route::get('/blog_home', function () {
    return view('Blog',['menu'=>'Blog']);
});

Route::get('/contact', function () {
    return view('Contact',['menu'=>'Contact']);
});

Route::get('/sign-in', function () {
    return view('SignIn',['menu'=>'User']);
});

Route::get('/sign-up', function () {
    return view('SignUp',['menu'=>'User']);
});

Route::get('/shopping-cart', function () {
    return view('ShoppingCart',['menu'=>'User']);
});


/***** function *****/
Route::post('/join', [UserController::class,'SignUp']);
