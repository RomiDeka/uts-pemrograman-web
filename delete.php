<?php
//Menambahkan fitur Delete data mahasiswa
include 'db.php';
$id = $_GET['id'];
$query = "DELETE FROM mahasiswa WHERE id=$id";
if (mysqli_query($conn, $query)) {
    echo "<script>alert('Data berhasil dihapus');window.location='index.php';</script>";
} else {
    echo "Error: " . mysqli_error($conn);
}
?>
