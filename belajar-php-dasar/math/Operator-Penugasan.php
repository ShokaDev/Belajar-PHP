<?php 
// materi ini berhubungan dengan Operasi-Aritmatika sebelumnya, Di file ini kita mempelajari cara menyingkat atau semacam shortcut untuk Aritmatika

// Materi kali ini disebut Operator Penugasan Aritmatika, untuk contohnya seperti ini = 
// $a += $b ini sama saja dengan $a = $a + $b

$total = 0;

$buah = 10000;
$daging = 25000;
$minuman = 1000;

$total += $buah;
$total += $daging;
$total += $minuman;

var_dump($total);   // Menghitung Semuanya