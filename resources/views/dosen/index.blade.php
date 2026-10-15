@extends('main.parent')
@section('title', 'Daftar Dosen')

@section('content')
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h2 class="h4 fw-bold text-success mb-0">Daftar Dosen Pengampu</h2>
    </div>

    <div class="table-responsive">
        <table class="table table-bordered table-hover align-middle">
            <thead class="table-success text-center">
                <tr>
                    <th style="width: 10%;">No</th>
                    <th style="width: 25%;">NIK</th>
                    <th>Nama Dosen</th>
                </tr>
            </thead>
            <tbody>
                @if($dosens->isEmpty())
                    <tr>
                        <td colspan="3" class="text-center text-muted py-4">
                            Belum ada data dosen terdaftar.
                        </td>
                    </tr>
                @else
                @foreach($dosens as $index => $dosen)
                    <tr>
                        <td class="text-center">{{ $index + 1 }}</td>
                        <td class="text-center">{{ $dosen->nik }}</td>
                        <td class="text-center">{{ $dosen->namaDosen }}</td>
                    </tr>
                @endforeach
                @endif
            </tbody>
        </table>
    </div>
@endsection