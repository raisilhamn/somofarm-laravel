<?php

namespace App\Http\Controllers;

use App\Models\Produk;
use Illuminate\Http\Request;

class ProdukController extends Controller
{
    public function index()
    {
        $data1 = Produk::find(1);
        $data2 = Produk::find(2);
        $data3 = Produk::find(3);
        return view('produk',[
            "title" => "Produks",
            'data1' => $data1,
            'data2' => $data2,
            'data3' => $data3
        ]);
    }

    public function show($id)
    {
        return view('produk',[
            "title" => "Produks",
            "item" => Produk::find($id)
        ]);
    }



    public function list()
    {
        $data1 = Produk::find(1);
        $data2 = Produk::find(2);
        $data3 = Produk::find(3);
        return view('home',[
            'data1' => $data1,
            'data2' => $data2,
            'data3' => $data3
        ]);
    }

}
