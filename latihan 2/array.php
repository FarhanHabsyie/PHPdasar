<?php
$hari = array("Senin","Selasa","Rabu");
$bulan = ["Januari", "Februari", "Maret"];
//var_dump() untuk menampilkan data print_r() menampilkan tanpa data
// var_dump($hari);
// echo "<br>";
// print_r($bulan);

// //menampilkan 1 element pada array hitungannya dimulai dari 0
// echo "<br>";
// echo $hari[0];
// echo "<br>";
// echo $bulan[1];

// menambahkan array
var_dump($hari);
$hari[] = "Kamis";
$hari[] ="Jumat";
echo "<br>";
var_dump($hari)
?>