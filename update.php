<?php include 'db.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Edit Data Mahasiswa</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h2>Edit Data Mahasiswa</h2>
    <?php
    $id = $_GET['id'];
    $result = mysqli_query($conn, "SELECT * FROM mahasiswa WHERE id=$id");
    $row = mysqli_fetch_assoc($result);
    ?>
    <form method="post">
        <label>Nama:</label>
        <input type="text" name="nama" value="<?php echo $row['nama']; ?>" required>

        <label>NIM:</label>
        <input type="text" name="nim" value="<?php echo $row['nim']; ?>" required>

        <label>Prodi:</label>
        <input type="text" name="prodi" value="<?php echo $row['prodi']; ?>" required>

        <label>Jenis Kelamin:</label>
        <select name="jenis_kelamin" required>
            <option value="Laki-laki" <?php if($row['jenis_kelamin']=="Laki-laki") echo "selected"; ?>>Laki-laki</option>
            <option value="Perempuan" <?php if($row['jenis_kelamin']=="Perempuan") echo "selected"; ?>>Perempuan</option>
        </select>

        <label>Alamat:</label>
        <textarea name="alamat"><?php echo $row['alamat']; ?></textarea>

        <label>No HP:</label>
        <input type="text" name="no_hp" value="<?php echo $row['no_hp']; ?>">

        <label>Email:</label>
        <input type="email" name="email" value="<?php echo $row['email']; ?>">

        <button type="submit" name="submit">Update</button>
    </form>

    <?php
    if (isset($_POST['submit'])) {
        $nama = $_POST['nama'];
        $nim = $_POST['nim'];
        $prodi = $_POST['prodi'];
        $jenis_kelamin = $_POST['jenis_kelamin'];
        $alamat = $_POST['alamat'];
        $no_hp = $_POST['no_hp'];
        $email = $_POST['email'];

        $update = "UPDATE mahasiswa 
                   SET nama='$nama', nim='$nim', prodi='$prodi', jenis_kelamin='$jenis_kelamin', 
                       alamat='$alamat', no_hp='$no_hp', email='$email' 
                   WHERE id=$id";
        if (mysqli_query($conn, $update)) {
            echo "<script>alert('Data berhasil diupdate');window.location='index.php';</script>";
        } else {
            echo "Error: " . mysqli_error($conn);
        }
    }
    ?>
</body>
</html>
