<?php
class kendaraan {
    var $jumlahroda = 4;
    var $warna;
    var $bahanbakar = "Premium";
    var $harga = 100000000;
    var $merk;
    var $tahunpembuatan = 2004;

    function statusharga() {
        if ($this->harga > 50000000) {
            $status = "Harga kendaraan mahal";
        } else {
            $status = "Harga kendaraan murah";
        }
        return $status; 
    }

    function statussubsidi() {
        if ($this->tahunpembuatan < 2005 && $this->bahanbakar == "Premium") {
            $status = "Dapat subsidi";
        } else {
            $status = "Tidak dapat subsidi";
        }
        return $status; 
    }
}


$ObjekKendaraan = new kendaraan();

echo "Jumlah roda: " . $ObjekKendaraan->jumlahroda . "<br/>";
echo "Status harga: " . $ObjekKendaraan->statusharga() . "<br/>";
echo "Status subsidi: " . $ObjekKendaraan->statussubsidi() . "<br/>";
?>
