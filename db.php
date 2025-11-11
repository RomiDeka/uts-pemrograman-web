<?php
// Koneksi ke database SIMRS
$host = "localhost";
$user = "root";
$pass = "";
$db   = "simrs";
$conn = mysqli_connect($host, $user, $pass, $db);
if (!$conn) {
    die("Koneksi gagal: " . mysqli_connect_error());
}
?>
