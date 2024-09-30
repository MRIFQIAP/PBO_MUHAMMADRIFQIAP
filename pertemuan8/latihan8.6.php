<?php

class manusia
{
    // Properties (encapsulation)
    public $nama = "Ardi";
    public $kelas = "SI 2"; //Corrected: Used 'public' instead of 'var'
 
    // Method to display the name
    function tampilkan_nama()
    {
        return $this->nama;
    }
 
    // Method to display the class
    public function tampilkan_kelas()
    {
        return $this->kelas;
    }
}
 
// Instantiate the manusia class
$manusia = new manusia();
 
// Call methods and display the results
echo "Nama : " . $manusia->tampilkan_nama() . "<br />";
echo "Kelas : " . $manusia->tampilkan_kelas();

?>