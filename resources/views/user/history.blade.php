@extends('layouts.min')

@section('content')
<div class="container mt-4">
    <center>
    <h1 class="mb-4"><a href="{{url('buku')}}" style="color: black; text-decoration: none;">History peminjaman</a></h1>
    </center>
    
    <table class="table table-striped">
        <tr>
            <th>ID</th>
            <th>Kategori</th>
            <th>Lokasi</th>
            <th>Judul</th>
            <th>Pengarang</th>
            <th>Penerbit</th>
            <th>Tahun terbit</th>
            <th>Keterangan</th>
            <th>stock</th>
        </tr>
        <thead>
            <tbody>
                @foreach ($buku as $book)
                <tr>
                    <td>{{$book->id}}</td>
                    <td>{{$book->kategori->nama_kategori}}</td>
                    <td>{{$book->lokasi->kd_lokasi}}</td>
                    <td>{{$book->judul}}</td>
                    <td>{{$book->pengarang}}</td>
                    <td>{{$book->penerbit}}</td>
                    <td>{{$book->tahun_terbit}}</td>
                    <td>{{$book->keterangan}}</td>
                    <td>{{$book->stok}}</td>
                </tr>
                
                @endforeach
            </tbody>
        </thead>
    </table>
</div>
@endsection