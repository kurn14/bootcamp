<?php
include 'Mobil.php';
// include 'Pikup.php';
// include 'KeretaApi.php';
// include 'Kapal.php';


$avanza = new Mobil("Bensin", 4, 1300, 4);

$byd = new Mobil("Listrik", 4, 1300, 4);

$colt = new Pikup("Diesel", 4, 1300, 2, 1000);

// $bima = new KeretaApi("Diesel", 20, 10, 100);

// $samudraPasai = new Kapal("Diesel", 0, 200, 1000);

// Menampilkan informasi kendaraan
echo "Mobil Avanza:".PHP_EOL;
echo "Jenis: ".$avanza->getJenis().PHP_EOL;
echo "Jumlah Roda: ".$avanza->getJumlahRoda().PHP_EOL;
echo "Kubikasi Mesin: ".$avanza->getkubikasiMesin().PHP_EOL;
echo "Jumlah Pintu: ".$avanza->getJumlahPintu().PHP_EOL;
echo "=========================".PHP_EOL;
echo "Mobil Byd:".PHP_EOL;
echo "Jenis: ".$byd->getJenis().PHP_EOL;
echo "Jumlah Roda: ".$byd->getJumlahRoda().PHP_EOL;
echo "Kubikasi Mesin: ".$byd->getkubikasiMesin().PHP_EOL;
echo "Jumlah Pintu: ".$byd->getJumlahPintu().PHP_EOL;
echo "=========================".PHP_EOL;
echo "Pikup Colt:".PHP_EOL;
echo "Jenis: ".$colt->getJenis().PHP_EOL;
echo "Jumlah Roda: ".$colt->getJumlahRoda().PHP_EOL;
echo "Kubikasi Mesin: ".$colt->getkubikasiMesin().PHP_EOL;
echo "Jumlah Pintu: ".$colt->getJumlahPintu().PHP_EOL;
echo "Kapasitas Kargo: ".$colt->getKapasitasKargo().PHP_EOL;
echo "=========================".PHP_EOL;
// echo "Kereta Api Bima:".PHP_EOL;
// echo "Jenis: ".$bima->getJenis().PHP_EOL;
// echo "Jumlah Roda: ".$bima->getJumlahRoda().PHP_EOL;
// echo "Jumlah Gerbong: ".$bima->getJumlahGerbong().PHP_EOL;
// echo "Jumlah Kursi: ".$bima->getJumlahKursi().PHP_EOL;
// echo "=========================".PHP_EOL;
// echo "Kapal Samudra Pasai:".PHP_EOL;
// echo "Jenis: ".$samudraPasai->getJenis().PHP_EOL;
// echo "Jumlah Roda: ".$samudraPasai->getJumlahRoda().PHP_EOL;
// echo "Kapasitas Penumpang: ".$samudraPasai->getKapasitasPenumpang().PHP_EOL;
// echo "Kapasitas Kargo: ".$samudraPasai->getKapasitasKargo().PHP_EOL;
// echo "=========================".PHP_EOL;