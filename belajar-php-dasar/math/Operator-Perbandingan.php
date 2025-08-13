<?php

$a == $b;   // Sama Dengan
// Mengecek apakah Value pada kedua variable sama atau berbeda, True jika value kedua variable sama, Tapi cara ini hanya mengecek Value nya sama / tidak saja, tidak melihat apakah tipe data nya sama / berbeda

$a === $b;   // Identik
// Mengecek apakah Value dan Tipe Data pada kedua variable sama, True jika value dan tipe data kedua variable sama

$a != $b;   // Tidak Sama Dengan
// True jika kedua variable tidak sama setelah dilakukan konversi data (Ini kebalikan dari yang pertama, yang "Sama Dengan")

$a <> $b;   // Tidak Sama Dengan
// Ini sama aja seperti yang sebelumnya, cuman beda penulisan saja, namun disarankan menggunakan yang sebelumnya saja karena lebih umum digunakan

$a !== $b;   // Tidak Identik
// Seperti namanya ini kebalikan dari yang Identik, jika kedua variable berbeda value dan tipe data maka hasilnya True

$a < $b;   // Kurang dari
// True jika $a kurang dari $b

$a <= $b;   // Kurang dari atau Sama Dengan
// True jika $a kurang dari atau sama dengan $b