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




Route::get('/produk', function () {
    return view('produk', [
        "title" => "[produk]",
    ]);
});

Route::get('/produks','App\Http\Controllers\ProdukController@index');
// Route::get('/produk/{id}','ProdukController@show');




Route::get('/login', function () {
    return view('sign_in');
});

Route::get('/cart', function () {
    return view('cart');
});


Route::get('/dashboard', function () {
    return view('dashboard.index');
});

Route::get('/crud', function () {
    return view('dashboard.crud_produk');
});
