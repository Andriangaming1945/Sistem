<?php

namespace App\Http\Controllers;

use App\Models\Lokasi;
use Illuminate\Http\Request;

class lokasicontroller extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {   
        $lokasi = Lokasi::all();
        return view('lokasi.lokasi', compact('lokasi'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $lokasi = Lokasi::all();
        return view('lokasi.create', compact('lokasi'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            "kd_lokasi" => "required",
            "label" => "required",
            "rak"
        ]);

       $lokasi = new Lokasi([
        "kd_lokasi" => $request->kd_lokasi,
        "label" => $request->label,
        "rak" => $request->rak
       ]);

       $lokasi->save();

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
        $lokasi = Lokasi::find($id);
        return view('lokasi.edit', compact('lokasi'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            "kd_lokasi" => "required",
            "label" => "required",
            "rak" => "required"
        ]);

        $lokasi = Lokasi::findOrFail($id);
        $lokasi->update([
            "kd_lokasi" => $request->kd_lokasi,
            "label" => $request->label,
            "rak" => $request->rak
        ]);

        return redirect()->route('admin')->with("success", "Berhasil diperbarui");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $lokasi = Lokasi::find($id);

        if($lokasi){
            $lokasi->delete();
            return redirect()->route('admin')->with('success', "Berhasil di delete");
        }else{
            return redirect()->back()->withErrors('error', 'Tidak berhasil di delete');
        }
    }
}
