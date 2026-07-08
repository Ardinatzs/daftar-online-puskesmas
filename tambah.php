<?php
include "koneksi.php";

$nama = $_POST['nama'];
$nik = $_POST['nik'];
$hp = $_POST['hp'];
$jk = $_POST['jk'];
$tanggal = $_POST['tanggal'];
$poli = $_POST['poli'];
$keluhan = $_POST['keluhan'];

$query = "INSERT INTO pasien (nama, nik, hp, jk, tanggal, poli, keluhan)
VALUES ('$nama', '$nik', '$hp', '$jk', '$tanggal', '$poli', '$keluhan')";

if(mysqli_query($koneksi, $query)){
    echo "<script>
        alert('Data berhasil ditambahkan');
        window.location='index.php';
    </script>";
}else{
    echo "<script>
        alert('Data gagal ditambahkan');
        window.location='index.php';
    </script>";
}
?>