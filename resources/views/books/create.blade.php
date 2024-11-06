@extends('layouts.min')

@section('content')
   

    <h2>Buku</h2>

    <form action="{{route('books.store')}}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="judul">Judul :</label>
            <input type="text" name="judul" id="judul">
        </div>
        <div class="mb-3">
            <label for="pengarang">Pengarang :</label>
            <input type="text" name="pengarang" id="pengarang">
        </div>

        <div class="mb-3">
            <label for="penerbit">Penerbit :</label>
            <input type="text" name="penerbit" id="penerbit">
        </div>

        <div class="mb-3">
            <label for="tahun_terbit">Tahun terbit :</label>
            <input type="text" name="tahun_terbit" id="tahun_terbit">
        </div>

        <div class="mb-3">
            <label for="keterangan">Keterangan :</label>
            <input type="text" name="keterangan" id="keterangan">
        </div>

        <div class="mb-3">
            <label for="stok">Stock :</label>
            <input type="text" name="stok" id="stok">
        </div>


        <div class="mb-3">
            <label for="id_lokasi">Lokasi :</label>
            <select name="id_lokasi" id="id_lokasi" class="form-control" required>
                @foreach ($lokasi as $lokal) 
                    <option value="{{$lokal->id}}">{{$lokal->kd_lokasi}}</option>
                @endforeach
            </select>
        </div>

        <div class="mb-3">
            <label for="id_kategori">Kategori :</label>
            <select name="id_kategori" id="id_kategori" class="form-control" required>
                @foreach ($kategori as $kate) 
                    <option value="{{$kate->id}}">{{$kate->nama_kategori}}</option>
                @endforeach
            </select>
        </div>

       


        
        
        <button type="submit" name="submit">Submit</button>
    </form>
    @endsection