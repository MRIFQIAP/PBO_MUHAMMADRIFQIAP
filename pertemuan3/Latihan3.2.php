<?php
Class Kendaraan{
    var $jumlahRoda=4;
    var $warna;
    var $bahanBakar="Premium";
    var $harga = 100000000;
    var $merek;
    var $tahunPembuatan=2004;
    

    function statusharga() {
        if ($this->harga > 50000000) {
            $status = "Harga kendaraan mahal";
        } else {
            $status = "Harga kendaraan murah";
        }
        return $status; 
    }

    function dapatSubsidi() {
        if ($this->tahunPembuatan < 2005 && $this->bahanBakar == "Premium") {
            $status = "Dapat subsidi";
        } else {
            $status = "Tidak dapat subsidi";
        }
        return $status; 
    }
}
//Objek 1
//deklarasi objek dan instansiasi objek (berada di luar class)
$objekKendaraan1 = new Kendaraan;
//setting properties
$objekKendaraan1 ->harga=1000000;
$objekKendaraan1 ->tahunPembuatan = 1999;
//instansiasi objek (pemanggilan method/function)
echo "Status Harga : ".$objekKendaraan1 ->statusHarga();

//Objek 2
//deklarasi objek dan instansiasi objek (berada di luar class)
$objekKendaraan2 = new Kendaraan;
//setting properties
$objekKendaraan2 ->bahanBakar = "Pertamax";
$objekKendaraan2->tahunPembuatan = 1999;
$objekKendaraan2->hargaSecondKendaraan = 50000000;
//instansiasi objek (pemanggilan method/function)
echo "<br>";
echo "Status BBM: ".$objekKendaraan2 ->dapatSubsidi();
echo "<br>";
echo "Harga Bekas: ". $objekKendaraan2 ->hargaSecondKendaraan;

?>