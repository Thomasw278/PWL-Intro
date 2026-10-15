@extends('main.parent')
@section('title', 'Daftar Mahasiswa')

@section('content')
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h2 class="h4 fw-bold text-success mb-0">Daftar Mahasiswa</h2>
    </div>

    <div class="table-responsive">
        <table class="table table-bordered table-hover align-middle">
            <thead class="table-success text-center">
                <tr>
                    <th style="width: 10%;">No</th>
                    <th style="width: 15%;">NIM</th>
                    <th>Nama Mahasiswa</th>
                    <th>Kota Mahasiswa</th>
                </tr>
            </thead>
            <tbody>
                @if($mahasiswas->isEmpty())
                    <tr>
                        <td colspan="3" class="text-center text-muted py-4">
                            Belum ada data mahasiswa terdaftar.
                        </td>
                    </tr>
                @else
                @foreach($mahasiswas as $index => $mahasiswa)
                    <tr>
                        <td class="text-center">{{ $index + 1 }}</td>
                        <td class="text-center">{{ $mahasiswa->nim }}</td>
                        <td class="text-center">{{ $mahasiswa->nama }}</td>
                        <td class="text-center">{{ $mahasiswa->kota }}</td>
                    </tr>
                @endforeach
                @endif
            </tbody>
        </table>
    </div>
@endsection