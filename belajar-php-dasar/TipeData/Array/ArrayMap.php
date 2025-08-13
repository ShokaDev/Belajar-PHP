<?php

// Membuat array asosiatif menggunakan fungsi array()
$Farel = array(
    "ID" => 1, 
    "Name" => "Faharel",
    "Age" => 17
);

// Menampilkan isi dari key "ID" menggunakan var_dump
var_dump($Farel["ID"]);


// Membuat array asosiatif lagi, namun menggunakan sintaks []
$Budi = [
    "ID" => "12",
    "Name" => "Faharel",
    "Age" => 17
];

// Menampilkan seluruh isi array $Budi
var_dump($Budi);

/*
Catatan:
- Array seperti ini disebut array asosiatif, karena key-nya bukan angka (seperti pada array numerik), 
  tapi berupa string yang berfungsi sebagai "label" untuk tiap nilai.
- Ini sangat berguna untuk menyimpan data terstruktur seperti data user, produk, dll.
*/
