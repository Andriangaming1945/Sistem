@extends('layouts.min')

@section('content')
   

    <h2>Kategori buku</h2>

    <form action="{{route('kategori.store')}}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="nama_kategori">Nama kategori :</label>
            <input type="text" name="nama_kategori" id="nama_kategori">
        </div>

        
        <button type="submit" name="submit">Submit</button>
    </form>
    @endsection