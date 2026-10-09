@extends('main.parent')
@section('title', 'Beranda')
@section('content')
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
@endsection