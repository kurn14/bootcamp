<?php

function maksimum($a, $b) {
    if ($a > $b) {
        return $a;
    } else {
        return $b;
    }
}
function minimum($a, $b) {
    if ($a < $b) {
        return $a;
    } else {
        return $b;
    }
}
function pangkat($a, $b) {
    $hasil = 1;
    for ($i = 0; $i < $b; $i++) {
        $hasil *= $a;
    }
    return $hasil;
}
function perkalian($a, $b) {
    return $a * $b;
}
function pembagian($a, $b) {
    if ($b == 0) {
        return "Pembagian dengan nol tidak terdefinisi";
    } else {
        return $a / $b;
    }
}
function penjumlahan($a, $b) {
    return $a + $b;
}
function pengurangan($a, $b) {
    return $a - $b;
}