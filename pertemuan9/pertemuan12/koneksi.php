<?php
class Database {
    var $host = "localhost";
    var $username = "root";
    var $password = "";
    var $database = "oopbelajarmrifqi";
    var $koneksi = "";

    function __construct() {
        $this->koneksi = mysqli_connect($this->host, $this->username, $this->password, $this->database);
        if (mysqli_connect_error()) {
            die("Koneksi database gagal: " . mysqli_connect_error());
        }
    }

    function tampil_data() {
        $data = mysqli_query($this->koneksi, "SELECT * FROM tb_barang");
        $hasil = [];
        while ($row = mysqli_fetch_array($data)) {
            $hasil[] = $row;
        }
        return $hasil;
    }

    function tambah_data($kd_barang, $nama_barang, $stok, $harga_beli, $harga_jual, $gambar_produk) {
        if ($gambar_produk != "") {
            $ekstensi_diperbolehkan = ['png', 'jpg', 'jpeg'];
            $x = explode('.', $gambar_produk);
            $ekstensi = strtolower(end($x));
            $file_tmp = $_FILES['gambar_produk']['tmp_name'];
            $angka_acak = rand(1, 999);
            $nama_gambar_baru = $angka_acak . '-' . $gambar_produk;

            if (in_array($ekstensi, $ekstensi_diperbolehkan)) {
                move_uploaded_file($file_tmp, 'gambar/' . $nama_gambar_baru);
                $query = "INSERT INTO tb_barang (kd_barang, nama_barang, stok, harga_beli, harga_jual, gambar_produk) VALUES ('$kd_barang', '$nama_barang', '$stok', '$harga_beli', '$harga_jual', '$nama_gambar_baru')";
                $result = mysqli_query($this->koneksi, $query);
                if (!$result) {
                    die("Query gagal dijalankan: " . mysqli_errno($this->koneksi) . "-" . mysqli_error($this->koneksi));
                } else {
                    echo "<script>alert('Data Berhasil Ditambah.');window.location = 'tampil.php';</script>";
                }
            } else {
                echo "<script>alert('Ekstensi gambar yang diperbolehkan hanya jpg, jpeg, atau png.');window.location='tambah_data.php';</script>";
            }
        } else {
            $query = "INSERT INTO tb_barang (kd_barang, nama_barang, stok, harga_beli, harga_jual, gambar_produk) VALUES ('$kd_barang', '$nama_barang', '$stok', '$harga_beli', '$harga_jual', NULL)";
            $result = mysqli_query($this->koneksi, $query);
            if (!$result) {
                die("Query gagal dijalankan: " . mysqli_errno($this->koneksi) . "-" . mysqli_error($this->koneksi));
            } else {
                echo "<script>alert('Data Berhasil Ditambah.');window.location = 'tampil.php';</script>";
            }
        }
    }

    function tampil_edit_data($id_barang) {
        $data = mysqli_query($this->koneksi, "SELECT * FROM tb_barang WHERE id_barang='$id_barang'");
        $hasil = [];
        while ($d = mysqli_fetch_array($data)) {
            $hasil[] = $d;
        }
        return $hasil;
    }

    function edit_data($id_barang, $nama_barang, $stok, $harga_beli, $harga_jual, $gambar_produk) {
        if ($gambar_produk != "") {
            $ekstensi_diperbolehkan = ['png', 'jpg', 'jpeg'];
            $x = explode('.', $gambar_produk);
            $ekstensi = strtolower(end($x));
            $file_tmp = $_FILES['gambar_produk']['tmp_name'];
            $angka_acak = rand(1, 999);
            $nama_gambar_baru = $angka_acak . '-' . $gambar_produk;

            if (in_array($ekstensi, $ekstensi_diperbolehkan)) {
                move_uploaded_file($file_tmp, 'gambar/' . $nama_gambar_baru);
                $query = "UPDATE tb_barang SET nama_barang='$nama_barang', stok='$stok', harga_beli='$harga_beli', harga_jual='$harga_jual', gambar_produk='$nama_gambar_baru' WHERE id_barang='$id_barang'";
                $result = mysqli_query($this->koneksi, $query);
                if (!$result) {
                    die("Query gagal dijalankan: " . mysqli_errno($this->koneksi) . "-" . mysqli_error($this->koneksi));
                } else {
                    echo "<script>alert('Data Berhasil Diubah.');window.location = 'tampil.php';</script>";
                }
            } else {
                echo "<script>alert('Ekstensi gambar yang boleh hanya jpg, jpeg, atau png.');window.location='edit_data.php';</script>";
            }
        } else {
            $query = "UPDATE tb_barang SET nama_barang='$nama_barang', stok='$stok', harga_beli='$harga_beli', harga_jual='$harga_jual' WHERE id_barang='$id_barang'";
            $result = mysqli_query($this->koneksi, $query);
            if (!$result) {
                die("Query gagal dijalankan: " . mysqli_errno($this->koneksi) . "-" . mysqli_error($this->koneksi));
            } else {
                echo "<script>alert('Data Berhasil diubah.');window.location='tampil.php';</script>";
            }
        }
    }

    function delete_data($id_barang) {
        mysqli_query($this->koneksi, "DELETE FROM tb_barang WHERE id_barang='$id_barang'");
    }
}
?>
