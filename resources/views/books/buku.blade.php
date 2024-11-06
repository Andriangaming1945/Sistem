@extends('layouts.min')

@section('content')
<div class="container mt-4">
    <h1 class="mb-4"><a href="{{route('admin')}}" style="color: black; text-decoration: none;">Daftar peminjaman buku</a></h1>
    <a href="{{route('books.create')}}" class="btn btn-primary mb-3">Tambah Peminjaman buku</a>
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
            <th>Aksi</th>
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
                    <td>
                        <a href="{{route('books.edit', $book->id)}}">Edit</a>
                        <form action="{{route('books.destroy', $book->id)}}" method="POST" enctype="multipart/form-data">
                            @csrf
                            @method("DELETE")
                            <button type="submit" name="submit">Hapus</button>
                        </form>
                    </td>
                </tr>
                
                @endforeach
            </tbody>
        </thead>
    </table>
</div>
@endsection