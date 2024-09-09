<?php
Class Kendaraan{
    var $jumlahRoda=4;
    var $warna;
    var $bahanBakar;
    var $harga;
    var $merek;
    var $tahunPembuatan;
    var $platnomor;
    

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

    function hargabekas()
    {
        if($this->tahunPembuatan > 2005){
            $hargabekas = $this->harga - ($this->harga * 0.2);
        }elseif ($this->tahunPembuatan < 2005 && $this->tahunPembuatan > 2001){
            $hargabekas = $this->harga - ($this->harga * 0.3);
        }elseif ($this->tahunPembuatan < 2000){
            $hargabekas = $this->harga - ($this->harga * 0.4);
        }
        return $hargabekas;
    }

    function pajak(){
        if ($this->tahunPembuatan <=2017){
            $hargapajak= $this->harga * 2.5;
        } else{
            $hargapajak = 0;
        }
        return $hargapajak;
    } 

    function operasi(){
    if ($this->platnomor % 2 == 0){
        $hari = "Selasa, Kamis, dan Sabtu";
    }else{
        $hari = "senin, rabu, jumat, dan minggu ";
    }
    return $hari;
}
}
$objekKendaraan = new Kendaraan ;
$objekKendaraan -> harga = 50000000;
$objekKendaraan -> bahanBakar = "Premium";
$objekKendaraan -> tahunPembuatan = 1999;
$objekKendaraan -> platnomor = 2128;

echo "Status Harga : ".$objekKendaraan ->statusHarga(); 
echo "<br>" ;
echo "Status BBM: ".$objekKendaraan -> dapatSubsidi()."<br>";
echo "Harga Bekas: ".$objekKendaraan -> HargaBekas()."<br>";
echo "Jumlah Pajak: ".$objekKendaraan -> pajak()."<br>";
echo "Hari Operasi: ".$objekKendaraan -> operasi()."<br>";