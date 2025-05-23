<?php
include_once 'Kendaraan.php'; //menggunakan class Kendaraan
include_once 'Driveable.php'; //menggunakan interface Driveable

class KeretaApi extends Kendaraan implements Driveable { //menggunakan interface KendaraanInterface
    private int $jumlahGerbong;
    private int $jumlahKursi; //atribut

    public function __construct($jenis = null, $jumlahRoda = null, $jumlahGerbong = null, $jumlahKursi = null) {
        parent::__construct($jenis, $jumlahRoda);
        $this->jumlahGerbong = $jumlahGerbong;
        $this->jumlahKursi = $jumlahKursi;    
    }


    public function drive() {
        // Implementasi logika mengemudikan kereta api
        echo "Kereta api sedang berjalan di atas rel.\n";
    }

    public function type() {
        // Implementasi logika untuk menampilkan tipe kereta api
        echo "Ini adalah kereta api.\n";
    }

    public function setJumlahGerbong($jumlahGerbong) { //method setter
        $this->jumlahGerbong = $jumlahGerbong;
    }
    public function getJumlahGerbong() { //method getter
        return $this->jumlahGerbong;
    }
    public function setJumlahKursi($jumlahKursi) {
        $this->jumlahKursi = $jumlahKursi;
    }
    public function getJumlahKursi() {
        return $this->jumlahKursi;
    }



}