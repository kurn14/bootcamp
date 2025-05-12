<?php
/*
    Operator Relasi
    1. == (sama dengan)
    2. === (identik)
    3. != (tidak sama dengan)
    4. !== (tidak identik)
    5. > (lebih besar dari)
    6. < (kurang dari)
    7. >= (lebih besar sama dengan)
    8. <= (kurang dari sama dengan)
*/
$kiri = true; //dapat dianggap 1 dalam integer
$kanan = 1; // integer 1 .... banyak dalam konversi ke boolean selain 0 dianggap true

// var_dump($kiri == $kanan); // ==
// var_dump($kiri === $kanan); // ===


$kiri = 20;
$kanan = 20;

// var_dump($kiri != $kanan); // !=
var_dump($kiri <> $kanan);

// var_dump($kiri !== $kanan); // !==

// var_dump($kiri > $kanan); // >
// var_dump($kiri < $kanan); // <
// var_dump($kiri >= $kanan); // >=

// var_dump(($kiri == $kanan) || ($kiri > $kanan));

// var_dump($kiri <= $kanan); // <=