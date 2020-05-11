<?php
class Mahasiswa {
    private $nama, $umur, $ipk;

    public function __construct( $nama, $umur, $ipk) {
        $this->nama = $nama;
        $this->umur = $umur;
        $this->ipk = $ipk;
    }

    public function getNama() {
        return $this->nama;

    }
}


$mhs = new Mahasiswa('Sandhika', 20, 2.5);

echo $mhs1->getNama();