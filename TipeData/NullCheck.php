<?php

$Nama = "Farel";
$Nama = NULL;

echo "Apakah variabel \$Nama tersedia? ";
echo is_null($Nama);
// Jika hasilnya 1, berarti benar bahwa variabel $Nama bernilai NULL (kosong).
// Sebaliknya, jika hasilnya kosong/tidak ada output, berarti variabel tersebut tidak NULL.

var_dump(is_null($Nama));
// Ini cara lain untuk mengecek NULL, tapi hasilnya berupa nilai boolean (true/false).
// Lebih mudah dibaca karena langsung terlihat apakah NULL atau tidak dalam bentuk teks.
