<?php

function luasPersegi(){
    echo "<h3>Menghitung Luas Persegi</h3>";
    echo "Rumus : Sisi x Sisi<br>";
    $sisi = 5;
    $luasPersegi = $sisi * $sisi;
    echo "sisi : $sisi <br>";
    echo "Luasnya : $luasPersegi";
}

function luasPersegiPanjang(){
    echo "<h3>Menghitung Luas Persegi Panjang</h3>";
    echo "Rumus : Panjang x Lebar<br>";
    $panjang = 5;
    $lebar = 4;
    $luasPersegiPanjang = $panjang * $lebar;
    echo "Panjang : $panjang <br>";
    echo "Lebar : $lebar <br>";
    echo "Luasnya : $luasPersegiPanjang";
}

function segitiga(){
    echo "<h3>Menghitung Segitga</h3>";
    echo "Rumus : Alas x Tinggi<br>";
    $alas = 6;
    $tinggi = 8;
    $segitiga = 0.5 * $alas * $tinggi;
    echo "Alas : $alas <br>";
    echo "Tinggi : $tinggi <br>";
    echo "Luasnya : $segitiga";
}

function lingkaran(){
    echo "<h3>Menghitung Segitga</h3>";
    echo "Rumus : Alas x Tinggi<br>";
    $jariJari = 5;
    $luasLingkaran = $jariJari * $jariJari * 3.14;
    echo "Jari Jari : $jariJari <br>";
    echo "Luasnya : $luasLingkaran";
}



luasPersegi();
luasPersegiPanjang();
segitiga();
lingkaran();