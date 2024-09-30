<?php
class Manusia {
    var $nama;
    var $warna;

    function __construct() {
        echo "Ini adalah isi method construct <br/>";
    }

    function __destruct() {
        echo "Ini adalah isi method destruct <br/>";
    }

    function tampilkan_nama() {
        return "Nama saya mahasiswa SI <br/>";
    }
}

$manusia = new Manusia();
echo $manusia->tampilkan_nama();
?>