<?php
include "koneksi.php";

$db = new database();
$username = $_POST['username'];
$password = $_POST['password'];

$sql = "SELECT * FROM user WHERE username = ? AND password = ?";
$stmt = $db->koneksi->prepare($sql);

if (!$stmt) {
    die("Kesalahan dalam persiapan statement: " . $db->koneksi->error);
}

$stmt->bind_param("ss", $username, $password);
$stmt->execute();
$result = $stmt->get_result();

if ($result->num_rows == 0) {
    echo '<script language="javascript">alert("Username dan password salah! Silahkan login kembali."); document.location="login.php";</script>';
} else {
    echo '<script language="javascript">alert("Login berhasil!"); document.location="index.php";</script>';
}

$stmt->close();
$db->koneksi->close();
?>
