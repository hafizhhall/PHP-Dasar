<?php 

$nama = "Hafizh";
$nama = null;

$age = null;

echo "Nama : ";
echo $nama;
echo "\n";

echo "Age : ";
echo $age;
echo "\n";

$nama = "Hafizh";
//cek apakah data null 
echo "Is Name Null? ";
var_dump(is_null($nama));
echo "\n";

//hapus variabelnya
$contoh = "Hafizh";
unset($contoh);

//cek variabel apakah ada sama dengan is null
$contoh = "Athallah";
//lebih disarankan menggunakan is set
var_dump(isset($contoh));

?>