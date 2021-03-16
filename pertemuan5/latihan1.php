<?php
/* 
    Akbar Maulana
    203040136
    https://github.com/akbarmauu/pw2021_203040136
    Pertemuan 5 - 16 maret 2021
    Mempelajari mengenai Array
*/
?>

<?
//Array adalah sebuah variabel yang bisa menampung lebih dari satu nilai
//keynya adalah infex yang dimulai dari 0

//membuat array cara lama
$hari = array("Senin", "Selasa", "Rabu");
//membuat array cara baru
$bulan = ["januari", "februari", "maret"];
$arrl = [123, "tulisan", false];

// Menampilkan Array
// var_dump() / prin_r() 
// var_dump($hari);
// echo "<br>";
// print_r($bulan);
// echo "<br>";

// menampilkan 1 elemen pada array
// echo $arrl[0];
// echo "<br>";
// echo $bulan[1];

// menambahkan 1 elemen pada array
var_dump($hari);
$hari[] = "Kamis";
$hari[] = "Jum'at";
echo "<br>";
var_dump($hari);
?>
?>