<?php

$nama = @$_REQUEST['nama'];
$jk = @$_REQUEST['jk'];
$tanggal_lahir = @$_REQUEST['tanggal_lahir'];
$kategori = @$_REQUEST['kategori'];
$kelas = @$_REQUEST['kelas'];
$kemampuan = @$_REQUEST['kemampuan'];
$pembayaran = @$_REQUEST['pembayaran'];
$diskon = 0;

if ($kategori == "Sepak Bola") {
    $harga = 0;
        if ($kelas == "Pemula") {
            $harga += 200000;
        } elseif ($kelas == "Menengah") {
            $harga += 250000;
        } elseif ($kelas == "Lanjutan") {
            $harga += 300000;
        }
} else if ($kategori == "Bulu Tangkis") {
    $harga = 0;
        if ($kelas == "Pemula") {
            $harga += 150000;
            if ($jk == "Perempuan") {
                $diskon += $harga * 0.1;
            }
        } elseif ($kelas == "Menengah") {
            $harga += 200000;
            if ($jk == "Perempuan") {
                $diskon += $harga * 0.1;
            }
        } elseif ($kelas == "Lanjutan") {
            $harga += 250000;
            if ($jk == "Perempuan") {
                $diskon += $harga * 0.1;
            }
        }
} else if ($kategori == "Renang") {
    $harga = 0;
        if ($kelas == "Pemula") {
            $harga += 180000;
        } elseif ($kelas == "Menengah") {
            $harga += 220000;
        } elseif ($kelas == "Lanjutan") {
            $harga += 270000;
        }
}

$total = $harga - $diskon;

if ($total > 500000) {
    $marchendise = "Selamat Anda Mendapatkan Merchandise Gratiss!!";
} else {
    $marchendise = "Mohon maaf total pembelian";
}
echo "<center>";
echo "<h1>Form Pendaftaran</h1>";
echo "Nama : $nama<br>";
echo "jk Kelamin : $jk<br>";
echo "tanggal_lahir Lahir : $tanggal_lahir<br>";
echo "kategori : $kategori<br>";
echo "Kelas : $kelas <br>";
echo "kemampuan Fisik : $kemampuan<br>";
echo "pembayaran Pembayaran : $pembayaran<br>";
echo "Harga : Rp. $harga<br>";
echo "diskon : Rp. $diskon<br>";
echo "Total Harga : Rp. $total<br>";
echo $marchendise;
echo "</center>";

?>