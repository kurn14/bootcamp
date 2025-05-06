<?php

//round

$a = -10.5;
// echo round($a); // 11
// echo PHP_EOL;

//floor

$a = -10.1;
// echo floor($a);
// echo PHP_EOL;


/*
$x = -3.7;
echo floor($x); // Hasil: -4

Kenapa bukan -3? Karena:

    floor() selalu membulatkan ke arah negatif tak hingga (minus infinity).

    Jadi meskipun -3.7 secara nilai lebih dekat ke -3, floor() tetap membulatkannya ke bawah, yaitu -4.

    */

//ceil
$a = -10.999999;
// echo ceil($a); // 11
echo PHP_EOL;

/*
$x = -3.7;
echo ceil($x);  // Hasil: -3

Kenapa hasilnya -3 dan bukan -4?

Karena:

    ceil() membulatkan ke atas secara matematis.

    Untuk angka negatif, "lebih besar" berarti lebih mendekati nol.

    */

// echo sqrt(20);
// echo PHP_EOL;

//abs
$a = 10;
echo abs($a); // 10
echo PHP_EOL;