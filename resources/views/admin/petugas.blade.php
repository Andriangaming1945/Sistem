@extends('layouts.min')

@section('content')
<div class="container">
    <a href="{{route('admin')}}" style="color: black; text-decoration: none;"><h2>Daftar Anggota</h2></a>        
    <table class="table">
        <thead>
            <tr>
                <th>Nama</th>
                <th>Email</th>
                <th>Status</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($petugas as $item)
                <tr>
                    <td>{{ $item->nama_lengkap }}</td>
                    <td>{{ $item->email }}</td>
                    <td>
                        <form action="{{ route('petugas.update', $item->id) }}" method="POST">
                            @csrf
                            @method('PUT')
                            <div class="form-group">
                                <select name="role" id="role" class="form-control" onchange="this.form.submit()">
                                    <option value="user" {{ $item->role == 'user' ? 'selected' : '' }}>User</option>
                                    <option value="karyawan" {{ $item->role == 'karyawan' ? 'selected' : '' }}>Karyawan</option>
                                    <option value="admin" {{ $item->role == 'admin' ? 'selected' : '' }}>Admin</option>
                                </select>
                            </div>
                        </form>
                    </td>
                    <td>
                        <form action="{{ route('petugas.destroy', $item->id) }}" method="POST" onsubmit="return confirm('Apakah Anda yakin ingin menghapus anggota ini?')">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Hapus</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
