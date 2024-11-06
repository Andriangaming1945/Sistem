<?php

namespace App\Http\Controllers;

use App\Models\Kategori;
use Illuminate\Http\Request;

class kategoricontroller extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {   
        $kategori = Kategori::all();
        return view("kategori.kategori", compact('kategori'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $kategori = Kategori::all();
        return view("kategori.create", compact('kategori'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            "nama_kategori" => "required"
        ]);

        $kategori = new Kategori([
            "nama_kategori" => $request->nama_kategori
        ]);

        $kategori->save();

        return redirect()->route("admin")->with('success', "Sudah bisa di jalankan");
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
        $kategori = Kategori::find($id);
        return view("kategori.edit", compact('kategori'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            "nama_kategori" => "required"
        ]);

        $kategori = Kategori::find($id);
        $kategori->update([
            'nama_kategori' => $request->nama_kategori
        ]);

        $kategori->save();

        return redirect()->route("admin")->with('success', "Sudah bisa di jalankan");   
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $kategori = Kategori::find($id);

        if($kategori){
            $kategori->delete();
            return redirect()->route('admin')->with('success', "Berhasil di delete");
        }else{
            return redirect()->back()->withErrors('error', 'Tidak berhasil di delete');
        }
    }
}
