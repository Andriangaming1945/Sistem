@extends('layouts.min')

@section('content')

<div class="container">
    <h2 class="mt-5">Tambah Rak Buku</h2>
    <form method="POST" action="{{ route('posts.store') }}" enctype="multipart/form-data">
        @csrf
        @method('POST')
        <div class="mb-3">
            <label for="judul" class="form-label">Judul</label>
            <input type="text" class="form-control" id="judul" name="judul" required>
        </div>
        <div class="mb-3">
            <label for="genre" class="form-label">Genre</label>
            <input type="text" class="form-control" id="genre" name="genre" required>
        </div>
        <div class="mb-3">
            <label for="harga" class="form-label">Harga</label>
            <input type="number" class="form-control" id="harga" name="harga" required>
        </div>
        <div class="mb-3">
            <label for="images" class="form-label">Sampul</label>
            <input type="file" class="form-control" id="images" name="images" onchange="previewImage()" required>
        </div>
        <img src="#" id="preview-images" alt="Preview image" style="display: none;">
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>

@endsection
