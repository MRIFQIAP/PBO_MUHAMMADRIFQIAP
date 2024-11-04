<?php
include('koneksi.php'); 
$koneksi = new Database();

$action = $_GET['action'];

if ($action == "add") {
    $koneksi->tambah_data(
        $_POST['kd_barang'],
        $_POST['nama_barang'],
        $_POST['stok'],
        $_POST['harga_beli'],
        $_POST['harga_jual'],
        $_FILES['gambar_produk']['name']
    );
    header('location:tampil.php');
}

elseif ($action == "edit") {
    $id = $_GET['id']; 
    $koneksi->edit_data(
        $id,
        $_POST['nama_barang'],
        $_POST['stok'],
        $_POST['harga_beli'],
        $_POST['harga_jual'],
        $_FILES['gambar_produk']['name']
    );
    header('location:tampil.php');
}

elseif ($action == "delete") {
    $id = $_GET['id']; 
    $koneksi->delete_data($id);
    header('location:tampil.php');
}

elseif ($action == "print_satuan") {
    $nama_barang = $_POST['nama_barang'];
    $koneksi->satuan_print($nama_barang);
    header('location:cetak2.php?nama_barang='.$nama_barang);
}

elseif ($action == "login") {
    $koneksi->login($_POST['username'], $_POST['password']);
}

elseif ($action == "logout") {
    $koneksi->logout();
}
?>
