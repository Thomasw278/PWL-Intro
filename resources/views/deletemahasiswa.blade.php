@extends('main.parent')
@section('title', 'Delete Mahasiswa')

@section('content')
    <div class="text-center py-4">
        @if(isset($nim) && $nim != "NIM Kosong")
            <div class="alert alert-warning d-inline-block px-4" role="alert">
                NIM <strong>{{ $nim }}</strong> sudah dihapus.
            </div>
        @else
            <div class="alert alert-secondary d-inline-block px-4" role="alert">
                <strong>Tidak ada NIM yang dihapus</strong>
            </div>
        @endif

        <div class="mt-4">
            <a href="/" class="btn btn-success px-4 py-2">Kembali ke Daftar Mahasiswa</a>
        </div>
    </div>
@endsection