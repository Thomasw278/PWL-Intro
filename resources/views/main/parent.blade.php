<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portal Mahasiswa UKDW</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f7f6;
        }
        .header-container {
            background-color: #ffffff;
            padding: 30px 20px;
            text-align: center;
            border-bottom: 2px solid #e0e0e0;
        }
        .header-container img {
            display: block;
            margin: 0 auto 15px auto;
        }
        .header-container h1 {
            margin: 0;
            color: #2c3e50;
            font-size: 28px;
        }
        .header-container p.quote {
            font-style: italic;
            color: #7f8c8d;
            margin-top: 10px;
            font-size: 16px;
        }
        .navbar {
            display: flex;
            justify-content: center;
            background-color: green;
            padding: 12px 0;
        }
        .navbar a {
            color: white;
            padding: 10px 20px;
            text-decoration: none;
            margin: 0 8px;
            border-radius: 4px;
            font-size: 15px;
            transition: background-color 0.3s;
        }
        .navbar a:hover {
            background-color: white;
            color: green;
            font-weight: bold;
        }
        .content-area {
            max-width: 900px;
            margin: 30px auto;
            padding: 30px;
            background-color: white;
            border-radius: 8px;
            box-shadow: 0 2px 4px rgba(0,0,0,0.1);
        }
        table {
            margin: 0 auto;
            border-collapse: collapse;
            width: 100%;
        }
        th, td {
            padding: 10px 15px;
            border: 1px solid #ddd;
        }
        .btnbawah {
            text-align: center;
            margin-top: 20px;
        }
        .btnbawah a {
            display: inline-block;
            padding: 8px 16px;
            margin: 0 4px;
            text-decoration: none;
            color: white;
            background-color: green;
            border: 1px solid #767676;
            border-radius: 4px;
            font-size: 14px;
        }
    </style>
</head>
<body>

    <!-- Bagian Header -->
    <div class="header-container">
        <img src="{{ asset('Image/ukdw.png') }}" alt="Logo UKDW" width="100" height="133">
        <h1>SELAMAT DATANG DI PORTAL MAHASISWA UKDW - @yield('title')</h1>
        <p class="quote">"Bersama Mas Thomas membangun UKDW dan Masa Depan"</p>
    </div>

    <!-- Bagian Navigasi -->
    <div class="navbar">
        <a href="/">Beranda</a>
        <a href="/formmahasiswa">Form Mahasiswa</a>
        <a href="/editmahasiswa/{{ $nim ?? 'NIM Kosong' }}">Edit Mahasiswa</a>
        <a href="/deletemahasiswa/{{ $nim ?? 'NIM Kosong'}}">Delete Mahasiswa</a>
    </div>

    <!-- Bagian Dinamis (Content) -->
    <div class="content-area">
        @yield('content')
    </div>

</body>
</html>