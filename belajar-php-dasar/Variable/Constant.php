<!-- Variable di PHP sifatnya Mutable artinya bisa dirubah -->
<!-- Jika ingin membuat Variable yang tidak dapat dirubah (Immutable), maka tidak bisa dilakukan di PHP -->
<!-- Sebagai gantinya ada fitur yang namanya Constant -->
<!-- Constant adalah tempat untuk menyimpan data yang tidak bisa dirubah setelah di deklerasikan -->
<!-- Untuk membuat Constant kita menggunakan function define() -->
<!-- Best practice pembuatan nama constant adalah menggunakan UPPER_CASE -->

<?php 

define("AUTHOR", "Faharel Adittha Pratama");
define("APP_VERSION", "123");

echo "Nama Author : ";
echo AUTHOR;

echo "<br>";

echo "Versi Aplikasi : ";
echo APP_VERSION;

// Kita ngga bisa menggunakan define pada Constant yang sudah ada, karena akan terjadi error