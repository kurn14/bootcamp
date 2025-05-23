<?php
//buatkan objek kelas kereta api dan kapal
include 'KeretaApi.php'; //menggunakan class KeretaApi
include 'Kapal.php'; //menggunakan class Kapal
$kereta = new KeretaApi("Diesel", 8, 10, 100);
$kapal = new Kapal("Diesel", 0, 200, 1000);
//menampilkan informasi kendaraan
echo "Kereta Api:".PHP_EOL;
echo "Jenis: ".$kereta->getJenis().PHP_EOL;
echo "Jumlah Roda: ".$kereta->getJumlahRoda().PHP_EOL;
echo "Jumlah Gerbong: ".$kereta->getJumlahGerbong().PHP_EOL;
echo "Jumlah Kursi: ".$kereta->getJumlahKursi().PHP_EOL;
echo "=========================".PHP_EOL;
echo "Kapal:".PHP_EOL;
echo "Jenis: ".$kapal->getJenis().PHP_EOL;
echo "Jumlah Roda: ".$kapal->getJumlahRoda().PHP_EOL;
echo "Kapasitas Penumpang: ".$kapal->getKapasitasPenumpang().PHP_EOL;
echo "Kapasitas Kargo: ".$kapal->getKapasitasKargo().PHP_EOL;
echo "=========================".PHP_EOL;
//menjalankan method drive
$kereta->drive();
$kapal->drive();
echo "=========================".PHP_EOL;
//menjalankan method type
$kereta->type();
$kapal->type();