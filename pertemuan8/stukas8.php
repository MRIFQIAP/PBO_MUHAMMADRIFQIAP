<?php
class Karyawan {
    private $gajiPokok;
    private $nama;
    private $golongan;
    private $jamLembur;
    private $totalGaji;

    public function __construct($nama, $golongan, $jamLembur) {
        $this->nama = $nama;
        $this->golongan = $golongan;
        $this->jamLembur = $jamLembur;
        $this->totalGaji = $this->hitungGaji();
    }

    private function hitungGaji()  {
        $gajiPokok = 0;
        if ($this->golongan === "Ib") {
            $gajiPokok = 1250000;
        } elseif ($this->golongan === "Ic") {
            $gajiPokok = 1300000;
        } elseif ($this->golongan === "Id") {
            $gajiPokok = 1350000;
        } elseif ($this->golongan === "IIa") {
            $gajiPokok = 2000000;
        } elseif ($this->golongan === "IIb") {
            $gajiPokok = 2100000;
        } elseif ($this->golongan === "IIc") {
            $gajiPokok = 2200000;
        } elseif ($this->golongan === "IIIa") {
            $gajiPokok = 2400000;
        } elseif ($this->golongan === "IIIb") {
            $gajiPokok = 2500000;
        } elseif ($this->golongan === "IIIc") {
            $gajiPokok = 2600000;
        } elseif ($this->golongan === "IVa") {
            $gajiPokok = 2800000;
        } elseif ($this->golongan === "IVb") {
            $gajiPokok = 2900000;
        } elseif ($this->golongan === "IVc") {
            $gajiPokok = 3000000;
        } elseif ($this->golongan === "IVd") {
            $gajiPokok = 3100000;
        }

        $gajiLembur = $this->jamLembur * 15000;
        return $gajiPokok + $gajiLembur;
    }

    public function getNama() {
        return $this->nama;
    }

    public function getGolongan() {
        return $this->golongan;
    }

    public function getJamLembur() {
        return $this->jamLembur;
    }

    public function getTotalGaji() {
        return $this->totalGaji;
    }
}
$karyawanList = [];
while (true) {
    $nama = readline("Masukkan nama karyawan (atau ketik 'exit' untuk keluar): ");
    if (strtolower($nama) === 'exit') {
        break;
    }

    $golongan = readline("Masukkan golongan karyawan: ");
    $jamLembur = (int)readline("Masukkan total jam lembur: ");

    $karyawanList[] = new Karyawan($nama, $golongan, $jamLembur);
}

foreach ($karyawanList as $karyawan) {
    echo "Nama Karyawan: " . $karyawan->getNama() . "\n";
    echo "Golongan: " . $karyawan->getGolongan() . "\n";
    echo "Total Jam Lembur: " . $karyawan->getJamLembur() . "\n";
    echo "Total Gaji: " . number_format($karyawan->getTotalGaji(), 0, ',', '.') . "\n";
    echo "------------------------------------\n";
}
?>
