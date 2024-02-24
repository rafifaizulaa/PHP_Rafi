<?php
$nama = @$_REQUEST['nama'];
$jk = @$_REQUEST['jk'];
$tl = @$_REQUEST['tl'];
$ko = @$_REQUEST['ko'];
$kelas = @$_REQUEST['kelas'];
$kf = @$_REQUEST['kf'];
$metode = @$_REQUEST['pembayaran'];
$diskon = 0;

if ($ko == "Sepak Bola") {
    $harga = 0;
        if ($kelas == "Pemula") {
            $harga += 200000;
        } elseif ($kelas == "Menengah") {
            $harga += 250000;
        } elseif ($kelas == "Lanjutan") {
            $harga += 300000;
        }
} else if ($ko == "Bulu Tangkis") {
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
} else if ($ko == "Renang") {
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
    $hasil = "Selamat Anda Mendapatkan Merchandise Gratiss!!";
} else {
    $hasil = "Mohon maaf total pembelian anda kurang dari Rp 500.000, Anda tidak Mendapatkan Merchandise Gratis dari kami";
}
echo "<center>";
echo "<h1>Form Pendaftaran</h1>";
echo "Nama : $nama<br>";
echo "jk Kelamin : $jk<br>";
echo "tl Lahir : $tl<br>";
echo "ko : $ko<br>";
echo "Kelas : $kelas <br>";
echo "kf Fisik : $kf<br>";
echo "Metode Pembayaran : $metode<br>";
echo "Harga : Rp. $harga<br>";
echo "Diskon : Rp. $diskon<br>";
echo "Total Harga : Rp. $total<br>";
echo $hasil;
echo "</center>";

?>