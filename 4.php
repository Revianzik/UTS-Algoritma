<?php

echo "Masukkan jam kerja : ";
$jk = trim(fgets(STDIN));

$jl = $jk - 48;
$gp = ($jk - $jl) * 50000;
$ul = $jl * 80000;
$tg = $gp + $ul;

echo "Jam lembur anda $jl jam \n";
echo "Gaji pokok anda Rp. $gp \n";
echo "Upah lembur anda Rp. $ul \n";
echo "Total gaji anda Rp. $tg";

?>