@extends('main.parent')
@section('title', 'KRS & KHS')

@section('content')
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h2 class="h4 fw-bold text-success mb-0">Daftar KRS & KHS</h2>
    </div>

    <div class="table-responsive">
        <table class="table table-bordered table-hover align-middle">
            <thead class="table-success text-center">
                <tr>
                    <th style="width: 10%;">IDKRS</th>
                    <th style="width: 10%;">NOREG</th>
                    <th style="width: 15%;">JadwalID</th>
                    <th style="width: 15%;">Nilai</th>
                </tr>
            </thead>
            <tbody>
                @if($krskhs->isEmpty())
                    <tr>
                        <td colspan="3" class="text-center text-muted py-4">
                            Belum ada data Jadwal terdaftar.
                        </td>
                    </tr>
                @else
                @foreach($krskhs as $index => $krs)
                    <tr>
                        <td class="text-center">{{ $krs->idKrs }}</td>
                        <td class="text-center">{{ $krs->noReg }}</td>
                        <td class="text-center">{{ $krs->jadwalId }}</td>
                        <td class="text-center">{{ $krs->nilai }}</td>
                    </tr>
                @endforeach
                @endif
            </tbody>
        </table>
    </div>
@endsection