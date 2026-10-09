@extends('main.parent')
@section('title', 'Form Mahasiswa')
@section('content')
<style>
    .btnkirim {
        margin: 15px;
        width: 150px;
        height: 50px;
        background-color: green;
        color: white;
        font-weight: bold;
    }
    .btnkirim:hover {
        background-color: darkgreen;
    }   
</style>
<form action="/proses" method="post">
    @csrf
    <table border="1" style="border-collapse:collapse">
        <tr>
            <td><label>NIM</label></td>
            <td><input type="number" name="nim"></td>
        </tr>
        <tr>
            <td><label>Nama</label></td>
            <td><input type="text" name="nama"></td>
        </tr>
        <tr>
            <td><label>Gender</label></td>
            <td>
                <input type="radio" id="laki" name="gender" value="Laki-laki">
                <label for="laki">Laki-laki</label>
                <input type="radio" id="perempuan" name="gender" value="Perempuan">
                <label for="perempuan">Perempuan</label>
            </td>
        </tr>
        <tr>
            <td><label>Prodi</label></td>
            <td>
                <select name="prodi">
                    <option value="Informatika">Informatika</option>
                    <option value="Sistem Informasi">Sistem Informasi</option>
                </select>
            </td>
        </tr>
        <tr>
            <td><label>Pakar</label></td>
            <td>
                <input type="checkbox" id="pakar1" name="pakar[]" value="AI">
                <label for="pakar1">AI</label><br>
                <input type="checkbox" id="pakar2" name="pakar[]" value="Jaringan">
                <label for="pakar2">Jaringan</label><br>
                <input type="checkbox" id="pakar3" name="pakar[]" value="Database">
                <label for="pakar3">Database</label><br>
                <input type="checkbox" id="pakar4" name="pakar[]" value="Web-Development">
                <label for="pakar4">Web Development</label><br>
            </td>
        </tr>
        <tr>
            <td colspan=2 align='center'>
                <button type="submit" class='btnkirim'>Kirim Data</button>
            </td>
        </tr>
    </table>
</form>
@endsection