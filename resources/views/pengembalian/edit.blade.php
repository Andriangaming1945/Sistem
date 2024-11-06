@extends('layouts.min')

@section('content')
    <div class="container">
        <h1 class="my-4">Create Borrowing</h1>
        <form action="{{ route('pengembalian.update', $borrowings->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="buku_id">Book:</label>
                <select name="buku_id" id="buku_id" class="form-control">
                    @foreach($books as $book)
                    <option value="{{ $book->id }}">{{ $book->judul }}</option>
                    @endforeach
                </select>
            </div>

            <div class="form-group">
                <label for="users_id">User:</label>
                <select name="users_id" id="users_id" class="form-control">
                    @foreach($users as $user)
                    <option value="{{ $user->id }}">{{ $user->nama_lengkap }}</option>
                    @endforeach
                </select>
            </div>

            <div class="form-group">
                <label for="borrowed_at">Borrowed At:</label>
                <input type="date" id="borrowed_at" name="borrowed_at" class="form-control">
            </div>

            <div class="form-group">
                <label for="due_date">Due Date:</label>
                <input type="date" id="due_date" name="due_date" class="form-control">
            </div>

            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
@endsection
