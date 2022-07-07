<?php

namespace App\Http\Controllers;

use App\Models\Produk;
use Illuminate\Http\Request;

class ProdukController extends Controller
{
    public function index()
    {
        $data = Produk::all();
        return view('produk',[
            // 'data1' => $data1,
            // 'data2' => $data2,
            'items' => $data
        ]);
    }

    public function show($id)
    {
        return view('detail',[
            "title" => "Produks",
            "item" => Produk::find($id)
        ]);
    }




    public function produkAll()
    {
        $data = Produk::all();
        return view('home',[
            // 'data1' => $data1,
            // 'data2' => $data2,
            'items' => $data
        ]);
    }


    public function home()
    {
        $data = Produk::all();
        return view('home',[
            // 'data1' => $data1,
            // 'data2' => $data2,
            'items' => $data
        ]);
    }

}
