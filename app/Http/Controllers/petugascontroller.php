<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class petugascontroller extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $petugas = User::all();
        return view('admin.petugas', compact('petugas'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
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
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            "role" => "required|in:user,karyawan,admin"
        ]);

        $petugas = User::find($id);
        $petugas->role = $request->role;
        $petugas->save();

        return redirect()->route('admin')->with('success', 'Status sudah di perbarui');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $petugas = User::find($id);

        if($petugas){
            $petugas->delete();
            return redirect()->route('admin')->with('success', '1 anggota berhasil di hapus');
        }else{
            return redirect()->back()->withErrors('error', 'Tidak berhasil di hapus');
        }
    }
}
