<?php
/* perulangan di PHP dibagi menjadi 2
1. perulangan dengan batasan
2. perulangan tanpa batasan atau akan berhenti jika kondisi tertentu
*/

// /contoh perulangan dengan batasan

// for($i = 1; $i <= 10; $i++){
//     echo 'Perulangan ke-'.$i.PHP_EOL;
// }


$var2 = [
    'satu', 'dua', 'tiga', 'empat', 'lima', 'enam'
];

$var4 = [
    'satu' => 1,
    'dua' => 2,
    'tiga' => 3,
    'empat' => 4,
    'lima' => 5,
    'enam' => 6
];

// foreach($var4 as $nilai){
//     echo 'Perulangan dengan nilai '.$nilai.PHP_EOL;
// }

$arrayBulan = [
    'Januari',
    'Februari',
    'Maret',
    'April',
    'Mei',
    'Juni',
    'Juli',
    'Agustus',
    'September',
    'Oktober',
    'November',
    'Desember'
];

// print_r($arrayBulan);
// exit();

// for($i = 2025 ; $i < 2027; $i++){
//     foreach($arrayBulan as $idx => $bulan){
//         if($idx % 4 == 3){
//             echo 'Bulan '.$bulan.' Tahun '.$i.PHP_EOL;
//         }
//     }
// }

// for($i = 2027 ; $i > 2025; $i--){
//     foreach($arrayBulan as $idx => $bulan){
//         if($idx % 4 == 3){
//             echo 'Bulan '.$bulan.' Tahun '.$i.PHP_EOL;
//         }
//     }
// }



// for($i = 2027 ; $i > 2025; $i--){
//     for($j = 11; $j >= 0; $j--){
//         if($j % 4 == 3){
//             echo 'Bulan '.$arrayBulan[$j].' Tahun '.$i.PHP_EOL;
//         }
//     }
// }

//buatkan contoh looping for decrement

// for($i = 10 ; $i > 0; $i--){
//     echo 'Perulangan ke-'.$i.PHP_EOL;
// }

for($i = 1; $i < 10; $i++){
    echo $i.' ';;
    for($j = 1; $j < 10; $j++){
        if($j > $i){
            echo ' ';
        }
        else {
            echo '* ';
        }
    }
    echo PHP_EOL;
}