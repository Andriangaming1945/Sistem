<?php

namespace App\Http\Controllers;

use App\Models\Borrowing;
use App\Models\Buku;
use App\Models\User;
use Illuminate\Http\Request;

class pengembaliancontroller extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $books = Buku::all();
        // Ambil daftar anggota untuk dipilih
        $users = User::all();
        $borrowings = Borrowing::all();
        return view('pengembalian.index', compact('borrowings', 'users', 'books'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $books = Buku::all();
        // Ambil daftar anggota untuk dipilih
        $users = User::all();
        $borrowings = Borrowing::all();
        return view('pengembalian.create', compact('books', 'users', 'borrowings'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'buku_id' => 'required',
            'users_id' => 'required',
            'borrowed_at' => 'required|date',
            'due_date' => 'required|date',
            
            // tambahkan validasi lainnya sesuai kebutuhan
        ]);

        // Simpan peminjaman
        $borrowings = new Borrowing([
            'buku_id' => $request->buku_id,
            'users_id' => $request->users_id,
            'borrowed_at' => $request->borrowed_at,
            'due_date' => $request->due_date
        ]);

        $borrowings->save();

        return redirect()->route('admin')
                         ->with('success', 'Borrowing created successfully.');
    }
    

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return view('pengembalian.show', compact('borrowing'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $books = Buku::all();
        // Ambil daftar anggota untuk dipilih
        $users = User::all();
        $borrowings = Borrowing::all();
        return view('pengembalian.edit', compact('borrowings', 'books', 'users'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'buku_id' => 'required',
            'users_id' => 'required',
            'borrowed_at' => 'required|date',
            'due_date' => 'required|date',
        ]);
    
        $borrowings = Borrowing::find($id);
    
        $borrowings->update([
            'buku_id' => $request->buku_id,
            'users_id' => $request->users_id,
            'borrowed_at' => $request->borrowed_at,
            'due_date' => $request->due_date
        ]);
    
        $fine = $borrowings->calculateFine(); // hitung ulang denda
        $borrowings->fine = $fine; // set nilai denda yang baru
    
        $borrowings->save();
    
        return redirect()->route('admin')->with('success', 'Borrowing updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $borrowings = Borrowing::find($id);

        if($borrowings){
            $borrowings->delete();
            return redirect()->route('admin')->with('success', "Berhasil di delete");
        }else{
            return redirect()->back()->withErrors('error', 'Tidak berhasil di delete');
        }
    }
}
