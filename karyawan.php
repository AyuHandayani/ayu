<?php
class Karyawan {
    public $nama;
    public $asal;
    public $pendidikanterakhir;

    public function tampilkanInfo() {
        return "Nama karyawan adalah " . $this->nama . ", asalnya " . $this->asal . ", dan pendidikan terakhirnya " . $this->pendidikanterakhir;
    }
}

$karyawan = new Karyawan();
$karyawan->nama = "Ayu Handayani";
$karyawan->asal = "Kotagajah";
$karyawan->pendidikanterakhir = "D3 Manajemen Informatika";

echo $karyawan->tampilkanInfo();
?>
