<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Books</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <!-- Font Awesome CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- Custom CSS -->
    <style>
        /* Custom styles here */
        section {
            background-image: url(images/bg.png);
            background-size: cover;
            background-position: center;
        }
        .card-img-top {
            max-width: 200px;
            margin: 0 auto;
            display: block;
        }
    </style>
</head>
<body>
    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container">
            <a class="navbar-brand" href="#">
                <img src="images/library.png" alt="Library Logo" width="100">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('user')}}">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{url('buku')}}">Collection Books</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('logout')}}">Logout</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{url('history')}}">Histroy peminjaman</a>
                    </li>
                </ul>
                
            </div>
        </div>
    </nav>

    <!-- Main Content -->
    <section>
        
        <div class="container mt-5">
            <!-- Search Form -->
            <form action="#" method="GET" class="mb-4">
                <div class="input-group">
                    <input type="text" class="form-control" placeholder="Search books..." name="query">
                    <button type="submit" class="btn btn-outline-secondary">Search</button>
                </div>
            </form>
        <div class="container mt-5">
            <div class="row">
                @foreach ($posts as $post)
                <div class="col-md-4 mb-4">
                    <div class="card">
                        <img src="{{asset('storage/posts/' . $post->images)}}" class="card-img-top" alt="{{$post->judul}}">
                        <div class="card-body">
                            <h5 class="card-title">{{$post->judul}}</h5>
                            <p class="card-text">Genre: {{$post->genre}}</p>
                            <p class="card-text">Harga: <span id="hargasewa">{{number_format($post->harga, 0, ',', '.')}}</span></p>
                            <a href="{{url('pinjam')}}" class="btn btn-dark">Peminjaman</a>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>

    <!-- Bootstrap JS -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.3.3/js/bootstrap.bundle.min.js"></script>
    <!-- Toastr JS -->
    <script src="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
    <script>
        // Toastr Message
        @if(session()->has('success'))
        toastr.success('{{ session('success') }}', 'BERHASIL!');
        @elseif(session()->has('error'))
        toastr.error('{{ session('error') }}', 'GAGAL!');
        @endif
    </script>
</body>
</html>
