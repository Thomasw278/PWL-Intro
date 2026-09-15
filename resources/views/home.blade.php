<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portal Mahasiswa UKDW</title>
    <style>
        h1, h2 {
            text-align: center; 
        }
        img {
            display: block;        
            margin: 0 auto 20px auto;        
        }
        table {
            margin: 0 auto;
            border-collapse: collapse;
            min-width: 300px;
        }
        th, td {
            padding: 8px 12px;
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
    <h1>SELAMAT DATANG DI PORTAL MAHASISWA UKDW</h1>
    <img src="{{ asset('Image/ukdw.png') }}" alt="Logo UKDW" width="150" height="200">

    <h2>Data Mahasiswa Terdaftar</h2>

    <table border="1">
        <tr>
            <th>NIM</th>
            <td>
                <?php 
                    if(empty($nim)){
                        echo "-";
                    } else {
                        echo "$nim";
                    }
                ?>
            </td>
        </tr>
        <tr>
            <th>Nama</th>
            <td>
                <?php 
                    if(empty($nama)){
                        echo "-";
                    } else {
                        echo "$nama";
                    }
                ?>
            </td>
        </tr>
        <tr>
            <th>Gender</th>
            <td>
                <?php 
                    if(empty($gender)){
                        echo "-";
                    } else {
                        echo "$gender";
                    }
                ?>
            </td>
        </tr>
        <tr>
            <th>Program Studi</th>
            <td>
                <?php 
                    if(empty($prodi)){
                        echo "-";
                    } else {
                        echo "$prodi";
                    }
                ?>
            </td>
        </tr>
        <tr>
            <th>Bidang Kepakaran</th>
            <td>
                <?php 
                    if(empty($pakar)){
                        echo "-";
                    } else {
                        foreach($pakar as $i){
                            echo "$i ";
                        }
                    }
                ?>
            </td>
        </tr>
    </table>
    <div class="btnbawah">
        <a href="/formmahasiswa">Input Mahasiswa</a>
        <a href="/deletemahasiswa/{{ $nim ?? 'NIM Kosong' }}">Delete Mahasiswa</a>
        <a href="/editmahasiswa/{{ $nim ?? 'NIM Kosong' }}">Edit Mahasiswa</a>
    </div>
</body>
</html>