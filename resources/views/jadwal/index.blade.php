@extends('main.parent')
@section('title', 'Jadwal Matakuliah')

@section('content')
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h2 class="h4 fw-bold text-success mb-0">Daftar Jadwal Matakuliah</h2>
    </div>

    <div class="table-responsive">
        <table class="table table-bordered table-hover align-middle">
            <thead class="table-success text-center">
                <tr>
                    <th style="width: 10%;">No</th>
                    <th style="width: 10%;">Hari</th>
                    <th style="width: 15%;">Waktu</th>
                    <th style="width: 15%;">KodeMK</th>                 
                    <th style="width: 10%;">Group</th>                  
                    <th style="width: 10%;">NIK</th>                    
                    <th style="width: 10%;">Ruang</th>
                </tr>
            </thead>
            <tbody>
                @if($jadwals->isEmpty())
                    <tr>
                        <td colspan="3" class="text-center text-muted py-4">
                            Belum ada data Jadwal terdaftar.
                        </td>
                    </tr>
                @else
                @foreach($jadwals as $index => $jadwal)
                    <tr>
                        <td class="text-center">{{ $index + 1 }}</td>
                        <td class="text-center">{{ $jadwal->hari }}</td>
                        <td class="text-center">{{ $jadwal->waktu }}</td>
                        <td class="text-center">{{ $jadwal->kodeMk }}</td>
                        <td class="text-center">{{ $jadwal->grup }}</td>
                        <td class="text-center">{{ $jadwal->nik }}</td>
                        <td class="text-center">{{ $jadwal->ruang }}</td>
                    </tr>
                @endforeach
                @endif
            </tbody>
        </table>
    </div>
@endsection