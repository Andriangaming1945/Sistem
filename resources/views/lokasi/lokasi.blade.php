@extends('layouts.min')

@section('content')
<div class="container mt-4">
    <h1 class="mb-4"><a href="{{route('admin')}}" style="color: black; text-decoration: none;">Daftar lokasi buku</a></h1>
    <a href="{{route('lokasi.create')}}" class="btn btn-primary mb-3">Tambah lokasi buku</a>
    <table class="table table-striped">
        <tr>
            <th>Kode lokasi</th>
            <th>Label</th>
            <th>Rak</th>
            <th>Aksi</th>
        </tr>
        <thead>
            <tbody>
                @foreach ($lokasi as $lokal)
                <tr>
                    <td>{{$lokal->kd_lokasi}}</td>
                    <td>{{$lokal->label}}</td>
                    <td>{{$lokal->rak}}</td>
                    <td>
                        <a href="{{route('lokasi.edit', $lokal->id)}}">Edit</a>
                        <form action="{{route('lokasi.destroy', $lokal->id)}}" method="POST" enctype="multipart/form-data">
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