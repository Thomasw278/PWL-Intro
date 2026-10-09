<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portal Mahasiswa UKDW - @yield('title')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">
    <header class="bg-white py-4 border-bottom shadow-sm">
        <div class="container text-center">
            <div class="row">
                <div class="col-12">
                    <img src="{{ asset('Image/ukdw.png') }}" alt="Logo UKDW" width="100" height="133" class="mb-3 img-fluid">
                    <h1 class="h3 fw-bold text-dark">SELAMAT DATANG DI PORTAL MAHASISWA UKDW - @yield('title')</h1>
                    <p class="fst-italic text-muted mb-0">"Bersama Mas Thomas membangun UKDW dan Masa Depan"</p>
                </div>
            </div>
        </div>
    </header>
    <nav class="navbar navbar-expand-lg navbar-dark bg-success shadow-sm">
        <div class="container">
            <button class="navbar-toggler mx-auto" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-center" id="navbarNav">
                <ul class="navbar-nav gap-2">
                    <li class="nav-item">
                        <a class="nav-link text-white fw-semibold" href="/">Beranda</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white fw-semibold" href="/formmahasiswa">Form Mahasiswa</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white fw-semibold" href="/editmahasiswa/{{ $nim ?? 'NIM Kosong' }}">Edit Mahasiswa</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white fw-semibold" href="/deletemahasiswa/{{ $nim ?? 'NIM Kosong' }}">Delete Mahasiswa</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <main class="container my-5">
        <div class="row justify-content-center">
            <div class="col-lg-10 col-md-12">
                <div class="card shadow-sm border-0 p-4">
                    @yield('content')
                </div>
            </div>
        </div>
    </main>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>