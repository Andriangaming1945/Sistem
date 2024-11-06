@extends('layouts.min')

@section('content')
<div class="container mt-4">
    <h1 class="mb-4"><a href="{{route('admin')}}" style="color: black; text-decoration: none;">Daftar kategori buku</a></h1>
    <a href="{{route('kategori.create')}}" class="btn btn-primary mb-3">Tambah Kategori buku</a>
    <table class="table table-striped">
        <tr>
            <th>Genre</th>
            <th>Aksi</th>
        </tr>
        <thead>
            <tbody>
                @foreach ($kategori as $kate)
                <tr>
                    <td>{{$kate->nama_kategori}}</td>
                    <td>
                        <a href="{{route('kategori.edit', $kate->id)}}">Edit</a>
                        <form action="{{route('kategori.destroy', $kate->id)}}" method="POST" enctype="multipart/form-data">
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