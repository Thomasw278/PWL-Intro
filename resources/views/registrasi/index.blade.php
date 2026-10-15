@extends('main.parent')
@section('title', 'Daftar Registrasi')

@section('content')
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h2 class="h4 fw-bold text-success mb-0">Daftar Registrasi</h2>
    </div>

    <div class="table-responsive">
        <table class="table table-bordered table-hover align-middle">
            <thead class="table-success text-center">
                <tr>
                    <th style="width: 10%;">NoReg</th>
                    <th style="width: 15%;">Tanggal</th>
                    <th style="width: 20%;">NIM</th>
                </tr>
            </thead>
            <tbody>
                @if($registrasis->isEmpty())
                    <tr>
                        <td colspan="3" class="text-center text-muted py-4">
                            Belum ada data Registrasi terdaftar.
                        </td>
                    </tr>
                @else
                @foreach($registrasis as $index => $registrasi)
                    <tr>
                        <td class="text-center">{{ $registrasi->noReg }}</td>
                        <td class="text-center">{{ $registrasi->tanggal }}</td>
                        <td class="text-center">{{ $registrasi->nim }}</td>
                    </tr>
                @endforeach
                @endif
            </tbody>
        </table>
    </div>
@endsection