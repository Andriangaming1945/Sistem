<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard - Rental Mobil</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <style>
        body {
            font-family: 'Arial', sans-serif;
            margin: 0;
            padding: 0;
        }

        .dashboard-container {
            display: flex;
        }

        .sidebar {
            background-color: #047857;
            color: #fff;
            width: 250px;
            height: 140vh; /* Changed height to 100vh */
            padding: 20px;
            box-shadow: 2px 0 5px rgba(0, 0, 0, 0.1);
        }

        .logo img {
            max-width: 100%;
        }

        nav ul {
            list-style: none;
            padding: 0;
            margin-top: 20px;
        }

        nav a {
            text-decoration: none;
            color: #fff;
            display: block;
            padding: 10px;
            border-radius: 5px;
            transition: background-color 0.3s ease;
            margin-bottom: 10px; /* Added margin-bottom */
        }

        nav a:hover {
            background-color: #555;
        }

        nav a.active {
            background-color: #555;
        }

        .content {
            flex-grow: 1;
            padding: 20px;
        }

        header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 20px;
        }

        .user-profile {
            display: flex;
            align-items: center;
        }

        .user-profile img {
            width: 40px;
            height: 40px;
            border-radius: 50%;
            margin-right: 10px;
        }

        .dashboard-content {
            background-color: #fff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        .button {
            display: inline-block;
            color: #ffffff;
            padding: 10px 20px;
            border-radius: 5px;
            text-decoration: none;
            transition: background-color 0.3s;
            background-color: #047857; /* warna tombol */
        }

        .button:hover {
            background-color: #047857; /* warna tombol saat dihover */
        }

        .icon {
            margin-right: 5px;
        }

        .table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        .table th,
        .table td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: left;
        }

        .table th {
            background-color: #f2f2f2;
        }

        .table tr:hover {
            background-color: #f2f2f2;
        }
    </style>
</head>

<body>
    <div class="dashboard-container">
        <aside class="sidebar">
            <div class="logo">
             <a href="#"><img src="images/library.png" alt="Rental Mobil Logo" style="max-width: 100px; max-height: 100px;"></a>        
            </div>
            <nav>
                <ul>
                    <li><a href="#"><i class="fas fa-home"></i> Beranda</a></li>
                    <li><a href="{{url('lokasi')}}"><i class="fas fa-map-marker-alt"></i> Lokasi buku</a></li>
                    <li><a href="{{url('kategori')}}"><i class="fas fa-book"></i> Kategori buku</a></li>
                    <li><a href="{{url('books')}}"><i class="fas fa-book-open"></i> Peminjaman buku</a></li>
                    <li><a href="{{url('pengembalian')}}"><i class="fas fa-folder-open"></i> Pengembalian buku</a></li>
                    <li><a href="{{route('logout')}}"><i class="fas fa-door-closed"></i> Logout</a></li>
                </ul>
            </nav>
        </aside>

        <main class="content">
            <header>
                <h1>Dashboard Karyawan</h1>
                <div class="user-profile">
                    <img src="images/bg_3.jpg" alt="User Avatar">
                    <span>{{Auth::user()->email}}</span>
                   
                </div>
            </header>

            <section class="dashboard-content">
                <a href="#" class="button"><i class="fas fa-plus icon"></i> Tambah</a>
            </section>

            <table class="table mt-4">
                <thead>
                    <tr>
                        <th>Sampul</th>
                        <th>Judul</th>
                        <th>Genre</th>
                        <th>Harga</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($posts as $post)
                        <tr>
                            <td class="text-center">
                                <img src="{{asset('/storage/posts/'. $post->images)}}" class="rounded"  style="width: 150px;">
                            </td>
                            <td>{{$post->judul}}</td>
                            <td>{{$post->genre}}</td>
                            <td>{{number_format($post->harga, 0, ',', '.')}}</td>
                            <td class="text-center">
                                <a href="{{route('posts.show', $post->id)}}" class="btn btn-sm btn-dark">Show</a>
                                <a href="{{route('posts.edit', $post->id)}}" class="btn btn-sm btn-success">Edit</a>
                                <form action="{{route('posts.destroy', $post->id)}}" onsubmit="return confirm('Apakah anda yakin?')" method="POST" style="display: inline-block">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger">Hapus</button>
                                </form>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="5" class="text-center">Belum ada data</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>

            {{$posts->links()}}
        </main>
    </div>

    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
    <script>
        //message with toastr
        @if(session()->has('success'))
        toastr.success('{{ session('success') }}', 'BERHASIL!');
        @elseif(session()->has('error'))
        toastr.error('{{ session('error') }}', 'GAGAL!');
        @endif
    </script>
</body>

</html>
