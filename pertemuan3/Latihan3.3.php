<?php
class kendaraan{
    var $jumlahRoda; 
    var $warna;
    var $bahanBakar; 
    var $harga;
    var $merek;

 function statusHarga(){
    if ($this->harga > 50000000) $status = 'Mahal';
    else $status = 'Murah';
    return $status;
}
}

$objekKendaraan1 = new kendaraan();
$objekKendaraan1->merek ="Yamaha MIO";//set properti
$objekKendaraan1->harga=10000000;//set properti

$objekKendaraan2 = new kendaraan();
$objekKendaraan2->merek="Toyota Avanza";//set properti
$objekKendaraan2->harga=100000000;//set properti

$objekKendaraan3 = new kendaraan ();
$objekKendaraan3->merek = "BMW";
$objekKendaraan3->harga = 200000000;

echo "Ini adalah hasil dari Objek Kendaraan 2 <br/>";
echo "Merek: ".$objekKendaraan2->merek."<br/>";
echo "Nominal Harga: ".$objekKendaraan2->harga."<br/>";
echo "Status Harga Kendaraan: ".$objekKendaraan2->statusHarga()."<br/>";
echo "<br/>";
echo "ini adalah hasil dari objek 3 <br/>";
echo "merek: ".$objekKendaraan3->merek."<br/>";
echo "harga: ".$objekKendaraan3->harga."<br/>";
?>