<?php

namespace App\Http\Controllers;

use App\Models\Produk;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;
use Illuminate\Contracts\Support\ValidatedData;

class DashboardProdukController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('dashboard.posts.index', [
            'items' => Produk::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.posts.create');
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
            'title' => 'required',
            'ex' => 'required',
            'body' => 'required',
            'image' => 'image|max:4096',
            'harga' => 'required'
        ]);

        if ($request->file('image')) {
            $validatedData['image'] = $request->file('image')->store('produks-image');
        }

        Produk::create($validatedData);
        return redirect('dashboard/produk')->with('success', 'New Post has been added');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Produk  $produk
     * @return \Illuminate\Http\Response
     */
    public function show(Produk $produk)
    {
        return view('dashboard.posts.show', [
            'produk' => $produk
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Produk  $produk
     * @return \Illuminate\Http\Response
     */
    public function edit(Produk $produk)
    {
        return view('dashboard.posts.edit', [
            'items' => $produk
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Produk  $produk
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Produk $produk)
    {
        $validatedData = $request->validate([
            'title' => 'required',
            'ex' => 'required',
            'body' => 'required',
            'image' => 'image|max:4096',
            'harga' => 'required'
        ]);

        if ($request->file('image')) {
            if ($request->oldImage) {
                Storage::delete($request->oldImage);
            }
            $validatedData['image'] = $request->file('image')->store('produks-image');
        }

        Produk::where('id', $produk->id)
        ->update($validatedData);


        return redirect('dashboard/produk')->with('success', 'New Post has been Updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Produk  $produk
     * @return \Illuminate\Http\Response
     */
    public function destroy(Produk $produk)
    {
        Produk::destroy($produk->id);

        if ($produk -> image) {
            Storage::delete($produk->image);
        }

        return redirect('dashboard/produk')->with('danger', 'Post has been deleted');
    }
}
