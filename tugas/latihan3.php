<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<form action="" method="POST" >
    <center>
        <h1>Isi Form Terlebih Dahulu</h1>
        <table>
            <tr>
                <td>Nama</td>
                <td>:</td>
                <td><input type="text" name="nama"></td>
            </tr>
            <tr>
                <td>Tanggal Lahir</td>
                <td>:</td>
                <td><input type="date" name="tl"></td>
            </tr>
            <tr>
                <td>Jenis Kelamin</td>
                <td>:</td>
                <td>
                    <input type="radio" name="jk" value="Laki-laki">Laki-laki
                    <input type="radio" name="jk" value="Perempuan">Perempua
                </td>
            </tr>
            <tr>
                <td>Biaya Register</td>
                <td>:</td>
                <td><input type="number" name="br"></td>
            </tr>
            <tr>
                <td>Jurusan</td>
                <td>:</td>
                <td>
                    <select name="jurusan" id="">
                        <option value="rpl">RPL</option>
                        <option value="tkro">TKRO</option>
                        <option value="tbsm">TBSM</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td><input type="submit" name="simpan" value="KIRIM"></td>
            </tr>
        </table>
        </center>
    </form>
    
</body>
</html>

<?php

if (isset($_POST['simpan'])){
    $nama = @$_POST['nama'];
    $tl = @$_POST['tl'];
    $jk = @$_POST['jk'];
    $br = @$_POST['br'];
    $jurusan = @$_POST['jurusan'];
    $bj = 0;

    if ($jurusan == "rpl"){
        $bj += 2500000;
    } else if ($jurusan == "tkro"){
        $bj += 3000000;
    } else if ($jurusan == "tbsm"){
        $bj += 3500000;
    } else "Pilih Jurusan Dulu";

    $tp = $br + $bj;

    echo "<center>";
    echo "<h1>Daftar Smk</h1>";
    echo "Nama : $nama <br>";
    echo "Tanggal Lahir : $tl <br>";
    echo "Jenis Kelamin : $jk <br>";
    echo "Biaya Register : $br <br>";
    echo "Jurusan : $jurusan <br>";
    echo "Biaya Jurusan : $bj <br>";
    echo "Total Bayar : $tp <br>";
    echo "</center>";
    }


?>
