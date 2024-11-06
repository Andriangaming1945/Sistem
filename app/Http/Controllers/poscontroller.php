<?php

namespace App\Http\Controllers;

use App\Models\post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class poscontroller extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {   

        $posts = post::latest()->paginate(5);
        return view('karyawan.karyawan', compact('posts'));
        
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {   

        $posts = post::latest()->paginate(5);
        return view('pos.create', compact('posts'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            "harga" => "required",
            "images" => "image|mimes:jpg,png,jpeg|max:2048",
            "judul" => "required",
            "genre" => "required"
        ]);

        $images = $request->file('images');
        $images->storeAs('public/posts', $images->hashName());

        post::create([
            "harga" => $request->harga,
            "images" => $images->hashName(),
            "judul" => $request->judul,
            "genre" => $request->genre
        ]);

        return redirect()->route('karyawan')->with('success', 'Berhasil menambahkan');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $posts = post::findOrFail($id);
        return view("pos.show", compact('posts'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $posts = post::find($id);
        return view("pos.edit", compact('posts'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
         $request->validate([
            "harga" => "required",
            "images" => "image|mimes:jpg,png,jpeg|max:2048",
            "judul" => "required",
            "genre" => "required"
        ]);

         $post = post::find($id);

        if($request->hasFile('images')){
        
        
        $images = $request->file('images');
        $images->storeAs('public/posts', $images->hashName());

       

        $post->update([
            "harga" => $request->harga,
            "images" => $images->hashName(),
            "judul" => $request->judul,
            "genre" => $request->genre
        ]);

       
        
        }else{
            $post->update([
            "harga" => $request->harga,
            "judul" => $request->judul,
            "genre" => $request->genre
        ]);
        
        }

        return redirect()->route('karyawan')->with('success', 'Berhasil menambahkan');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $post = post::find($id);

        Storage::delete('public/posts/'. $post->images);

        $post->delete();


          return redirect()->route('karyawan')->with('success', 'Berhasil dihapus');

    }
}
