<?php 

// Seperti namanya, tipe data Number adalah tipe data yang menampilkan angka saja

echo "Decimal : "; // [Base 10]
var_dump(1234); // Output : int(1234)

echo "Octal : "; // [Base 8]
var_dump(0123); // Output : int(83)

echo "Hexadecimal : "; // [Base 16]
var_dump(0x1A); // Output : int(26)

echo "Binary : "; // [Base 2]
var_dump(0b11111111); // Output : int(255)

echo "Underscore di Number : ";
var_dump(1_234_567); // Output : int(1234567)


// Floating Point

echo "Floating Point : ";
var_dump(1.234); // Output : float(1.234)

echo "Floating Point dengan E notation (1.2 x 1000)  : ";
var_dump(1.2e3); // Output : float(1200)

echo "Floating Point dengan E notation Minus (7 x 0.001) : ";
var_dump(7e-3); // Output : float(0.007)

echo "Undescore di Floating Point : ";
var_dump(1_234.567); // Output : float(1234.567)