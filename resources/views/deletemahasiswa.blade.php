<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Hapus Mahasiswa</title>
    <style>
        h1 {
            text-align: center; 
        }
        img {
            display: block;        
            margin: 0 auto 20px auto;        
        }
        p {
            text-align: center;
            font-size: 20px;
        }
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
</head>
<body>
    <h1>Form Hapus Mahasiswa</h1>
    <img src="{{ asset('Image/ukdw.png') }}" alt="Logo UKDW" width="300" height="450">
    <p>
        <?php 
        if($nim != "NIM Kosong"){
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
</html>