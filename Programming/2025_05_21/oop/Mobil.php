<?php
include 'Kendaraan.php'; //menggunakan class Kendaraan
class Mobil extends Kendaraan {
    private int $kubikasiMesin;
    private int $jumlahPintu; //atribut

    public function __construct($jenis = null, $jumlahRoda = null, $kubikasiMesin = null, $jumlahPintu = null) {
        parent::__construct($jenis, $jumlahRoda);
        $this->kubikasiMesin = $kubikasiMesin;
        $this->jumlahPintu = $jumlahPintu;
    }

    public function setKubikasiMesin($kubikasiMesin) { //method setter
        $this->kubikasiMesin = $kubikasiMesin;
    }
    public function getkubikasiMesin() { //method getter
        return $this->kubikasiMesin;
    }
    public function setJumlahPintu($jumlahPintu) {
        $this->jumlahPintu = $jumlahPintu;
    }
    public function getJumlahPintu() {
        return $this->jumlahPintu;
    }

    public function info($nomor) {
        return 'Mobil ini adalah '.$this->getJenis().' dengan '.$this->jumlahRoda.' roda, kubikasi mesin '.$this->kubikasiMesin.' dan jumlah pintu '.$this->jumlahPintu;
    }
}

class Pikup extends Mobil {
    private int $kapasitasKargo; //atribut

    public function __construct($jenis = null, $jumlahRoda = null, $kubikasiMesin = null, $jumlahPintu = null, $kapasitasKargo = null) {
        parent::__construct($jenis, $jumlahRoda, $kubikasiMesin, $jumlahPintu);
        $this->kapasitasKargo = $kapasitasKargo;
    }

    public function setKapasitasKargo($kapasitasKargo) { //method setter
        $this->kapasitasKargo = $kapasitasKargo;
    }
    public function getKapasitasKargo() { //method getter
        return $this->kapasitasKargo;
    }

    public function info($nomor) {
        return 'Pikup ini adalah '.$this->getJenis().' dengan '.$this->jumlahRoda.' roda dan kargo '.$this->kapasitasKargo.' kg';
    }
}