<?php 
//Menambahkan fitur Create dan Read data mahasiswa
include 'db.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Data Mahasiswa</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h2>Daftar Mahasiswa</h2>
    <a href="create.php" class="btn">+ Tambah Data</a>
    <table border="1" cellpadding="10" cellspacing="0">
        <tr>
            <th>No</th>
            <th>Nama</th>
            <th>NIM</th>
            <th>Prodi</th>
            <th>Jenis Kelamin</th>
            <th>Alamat</th>
            <th>No HP</th>
            <th>Email</th>
            <th>Aksi</th>
        </tr>
        <?php
        $result = mysqli_query($conn, "SELECT * FROM mahasiswa");
        $no = 1;
        while ($row = mysqli_fetch_assoc($result)) {
            echo "<tr>
                <td>".$no++."</td>
                <td>".$row['nama']."</td>
                <td>".$row['nim']."</td>
                <td>".$row['prodi']."</td>
                <td>".$row['jenis_kelamin']."</td>
                <td>".$row['alamat']."</td>
                <td>".$row['no_hp']."</td>
                <td>".$row['email']."</td>
                <td>
                    <a href='update.php?id=".$row['id']."' class='btn-edit'>Edit</a> |
                    <a href='delete.php?id=".$row['id']."' class='btn-delete' onclick='return confirm(\"Yakin hapus data?\")'>Hapus</a>
                </td>
            </tr>";
        }
        ?>
    </table>
</body>
</html>
