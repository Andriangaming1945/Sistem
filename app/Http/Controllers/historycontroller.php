<?php

namespace App\Http\Controllers;

use App\Models\Buku;
use App\Models\Kategori;
use App\Models\Lokasi;
use Illuminate\Http\Request;

class Historycontroller extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $lokasi = Lokasi::all();
        $kategori = Kategori::all();
        $buku = Buku::all();
        return view('user.history', compact('buku', 'kategori', 'lokasi'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $lokasi = Lokasi::all();
        $kategori = Kategori::all();
        $buku = Buku::all();
        return view('history.create', compact('buku', 'lokasi', 'kategori'));
        
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            "id_lokasi" => "required",
            "id_kategori" => "required",
            "judul" => "required",
            "pengarang" => "required",
            "penerbit" => "required",
            "tahun_terbit" => "required",
            "keterangan" => "required",
            "stok" => "required",
        ]);

        $buku = new Buku([
            "id_lokasi" => $request->id_lokasi,
            "id_kategori" => $request->id_kategori,
            "judul" => $request->judul,
            "pengarang" => $request->pengarang,
            "penerbit" => $request->penerbit,
            "tahun_terbit" => $request->tahun_terbit,
            "keterangan" => $request->keterangan,
            "stok" => $request->stok
        ]);
    
           $buku->save();
    
           return redirect()->route('admin')->with("success", "Berhasil di store");

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $lokasi = Lokasi::all();
        $kategori = Kategori::all();
        $buku = Buku::find($id);
        return view('history.edit', compact('buku', 'lokasi', 'kategori'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            "id_lokasi" => "required",
            "id_kategori" => "required",
            "judul" => "required",
            "pengarang" => "required",
            "penerbit" => "required",
            "tahun_terbit" => "required",
            "keterangan" => "required",
            "stok" => "required",
        ]);
        $buku = Lokasi::findOrFail($id);
        $buku->update([
            "id_lokasi" => $request->id_lokasi,
            "id_kategori" => $request->id_kategori,
            "judul" => $request->judul,
            "pengarang" => $request->pengarang,
            "penerbit" => $request->penerbit,
            "tahun_terbit" => $request->tahun_terbit,
            "keterangan" => $request->keterangan,
            "stok" => $request->stok
        ]);

        return redirect()->route('user')->with("success", "Buku berhasil dirubah");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Buku::findOrFail($id)->delete();

        return redirect()->route('user')->with("success", "Buku berhasil dihapus");
    }
}