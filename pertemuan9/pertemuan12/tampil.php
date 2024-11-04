<?php
include('koneksi.php');
$db = new database();
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, minimum-scale=1, initial-scale=1">
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    <title></title>
    <style type="text/css">
        form#background_border {
            margin: 0px 500px;
            color: black;
        }
        form#print_satuan {
            margin: 0px 250px;
            color: white;
        }
        .posisi_tombol {
            margin: 0px 200px;
        }
        .tombol_login {
            background: #47c0d8;
            color: white;
            font-size: 11pt;
            border: none;
            padding: 5px 20px;
        }
    </style>
    <style type="text/css">
        * {
            font-family: "Trebuchet MS";
        }
        h1 {
            text-transform: uppercase;
            color: #47c0d8;
        }
        table {
            border: solid 1px #ddeeee;
            border-collapse: collapse;
            border-spacing: 0;
            width: 70%;
            margin: 10px auto 10px auto;
        }
        table thead th {
            background-color: #ddefef;
            border: solid 1px #ddeeee;
            color: #336b6b;
            padding: 10px;
            text-align: left;
            text-shadow: 1px 1px 1px #fff;
            text-decoration: none;
        }
        table tbody td {
            border: solid 1px #ddeeee;
            color: #333;
            padding: 10px;
            text-shadow: 1px 1px 1px #fff;
        }
        a {
            background-color: #47c0d8;
            color: #fff;
            padding: 10px;
            text-decoration: none;
            font-size: 12px;
        }
    </style>
</head>
<body>
    <form id="background_border" method="get">
        Cari berdasarkan :
        <select name="kriteria">
            <option value="kd_barang">Kode Barang</option>
            <option value="nama_barang">Nama Barang</option>
            <option value="stok">Stok</option>
            <option value="harga_beli">Harga Beli</option>
            <option value="harga_jual">Harga Jual</option>
    </select>
    <input type="text" name="cari" placeholder="cari data">
    <input type="submit" class="tombol_login" value="cari">
    </form>
    </form>
<br>
<div class="posisi_tombol">
    <a href="tambah_data.php">+ Tambah Data</a>&nbsp;&nbsp;
    <a href="cetak.php" target="_BLANK">Print Data Barang</a>
    <a href="proses_barang.php?action=logout">Keluar Aplikasi</a>
</div>
<center>
    <h1>Data Barang</h1>
</center>
<table width="85%" border="1">
    <thead>
        <tr>
            <th width="6%">No</th>
            <th width="16%">Kode Barang</th>
            <th width="15%">Nama Barang</th>
            <th width="7%">Stok</th>
            <th width="13%">Harga Beli</th>
            <th width="14%">Harga Jual</th>
            <th width="16%">Gambar Produk</th>
            <th width="13%">Action</th>
        </tr>
    </thead>
    <tbody>
        <?php
        if (isset($_GET['cart'])) {
            $cari = $_GET['cart'];
            $kriteria = $_GET['kriteria'];
            $data_barang = $db->cari_data($cari, $kriteria);
 
            $no = 1;
            foreach ($data_barang as $row) {
                $rupiah_harga_beli = number_format($row['harga_beli'], 2, ',', '.');
                $rupiah_harga_jual = number_format($row['harga_jual'], 2, ',', '.');
                ?>
                <tr>
                    <td><?php echo $no++; ?></td>
                    <td><?php echo $row['kd_barang']; ?></td>
                    <td><?php echo $row['nama_barang']; ?></td>
                    <td><?php echo $row['stok']; ?></td>
                    <td><?php echo "Rp " . $rupiah_harga_beli; ?></td>
                    <td><?php echo "Rp " . $rupiah_harga_jual; ?></td>
                    <td style="text-align: center;"><img src="gambar/<?php echo $row['gambar_produk']; ?>" style="width: 120px;"></td>
                    <td>
                        <a href="edit_data.php?id_barang=<?php echo $row['id_barang']; ?>&action=edit">Edit</a>
                        <a href="proses_barang.php?id_barang=<?php echo $row['id_barang']; ?>&action=delete">Hapus</a>
                    </td>
                </tr>
                <?php
            }
        }
else {
    $data_barang = $db->tampil_data();
    $no = 1;
    foreach ($data_barang as $row) {
        $rupiah_harga_beli = "Rp " . number_format($row['harga_beli'], 2, ',', '.');
        $rupiah_harga_jual = "Rp " . number_format($row['harga_jual'], 2, ',', '.');
?>
        <tr>
            <td><?php echo $no++; ?></td>
            <td><?php echo $row['kd_barang']; ?></td>
            <td><?php echo $row['nama_barang']; ?></td>
            <td><?php echo $row['stok']; ?></td>
            <td><?php echo $rupiah_harga_beli; ?></td>
            <td><?php echo $rupiah_harga_jual; ?></td>
            <td style="text-align: center;">
                <img src="gambar/<?php echo $row['gambar_produk']; ?>" style="width: 120px;">
            </td>
            <td>
                <a href="edit_data.php?id_barang=<?php echo $row['id_barang']; ?>&action=edit">Edit</a>
                <a href="proses_barang.php?id_barang=<?php echo $row['id_barang']; ?>&action=delete">Hapus</a>
            </td>
        </tr>
<?php
    }
}
?>
</table>
 
<?php
if (isset($_GET['cart'])) {
    $cari = $_GET['cart'];
    echo "<b>Hasil pencarian: " . htmlspecialchars($cari) . "</b>";
}
?>
<br>
</body>
</html>