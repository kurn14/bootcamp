<?php
include 'Mobil.php'; //menggunakan class Mobil
$avanza = new Mobil("Bensin", 4, 1300, 4);
echo $avanza->info();

$colt = new Pikup("Diesel", 4, 1300, 2, 1000);
echo $colt->info();
