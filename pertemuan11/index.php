<?php
include ('koneksi.php');
$db= new database ();
$data_barang = $db->tampil_data ();
$koneksi = mysqli_connect ("localhost", "root", "", "belajaroop");
?>
<!DOCTYPE html>
<html lang="">
<head>
    <title></title>
    <style type = "text/css">
        formbackground_border{
            margin: 0px 230px;
            color: white;
        }
    </style>
</head>
<body>
    <a href = "tambah_data.php"> Tambah Data</a>
    <form id= "background_border" method= "get">
        <input type = "text" name = "Cari" Placeholder = "Cari Nama Barang">
        <input type = "Submit" value = "Cari">
    </form>

<?php
if (isset($_GET['Cari'])){
    $cari = $_GET['Cari'];
    echo "<b>Hasil Pencarian: ".$cari."</b>";
}
?>

<table border="1">
    <tr>
        <th>No</th>
        <th>Barang</th>
        <th>stok</th>
        <th>Harga Beli</th>
        <th>Harga Jual</th>
        <th>action</th>
    </tr>
    <?php
    $no =1;
    foreach ($data_barang as $row){
        ?>
        <tr>
            <td><?php echo $no++; ?></td>
            <td><?php echo $row['nama_barang']; ?></td>
            <td><?php echo $row['stok']; ?></td>
            <td><?php echo $row['harga_beli']; ?></td>
            <td><?php echo $row['harga_jual']; ?></td>
            <td>
                <a href = "edit_data.php?id_barang=<?php echo $row ['id_barang'];?>&action=edit">Edit</a>
                <a href = "proses_barang.php?id_barang=<?php echo $row ['id_barang'];?>&action=delete">Hapus</a>
            </td>
        </tr>
        <?php
    }
    ?>
</table>
</body>
</html>