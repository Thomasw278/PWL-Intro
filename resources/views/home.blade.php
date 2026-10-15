@extends('main.parent')
@section('title', 'Dashboard Akademik')

@section('content')
    <div class="text-center mb-5">
        <h2 class="h3 fw-bold text-success">Selamat Datang di Portal SIAKAD</h2>
        <p class="text-muted">Pilih menu di bawah ini untuk mengelola data akademik.</p>
    </div>

    <div class="row g-4 text-center">

        <div class="col-md-4">
            <div class="card h-100 shadow-sm border-success">
                <div class="card-body">
                    <h5 class="card-title fw-bold text-success">Data Mahasiswa</h5>
                    <p class="card-text text-muted small">Kelola Data Mahasiswa Yang Terdaftar</p>
                    <a href="/mahasiswa" class="btn btn-outline-success btn-sm">Buka</a>
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card h-100 shadow-sm border-success">
                <div class="card-body">
                    <h5 class="card-title fw-bold text-success">Data Dosen</h5>
                    <p class="card-text text-muted small">Kelola Data Dosen Yang Terdaftar</p>
                    <a href="/dosen" class="btn btn-outline-success btn-sm">Buka</a>
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card h-100 shadow-sm border-success">
                <div class="card-body">
                    <h5 class="card-title fw-bold text-success">Mata Kuliah</h5>
                    <p class="card-text text-muted small">Kelola Daftar Mata Kuliah</p>
                    <a href="/matakuliah" class="btn btn-outline-success btn-sm">Buka</a>
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card h-100 shadow-sm border-success">
                <div class="card-body">
                    <h5 class="card-title fw-bold text-success">Jadwal Perkuliahan</h5>
                    <p class="card-text text-muted small">Kelola jadwal perkuliahan untuk tiap kelas</p>
                    <a href="/jadwal" class="btn btn-outline-success btn-sm">Lihat Jadwal</a>
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card h-100 shadow-sm border-success">
                <div class="card-body">
                    <h5 class="card-title fw-bold text-success">Data KRS & KHS</h5>
                    <p class="card-text text-muted small">Melihat Data KRS & KHS</p>
                    <a href="/krskhs" class="btn btn-outline-success btn-sm">Lihat Nilai</a>
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card h-100 shadow-sm border-success">
                <div class="card-body">
                    <h5 class="card-title fw-bold text-success">Registrasi</h5>
                    <p class="card-text text-muted small">Kelola registrasi mahasiswa dan rekapitulasi nilai akhir semester.</p>
                    <a href="/registrasi" class="btn btn-outline-success btn-sm">Lihat Registrasi</a>
                </div>
            </div>
        </div>
    </div>
@endsection