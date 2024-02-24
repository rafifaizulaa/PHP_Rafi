<!DOCTYPE html>
<html>
<head>
    <title>Document</title>
</head>
    <body>

        <center>
            <h2>Form Biodata Diri</h2>
            <!-- form -->
                <form method = "POST" action="">
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
                                <input type="radio" name="jk" value="Perempuan">Perempuan
                            </td>
                        </tr>
                        <tr>
                            <td>Alamat</td>
                            <td>:</td>
                            <td><textarea name="alamat" id="" cols="25" rows="1"></textarea></td>
                        </tr>
                        <tr>
                            <td>Agama</td>
                            <td>:</td>
                            <td>
                                <select name="agama" id="">
                                    <option selected disabled >Agama</option>
                                    <option value="kristen">kristen</option>
                                    <option value="Islam">Islam</option>
                                    <option value="Budha">Budha</option>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td>Pendididkan Terakhir</td>
                            <td>:</td>
                            <td>
                                <select name="pt" id="">
                                    <option selected disabled >Terakhir</option>
                                    <option value="s3">S3</option>
                                    <option value="s2">S2</option>
                                    <option value="s1">S1</option>
                                    <option value="sma/smk">SMA/SMK</option>
                                    <option value="smp">SMP</option>
                                    <option value="sd">SD</option>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td>Status</td>
                            <td>:</td>
                            <td><input type="radio" name="status" value="Sudah Nikah">Sudah Nikah
                                <input type="radio" name="status" value="Belum Nikah">Belum Nikah
                            </td>
                        </tr>
                        <tr>
                            <td>Hobi</td>
                            <td>:</td>
                            <td><input type="text" name="hobi"></td>
                        </tr>
                        <tr>
                            <td>Cita-Cita</td>
                            <td>:</td>
                            <td><input type="text" name="cc"></td>
                        </tr>
                        <tr>
                            <td></td>
                            <td></td>
                            <td><input type="submit" name="simpan" value="KIRIM"></td>
                        </tr>
                    </table>
                </form>
        </center>
    
    </body>
</html>

<?php

    if(isset($_POST['simpan'])){
        $a = $_POST['nama'];
        $b = $_POST['tl'];
        $c = $_POST['jk'];
        $d = $_POST['alamat'];
        $e = $_POST['agama'];
        $f = $_POST['pt'];
        $g = $_POST['status'];
        $h = $_POST['hobi'];
        $i = $_POST['cc'];

        echo "=========== Biodata Diri ===========<br>";
        echo "================================<br>";
        echo "Nama = $a <br>";
        echo "Tanggal_lahir = $b <br>";
        echo "Jenis_kelamin = $c <br>";
        echo "Alamat = $d <br>";
        echo "Agama = $e <br>";
        echo "Pendidikan_terakhir = $f <br>";
        echo "Status = $g <br>";
        echo "Hobi = $h <br>";
        echo "Cita-cita = $i <br>";
    }

?>