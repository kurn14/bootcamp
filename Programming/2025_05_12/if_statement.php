<?php
/*
$umur = 20;
if($umur < 5) { //awal scope
    echo "Belum Sekolah" . PHP_EOL;
}// akhir scope

else if($umur >= 5 && $umur < 7) {
    echo "TK" . PHP_EOL;
} else if($umur >= 7 && $umur < 13) {
    echo "SD" . PHP_EOL;
} else if($umur >= 13 && $umur < 16) {
    echo "SMP" . PHP_EOL;
} else if($umur >= 16 && $umur < 19) {
    echo "SMA" . PHP_EOL;
} else if($umur >= 19 && $umur < 23) {
    echo "Kuliah" . PHP_EOL;
}
else {
    echo "Bekerja" . PHP_EOL;
}
*/

$umur = 25;
$menikah = false; // si fulan sudah menikah

if($umur < 22){
    echo 'Belum saatnya menikah secara UU'.PHP_EOL;

    if($menikah == true){
        echo 'Sudah menikah dan melanggar UU'.PHP_EOL;
    }
    else {
        echo 'Belum menikah'.PHP_EOL;;
    }

}
else {
    echo 'Diperbolehkan menikah secara UU';
    echo ($menikah == true ? ' dan sudah menikah' : ', tetapi dia belum menikah').PHP_EOL;
}

