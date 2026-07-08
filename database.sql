CREATE DATABASE IF NOT EXISTS puskesmas;
USE puskesmas;

CREATE TABLE pasien (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nama VARCHAR(100) NOT NULL,
    nik VARCHAR(16) NOT NULL,
    hp VARCHAR(15) NOT NULL,
    jk VARCHAR(20) NOT NULL,
    tanggal DATE NOT NULL,
    poli VARCHAR(50) NOT NULL,
    keluhan TEXT NOT NULL
);