<?php
/* perulangan di PHP dibagi menjadi 2
1. perulangan dengan batasan
2. perulangan tanpa batasan atau akan berhenti jika kondisi tertentu
*/


//push up sampai adzan ashar jam 15

$jam = 13; //

// while ($jam < 15) {
//     echo "Push up jam " . $jam . PHP_EOL;
//     $jam++;
// }


// do {
//     echo "Push up jam " . $jam . PHP_EOL;
//     $jam++;
// } while ($jam < 15);

$arrayBulanHijriyah = [
    1 => 'Muharram',
    2 => 'Safar',
    3 => 'Rabiul Awal',
    4 => 'Rabiul Akhir',
    5 => 'Jumadil Awal',
    6 => 'Jumadil Akhir',
    7 => 'Rajab',
    8 => 'Sya’ban',
    9 => 'Ramadhan',
    10 => 'Syawwal',
    11 => 'Dzulqa’dah',
    12 => 'Dzulhijjah'
];

// $bulan = 12;
// do {
//     if($bulan % 4 == 0){
//         echo $bulan . ' = ' . $arrayBulanHijriyah[$bulan] . PHP_EOL;
//     }
//     $bulan--;
// } while ($bulan > 0);

$idx = 0;
$loop = true;

while($loop == true){
    echo 'Looping ...' . $idx . PHP_EOL;

    sleep(1); // delay 1 detik
    echo 'increment : '.$idx++; //suatu saat akan menjadi idx = 11
    echo PHP_EOL;
    echo 'nilai idx setelah increment : '.$idx;
    echo PHP_EOL;
    echo PHP_EOL;

    if($idx > 10){
        $loop = false;
        echo 'Looping dihentikan' . PHP_EOL;
    }
}
