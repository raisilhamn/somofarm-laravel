<?php

namespace App\Http\Controllers;

use App\Models\Produk;
use App\Models\User;
use Illuminate\Http\Request;

class DashboardGeneralController extends Controller
{
    public function index()
    {
        return view('dashboard.index', [
            'items' => Produk::all(),
            'user' => User::all()
        ]);
    }
}
