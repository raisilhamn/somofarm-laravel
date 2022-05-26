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
            "title" => "Produks",
            'data' => $data
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
        echo "code run";
    }
}
