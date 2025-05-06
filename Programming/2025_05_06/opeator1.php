<?php

$a = 10;
$b = 12;
$c = $a + $b; // 22

$d = $c - 4; // 18

$e = $d + 5; // 23

$f = $a + $e - $c; // 10 + 23 - 22

echo $f;
echo PHP_EOL;