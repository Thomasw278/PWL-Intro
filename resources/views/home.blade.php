@extends('main.parent')
@section('title', 'Beranda')

@section('content')
    <h2 class="h4 mb-4 text-center fw-bold text-success">Data Mahasiswa Terdaftar</h2>
    
    <div class="table-responsive">
        <table class="table table-bordered table-striped align-middle">
            <tbody>
                <tr>
                    <th style="width: 30%;" class="bg-light">NIM</th>
                    <td>{{ $nim ?? '-' }}</td>
                </tr>
                <tr>
                    <th class="bg-light">Nama</th>
                    <td>{{ $nama ?? '-' }}</td>
                </tr>
                <tr>
                    <th class="bg-light">Gender</th>
                    <td>{{ $gender ?? '-' }}</td>
                </tr>
                <tr>
                    <th class="bg-light">Program Studi</th>
                    <td>{{ $prodi ?? '-' }}</td>
                </tr>
                <tr>
                    <th class="bg-light">Bidang Kepakaran</th>
                    <td>
                        @if(!empty($pakar))
                            @foreach($pakar as $i)
                                <span class="badge bg-success me-1">{{ $i }}</span>
                            @endforeach
                        @else
                            -
                        @endif
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
@endsection