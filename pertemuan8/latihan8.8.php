<?php
class Manusia {
    protected $nama = "Ardi";
    protected $kelas = "SI 2";

    protected function nama() {
        return $this->nama;
    }

    public function tampilkan_nama() {
        return "Nama: " . $this->nama();
    }

    public function tampilkan_kelas() {
        return "Kelas: " . $this->kelas;
    }
}

$manusia = new Manusia();

echo $manusia->tampilkan_nama() . "<br />";
echo $manusia->tampilkan_kelas();
?>