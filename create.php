<?php 
//Menambahkan fitur Create dan Read data mahasiswa
include 'db.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Tambah Data Mahasiswa</title>
    <link rel="stylesheet" href="style.css">
    <style>
        body {
            font-family: Arial, sans-serif;
            background: #f4f9ff;
            padding: 30px;
        }

        .form-container {
            width: 50%;
            margin: auto;
            background: #fff;
            padding: 25px 40px;
            border-radius: 12px;
            box-shadow: 0 4px 15px rgba(0,0,0,0.1);
        }

        h2 {
            text-align: center;
            color: #2c3e50;
            margin-bottom: 25px;
        }

        label {
            display: block;
            margin-top: 10px;
            font-weight: bold;
            color: #333;
        }

        input[type="text"],
        input[type="email"],
        textarea,
        select {
            width: 100%;
            padding: 10px;
            margin-top: 6px;
            border: 1px solid #ccc;
            border-radius: 6px;
            box-sizing: border-box;
        }

        textarea {
            resize: vertical;
            height: 70px;
        }

        button {
            width: 100%;
            background: #4caf50;
            color: white;
            border: none;
            padding: 12px;
            margin-top: 15px;
            border-radius: 6px;
            cursor: pointer;
            font-size: 16px;
        }

        button:hover {
            background: #43a047;
        }

        a {
            display: block;
            text-align: center;
            margin-top: 15px;
            text-decoration: none;
            color: #2196f3;
        }
    </style>
</head>
<body>
    <div class="form-container">
        <h2>Tambah Data Mahasiswa</h2>
        <form method="post">
            <label>Nama:</label>
            <input type="text" name="nama" required>

            <label>NIM:</label>
            <input type="text" name="nim" required>

            <label>Prodi:</label>
            <input type="text" name="prodi" required>

            <label>Jenis Kelamin:</label>
            <select name="jenis_kelamin" required>
                <option value="">-- Pilih Jenis Kelamin --</option>
                <option value="Laki-laki">Laki-laki</option>
                <option value="Perempuan">Perempuan</option>
            </select>

            <label>Alamat:</label>
            <textarea name="alamat"></textarea>

            <label>No HP:</label>
            <input type="text" name="no_hp">

            <label>Email:</label>
            <input type="email" name="email">

            <button type="submit" name="submit">Simpan</button>
        </form>

        <a href="index.php">← Kembali ke Daftar</a>
    </div>

    <?php
    if (isset($_POST['submit'])) {
        $nama = $_POST['nama'];
        $nim = $_POST['nim'];
        $prodi = $_POST['prodi'];
        $jenis_kelamin = $_POST['jenis_kelamin'];
        $alamat = $_POST['alamat'];
        $no_hp = $_POST['no_hp'];
        $email = $_POST['email'];

        // Validasi agar tidak kosong
        if ($jenis_kelamin == "") {
            echo "<script>alert('Silakan pilih jenis kelamin!');</script>";
        } else {
            $query = "INSERT INTO mahasiswa (nama, nim, prodi, jenis_kelamin, alamat, no_hp, email)
                      VALUES ('$nama', '$nim', '$prodi', '$jenis_kelamin', '$alamat', '$no_hp', '$email')";
            if (mysqli_query($conn, $query)) {
                echo "<script>alert('Data berhasil ditambahkan');window.location='index.php';</script>";
            } else {
                echo "Error: " . mysqli_error($conn);
            }
        }
    }
    ?>
</body>
</html>
