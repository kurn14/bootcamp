<?php
//buatkan string dummy panjangnya 30 karakter menggunakan kalimat indonesia
$str = "Saya suka belajar pemrograman.";

// index 0 adalah S
// index 1 adalah a
// index 2 adalah y
// index 3 adalah a
// index 4 adalah  (spasi)
// index 5 adalah s
// index 6 adalah u
// index 7 adalah k
// index 8 adalah a
// index 9 adalah  (spasi)
// index 10 adalah b
// index 11 adalah e
// index 12 adalah l
// index 13 adalah a
// index 14 adalah j
// index 15 adalah a
// index 16 adalah r
// index 17 adalah  (spasi)
// index 18 adalah p
// index 19 adalah e
// index 20 adalah m
// index 21 adalah r
// index 22 adalah o
// index 23 adalah g
// index 24 adalah r
// index 25 adalah a
// index 26 adalah m
// index 27 adalah a
// index 28 adalah n
// index 29 adalah .


$fun = strlen($str);

// var_dump($fun);

// $fun = strtolower($str);

// var_dump($fun);

// $fun = strtoupper($str);

// var_dump($fun);



// $fun = ucwords($str);

// var_dump(ucfirst(strtolower($fun)));

$fun = substr($str, -10, -3);
var_dump($fun);;