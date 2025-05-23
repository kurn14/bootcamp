<?php

class Kendaraan {
    private string $jenis; //atribut apakah tenaga manusia, listrik, atau mesin
    protected int $jumlahRoda; //atribut

    public function __construct($jenis = null, $jumlahRoda = null) {
        $this->jenis = $jenis;
        $this->jumlahRoda = $jumlahRoda;
    }

    public function setJenis($jenis) { //method setter
        $this->jenis = $jenis;
    }
    public function getJenis() { //method getter
        return $this->jenis;
    }
    public function setJumlahRoda($jumlahRoda) {
        $this->jumlahRoda = $jumlahRoda;
    }
    public function getJumlahRoda() {
        return $this->jumlahRoda;
    }

    public function info($nomor) {
        return "Kendaraan no $nomor ini adalah $this->jenis dengan $this->jumlahRoda roda.";
    }
}