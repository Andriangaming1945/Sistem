@extends('layouts.min')

@section('content')
    <div class="container">
        <h1 class="my-4">List of Borrowings</h1>
        <a href="{{ route('pengembalian.create') }}" class="btn btn-primary mb-4">Add Borrowing</a>
        <table class="table">
            <thead class="thead-dark">
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Book</th>
                    <th scope="col">User</th>
                    <th scope="col">Borrowed At</th>
                    <th scope="col">Due Date</th>
                    <th scope="col">Fine</th>
                    <th scope="col">Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach($borrowings as $borrowing)
                <tr>
                    <td>{{ $borrowing->id }}</td>
                    <td>{{ $borrowing->book->judul }}</td>
                    <td>{{ $borrowing->user->nama_lengkap }}</td>
                    <td>{{ $borrowing->borrowed_at }}</td>
                    <td>{{ $borrowing->due_date }}</td>
                    <td>{{ $borrowing->fine }}</td>
                    <td>
                        <a href="{{ route('pengembalian.edit', $borrowing->id) }}" class="btn btn-primary btn-sm">Edit</a>
                        <form action="{{ route('pengembalian.destroy', $borrowing->id) }}" method="POST" class="d-inline">
                            @csrf
                            @method("DELETE")
                            <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure you want to delete this item?')">Delete</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
