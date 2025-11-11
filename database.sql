CREATE DATABASE simrs;
USE simrs;

CREATE TABLE mahasiswa (
    id INT(11) AUTO_INCREMENT PRIMARY KEY,
    nama VARCHAR(100) NOT NULL,
    nim VARCHAR(20) NOT NULL,
    prodi VARCHAR(50) NOT NULL,
    jenis_kelamin ENUM('Laki-laki','Perempuan') NOT NULL,
    alamat TEXT,
    no_hp VARCHAR(20),
    email VARCHAR(100)
);
