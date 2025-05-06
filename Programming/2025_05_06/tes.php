<?php
// Soal 1
$a = 10;
$b = 5;
echo $a + $b;
echo PHP_EOL;

// Soal 2
$x = 20;
$y = 4;
echo $x - $y;
echo PHP_EOL;

echo $x * $y;
echo PHP_EOL;

echo $x / $y;
echo PHP_EOL;

// Soal 3
$panjang = 15;
$lebar = 8;
$luas = $panjang * $lebar;
echo $luas;
echo PHP_EOL;

// Soal 4
$a = 7;
$b = 10;

// SWAP
$c = $a; /// 5
$a = $b; // 10
$b = $c;


$a = $a + $b; // 7 + 10
$b = $a - $b; // 17 - 10 ---> b = 7
$a = $a - $b; // 17 - 7    --> a = 10


// Soal 5
$angka = 9;
$kuadrat = $angka ** 2;
echo $kuadrat; // 81
echo PHP_EOL;

// Soal 6
$total = 100;
$pajak = 0.1; //10 %
$jumlahPajakygDayar = $total * $pajak;
$totalAkhir = $total + $jumlahPajakygDayar;


// Soal 10
$celcius = 30;
$fahrenheit = ($celcius * 9/5) + 32;

// 100 (0 - 100) : 5
// 180 (32 - 212) : 9
// FPB = faktor persekutuan terbesar