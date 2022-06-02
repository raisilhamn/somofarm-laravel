<?php

use App\Models\Produk;
use App\Http\Controllers\ProdukController;
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
        "title" => "home",
    ]);
});


// Route::get('/produk', function () {
//     return view('produk', [
//         "title" => "[produk]",
//     ]);
// });

/*
Edit ini untuk akses database melalui kontroller
*/

Route::get('/produk', 'App\Http\Controllers\ProdukController@index');
// Route::get('/produk', 'App\Http\Controllers\ProdukController@ProdukAll');
Route::get('/dashboard/produk','DashboardProdukController@edit');
// Route::get('/', 'App\Http\Controllers\ProdukController@list');
Route::get('/', 'App\Http\Controllers\ProdukController@home');


Route::get('/login', 'App\Http\Controllers\LoginController@index')->middleware('guest');
Route::post('/login', 'App\Http\Controllers\LoginController@authenticate');
Route::post('/logout', 'App\Http\Controllers\LogoutController@logout');




// Route::get('/login', function () {
//     return view('sign_in');
// });



Route::get('/cart', function () {
    return view('cart');
});


Route::get('/dashboard', function () {
    return view('dashboard.index');
});

// Route::get('/produk', function () {
//     return view('dashboard.crud_produk');
// });

Route::resource(
    '/dashboard/produk',
    App\Http\Controllers\DashboardProdukController::class
);
