<?php
// include 'Kendaraan.php'; //menggunakan class Kendaraan
class Kapal extends Kendaraan implements Driveable { //menggunakan interface KendaraanInterface
    private int $kapasitasPenumpang;
    private int $kapasitasKargo; //atribut

    public function __construct($jenis = null, $jumlahRoda = null, $kapasitasPenumpang = null, $kapasitasKargo = null) {
        parent::__construct($jenis, $jumlahRoda);
        $this->kapasitasPenumpang = $kapasitasPenumpang;
        $this->kapasitasKargo = $kapasitasKargo;
    }

    public function drive() {
        // Implementasi logika mengemudikan kapal
        echo "Kapal sedang berlayar di lautan.\n";
    }
    public function type() {
        // Implementasi logika untuk menampilkan tipe kapal
        echo "Ini adalah kapal.\n";
    }

    public function setKapasitasPenumpang($kapasitasPenumpang) { //method setter
        $this->kapasitasPenumpang = $kapasitasPenumpang;
    }
    public function getKapasitasPenumpang() { //method getter
        return $this->kapasitasPenumpang;
    }
    public function setKapasitasKargo($kapasitasKargo) {
        $this->kapasitasKargo = $kapasitasKargo;
    }
    public function getKapasitasKargo() {
        return $this->kapasitasKargo;
    }
}