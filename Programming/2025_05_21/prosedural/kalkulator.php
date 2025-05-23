<?php

include 'lib.php';

function kalkulasi($a, $b, $operasi) {
    switch ($operasi) {
        case 'tambah':
            return penjumlahan($a, $b);
        case 'kurang':
            return pengurangan($a, $b);
        case 'kali':
            return perkalian($a, $b);
        case 'bagi':
            return pembagian($a, $b);
        case 'pangkat':
            return pangkat($a, $b);
        case 'maksimum':
            return maksimum($a, $b);
        case 'minimum':
            return minimum($a, $b);
        default:
            return "Operasi tidak dikenali";
    }
}

// Contoh penggunaan
$a = 10;
$b = 5;
$operasi = 'kurang';
$hasil = kalkulasi($a, $b, $operasi);
echo "Hasil dari $a $operasi $b adalah: $hasil\n";