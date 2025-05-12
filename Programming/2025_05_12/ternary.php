<?php
/*
operator ternary
    1. ? : (jika benar)
    2. ?? (jika tidak ada)
*/

$umur = 20;

// $boleh_punya_sim = $umur >= 17 ? 'boleh' : 'tidak boleh';
// echo $boleh_punya_sim . PHP_EOL;


$umur = 15;
$level = ($umur < 5 ? 'Belum Sekolah' : (
    $umur >=5 && $umur < 7 ? 'TK' : (
        $umur >= 7 && $umur < 13 ? 'SD' : (
            $umur >= 13 && $umur < 16 ? 'SMP' : (
                $umur >= 16 && $umur < 19 ? 'SMA' : (
                    $umur >= 19 && $umur < 23 ? 'Kuliah' : 'Bekerja'
                )
            )
        )
    )

));


var_dump($level);