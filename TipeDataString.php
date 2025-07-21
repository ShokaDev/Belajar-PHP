<?php
// Kalau echo menggunakan kutip 1 maka hasilnya akan menampilkan String
echo 'Nama Kamu : ';
echo 'Faharel Adittha Pratama';
echo "\n";
// echo "\n"; ini berguna sama seperti tag <br> pada html

echo "Nama Kamu : ";
echo "Faharel\t Adittha\t Pratama\n";
// Sementara \t berguna untuk membuat jarak antar teks, jadi tiap ada \t akan membuat jarak setelahnya



// Nama materi dibawah ini Heredoc, berguna untuk menampilkan banyak teks dengan "Enter" didalamnya tanpa menggunakan \n
// Heredoc
echo <<<Farel
Ini kita yapping aja ya disini
karena aku gatau mau ngetik apa
intinya panjang aja karena mau ngetes
tentang materi Herodoc
Farel;


// Nowdoc
echo <<<'Farel'
Ini kita yapping aja ya disini
karena aku gatau mau ngetik apa
intinya panjang aja karena mau ngetes
tentang materi Nowdoc
Farel;

// Mungkin disini kurang keliatan perbedaan nya
// tapi intinya perbedaan antar Herodoc dan Nowdoc itu, kalau Herodoc bisa membaca variabel, jadi kita bisa menggunakan variabel seperti $Nama dan \n & \t.
// Sementara untuk Nowdoc dia bener bener menampilkan semua keseluruhan teks nya tanpa membaca isi variabel @Nama, dan tidak bisa menggunakan \n & \t
