<?php

// Dengan ini kita bisa menyimpan array di dalam array, jadi kita bisa menyimpan banyak data dalam satu variable
$farel = array(
    "id" => "Farel",
    "name" => "Faharel Pratama",
    "age" => 17,
    "address" => [   // menyimpan array di dalam array
        "city" => "Batam",
        "country" => "Indonesia"
    ]
);

// Memanggil semua data pada $farel
var_dump($farel);

// Memanggil data "age" pada $array (bisa dirubah dengan data lain nya juga)
var_dump($farel["age"]);
?>