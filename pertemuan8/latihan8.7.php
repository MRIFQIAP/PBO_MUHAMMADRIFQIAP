<?php
class Manusia {
    private $nama = "Ardi";
    private $kelas = "SI 2";

    private function m_nama() { 
        return $this->nama; 
    }

    public function tampilkan_nama() { 
        return $this->m_nama(); 
    }

    public function tampilkan_kelas() { 
        return $this->kelas; 
    }
}

$manusia = new Manusia();
echo "Nama: " . $manusia->tampilkan_nama() . "<br />";
echo "Kelas: " . $manusia->tampilkan_kelas();
?>