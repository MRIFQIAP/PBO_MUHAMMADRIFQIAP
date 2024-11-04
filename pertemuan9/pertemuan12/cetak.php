<?php 
include('koneksi.php'); 
$db = new Database(); 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Laporan Data Barang CV Jaya</title>
    <style type="text/css">
        form#background_border { 
            margin: 0px 230px; 
            color: white; 
        }
        h2 {
            text-align: center;
        }
        table {
            width: 100%; 
            border-collapse: collapse; 
            margin: 20px auto; 
        }
        th, td {
            border: 1px solid #ddd; 
            padding: 8px; 
            text-align: center; 
        }
        th {
            background-color: #f2f2f2; 
            color: black; 
        }
    </style>
</head>
<body>
    <h2>LAPORAN DATA BARANG CV JAYA</h2>
    <table>
        <tr>
            <th>No</th>
            <th>Kode Barang</th>
            <th>Barang</th>
            <th>Stok</th>
            <th>Harga Beli</th>
            <th>Harga Jual</th>
            <th>Keuntungan</th>
        </tr>
        <?php
        $data_barang = $db->tampil_data(); // Corrected the assignment
        $no = 1; 
        foreach ($data_barang as $row) {
        ?>
        <tr>
            <td><?php echo $no++; ?></td>
            <td><?php echo htmlspecialchars($row['kd_barang']); ?></td>
            <td><?php echo htmlspecialchars($row['nama_barang']); ?></td>
            <td><?php echo htmlspecialchars($row['stok']); ?></td>
            <td><?php echo htmlspecialchars($row['harga_beli']); ?></td>
            <td><?php echo htmlspecialchars($row['harga_jual']); ?></td>
            <td><?php echo htmlspecialchars($row['harga_jual'] - $row['harga_beli']); ?></td>
        </tr> 
        <?php
        }
        ?>
    </table>
    <script>
        window.print();
    </script>
</body>
</html>
