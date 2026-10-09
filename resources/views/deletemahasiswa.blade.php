@extends('main.parent')
@section('title', 'Delete Mahasiswa')
@section('content')
<style>
    .btnbawah {
        text-align: center;
        margin-top: 20px;
    }

    .btnbawah a {
        display: inline-block;
        padding: 8px 16px;
        margin: 0 4px;
        text-decoration: none;
        color: white;
        background-color: green;
        border: 1px solid #767676;
        border-radius: 4px;
        font-size: 14px;
    }

    .btnbawah a:hover {
        font-weight: bold;
    }
</style>
<p>
    <?php 
        if ($nim != "NIM Kosong") {
            echo "NIM <b>$nim</b> sudah dihapus";
        } else {
            echo "<b>Tidak ada NIM yang dihapus</b>";
        }
        ?>  
</p>
<div class="btnbawah">
    <a href="/">Kembali ke Daftar Mahasiswa</a>
</div>
</body>
@endsection