@extends('main.parent')
@section('title', 'Form Mahasiswa')

@section('content')
    <h2 class="h4 mb-4 text-center fw-bold text-success">Form Input Data Mahasiswa</h2>

    <form action="/proses" method="post">
        @csrf
        <div class="row g-3">
            <div class="col-md-6">
                <label for="nim" class="form-label fw-bold">NIM</label>
                <input type="number" class="form-control" id="nim" name="nim" required>
            </div>

            <div class="col-md-6">
                <label for="nama" class="form-label fw-bold">Nama</label>
                <input type="text" class="form-control" id="nama" name="nama" required>
            </div>

            <div class="col-md-6">
                <label class="form-label fw-bold d-block">Gender</label>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" id="laki" name="gender" value="Laki-laki">
                    <label class="form-check-label" for="laki">Laki-laki</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" id="perempuan" name="gender" value="Perempuan">
                    <label class="form-check-label" for="perempuan">Perempuan</label>
                </div>
            </div>

            <div class="col-md-6">
                <label for="prodi" class="form-label fw-bold">Program Studi</label>
                <select class="form-select" id="prodi" name="prodi">
                    <option value="Informatika">Informatika</option>
                    <option value="Sistem Informasi">Sistem Informasi</option>
                </select>
            </div>

            <div class="col-12">
                <label class="form-label fw-bold d-block">Bidang Kepakaran</label>
                <div class="row">
                    <div class="col-md-3 col-6">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" id="pakar1" name="pakar[]" value="AI">
                            <label class="form-check-label" for="pakar1">AI</label>
                        </div>
                    </div>
                    <div class="col-md-3 col-6">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" id="pakar2" name="pakar[]" value="Jaringan">
                            <label class="form-check-label" for="pakar2">Jaringan</label>
                        </div>
                    </div>
                    <div class="col-md-3 col-6">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" id="pakar3" name="pakar[]" value="Database">
                            <label class="form-check-label" for="pakar3">Database</label>
                        </div>
                    </div>
                    <div class="col-md-3 col-6">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" id="pakar4" name="pakar[]" value="Web-Development">
                            <label class="form-check-label" for="pakar4">Web Development</label>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-12 text-center mt-4">
                <button type="submit" class="btn btn-success px-5 py-2 fw-bold">Kirim Data</button>
            </div>
        </div>
    </form>
@endsection