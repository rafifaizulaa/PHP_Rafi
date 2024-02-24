<?php

$nama = "ujang Rohmat"; // string
$umur = "23"; // integer
$nilai = "87.5"; // float
$status = true; // boolean

echo "Nama : $nama <br>";
echo 'Umur : ' . $umur . '<br>';
printf("Nilai : %.3f <br>", $nilai);
if ($status) {
    echo "Status Siswa Aktif";
} else {
    echo "Status Siswa Tidak Aktif";
}

?>