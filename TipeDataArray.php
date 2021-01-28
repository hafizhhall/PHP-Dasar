<?php

$values = array(1,2,3,4,7.9);
var_dump($values);

$nama = ["Hafizh", "Athallah", "Widianto"];
var_dump($nama);

//Operasi Array
var_dump($nama[0]);
$nama[1] = "Budi";
var_dump($nama);

unset($nama[0]);
var_dump($nama);

$nama[] = "joko";
var_dump($nama);

var_dump(count($nama));

//Array Sebagai Map

?>