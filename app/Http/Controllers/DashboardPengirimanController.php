<?php

namespace App\Http\Controllers;

use App\Models\Produk;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Pengiriman;
use App\Models\User;
use Illuminate\Support\Facades\Storage;
use Illuminate\Contracts\Support\ValidatedData;
use Illuminate\Support\Facades\Hash;

class DashboardPengirimanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $this->authorize('admin');
        return view('dashboard.pengiriman.index', [
            'items' => Pengiriman::all()
        ]);
    }

    public function indexUser()
    {
        // $this->authorize('admin');
        return view('dashboard.pengiriman.indexUser', [
            'items' => Pengiriman::all()
        ]);
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.pengiriman.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required',
            'status' => 'required',
            'tracking' => 'required',
            'tgl' => 'required'
        ]);

        Pengiriman::create($validatedData);
        return redirect('dashboard/pengiriman')->with('success');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Produk  $produk
     * @return \Illuminate\Http\Response
     */
    public function show(Pengiriman $pengiriman)
    {
        return view('dashboard.users.show', [
            'items' => $pengiriman
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Produk  $produk
     * @return \Illuminate\Http\Response
     */
    public function edit(Pengiriman $pengiriman)
    {
        return view('dashboard.pengiriman.edit', [
            'items' => $pengiriman
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Produk  $produk
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Pengiriman $pengiriman)
    {
        $validatedData = $request->validate([
            'name' => 'required',
            'status' => 'required',
            'tracking' => 'required',
            'tgl' => 'required'
        ]);


        Pengiriman::where('id', $pengiriman->id)
        ->update($validatedData);


        return redirect('dashboard/pengiriman')->with('success', 'Tracking has been Updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\User  $User
     * @return \Illuminate\Http\Response
     */
    public function destroy(Pengiriman $pengiriman)
    {
        Pengiriman::destroy($pengiriman->id);

        return redirect('dashboard/pengiriman')->with('danger', 'pengiriman has been deleted');
    }
}
