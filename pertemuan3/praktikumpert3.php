<?php
class PenghitungAngsuran {
    var $BPinjaman = 1000000;
    var $bunga = 0.10;
    var $TPinjaman;
    var $LAngsuranBulan = 5;
    var $BesaranAngsuran;
    var $dendaketerlambatanperhari = 0.15;
    var $totalbunga;

    function totalpinjaman() {
        $this->totalbunga = $this->BPinjaman * $this->bunga;
        $this->TPinjaman = $this->BPinjaman + $this->totalbunga;
        return $this->TPinjaman; 
    }

    function hitungbesaranangsuran() {
        $this->BesaranAngsuran = $this->TPinjaman / $this->LAngsuranBulan;
        return $this->BesaranAngsuran; 
    }
}

$objekPenghitungAngsuran = new PenghitungAngsuran();
$objekPenghitungAngsuran->totalpinjaman();

echo "Latihan 3.3.PHP <br/>";
echo "TOKO PEGADAIAN SYARIAH <br/>";
echo "Jl Keadilan NO 16 <br/>";
echo "<br/>";
echo "Program Penghitung Besaran Angsuran Hutang <br/>";
echo "Besaran pinjaman: ".$objekPenghitungAngsuran->BPinjaman."<br/>";
echo "Masukan Besar Bunga (%): 10% <br/>";
echo "Total Pinjaman: ".$objekPenghitungAngsuran->TPinjaman."<br/>";
echo "Lama Angsuran (Bulan): ".$objekPenghitungAngsuran->LAngsuranBulan."<br/>";
echo "Besaran Angsuran: ".$objekPenghitungAngsuran->hitungbesaranangsuran()."<br/>";
?>