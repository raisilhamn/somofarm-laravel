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
    return view('home', [
        "title" => "",
    ]);
});

Route::get('/produk', function () {
    return view('produk', [
        "title" => "produk",
    ]);
});



Route::get('/login', function () {
    return view('sign_in');
});

Route::get('/cart', function () {
    return view('cart');
});


Route::get('/dashboard', function () {
    return view('dashboard');
});



// Route::get('/signup', function () {
//     return view('signup');
// });