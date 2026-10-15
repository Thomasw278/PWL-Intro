@extends('main.parent')
@section('title', 'Daftar Mata Kuliah')

@section('content')
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h2 class="h4 fw-bold text-success mb-0">Daftar Mata Kuliah</h2>
    </div>

    <div class="table-responsive">
        <table class="table table-bordered table-hover align-middle">
            <thead class="table-success text-center">
                <tr>
                    <th style="width: 10%;">KodeMK</th>
                    <th style="width: 25%;">NamaMk</th>
                    <th style="width: 10%;">sks</th>
                </tr>
            </thead>
            <tbody>
                @if($matakuliahs->isEmpty())
                    <tr>
                        <td colspan="3" class="text-center text-muted py-4">
                            Belum ada data Mata Kuliah terdaftar.
                        </td>
                    </tr>
                @else
                @foreach($matakuliahs as $index => $matakuliah)
                    <tr>
                        <td class="text-center">{{ $matakuliah->kodeMK }}</td>
                        <td class="text-center">{{ $matakuliah->namaMk }}</td>
                        <td class="text-center">{{ $matakuliah->sks }}</td>
                    </tr>
                @endforeach
                @endif
            </tbody>
        </table>
    </div>
@endsection