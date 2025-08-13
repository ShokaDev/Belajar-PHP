<?php
// Kita juga bisa melakukan operasi Aritmatika di menggunakan PHP

// Jenis - Jenis operator Matematika berupa Penjumlahan, Pengurangan, Perkalian, Pembagian, Sisa Bagi dan Perpangkatan
// Contoh penggunaan seperti ini = 
// $variable + $variable = Penjumlahan
// $variable - $variable = Pengurangan
// $variable * $variable = Perkalian
// $variable / $variable = Pembagian
// $variable % $variable = Sisa Bagi
// $variable ** $variable = Perpangkatan

// Bisa juga merubah suatu variable yang awalnya positive menjadi negative, contoh = 
// +$Variable = Merubah variable menjadi Positif
// -$Variable = Merubah variable menjadi Negative

// Bisa melakukan operasi aritmatika dengan variable, bisa juga dengan menambahkan angka nya langsung tanpa variable
$a = 12;
$b = 20;

// Bisa menambahkan variable yang data nya dari operasi Aritmatika
$hasil = $a + $b;



// Contoh melalukan penjumlahan variable dengan variable
var_dump($a + $b);

// Contoh melakukan penjumlahan tanpa variable
var_dump(10 - 20);



// membuat nilai variable yang sudah ada menjadi negative atau positif
$hasilNegative = -$hasil;
var_dump($hasilNegative);