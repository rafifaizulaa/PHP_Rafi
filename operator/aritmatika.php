<?php

$gaji = 1000000;
$pajak = 0.025;

$thp = $gaji - ($gaji * $pajak);
echo "Gaji sebelum di potong pajak : <b>$gaji</b><br>";
echo "Gaji bersih : <b>Rp. $thp</b><br>";

?>