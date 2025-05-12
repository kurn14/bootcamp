<?php
/* switch statement


*/

$nilai = 70;
$spp = false;

switch($nilai){
    case ($nilai >= 80) : {

        echo 'Istimewa';

        switch($spp) {
            case true : echo ' dan sudah bayar SPP';break;
            default : echo ', tetapi belum bayar SPP';break;
        }

        break;
    }
    case ($nilai >= 70 && $nilai < 80) : {

        echo 'Baik';



        switch($spp) {
            case true : echo ' dan sudah bayar SPP';break;
            default : echo ', tetapi belum bayar SPP';break;
        }

        break;
    }
    case ($nilai >= 50 && $nilai < 70) : {

        echo 'Cukup';



        switch($spp) {
            case true : echo ' dan sudah bayar SPP';break;
            default : echo ', tetapi belum bayar SPP';break;
        }

        break;
    }
    default : {
        echo 'Kurang';



        switch($spp) {
            case true : echo ' dan sudah bayar SPP';break;
            default : echo ', tetapi belum bayar SPP';break;
        }

        break;
    }
}

echo PHP_EOL;