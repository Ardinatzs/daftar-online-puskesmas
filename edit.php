<?php
include "koneksi.php";

$id = $_GET['id'];

if(isset($_POST['update'])){

    $nama = $_POST['nama'];
    $nik = $_POST['nik'];
    $hp = $_POST['hp'];
    $jk = $_POST['jk'];
    $tanggal = $_POST['tanggal'];
    $poli = $_POST['poli'];
    $keluhan = $_POST['keluhan'];

    mysqli_query($koneksi,"UPDATE pasien SET
        nama='$nama',
        nik='$nik',
        hp='$hp',
        jk='$jk',
        tanggal='$tanggal',
        poli='$poli',
        keluhan='$keluhan'
        WHERE id='$id'");

    header("Location: index.php");
}

$data = mysqli_query($koneksi,"SELECT * FROM pasien WHERE id='$id'");
$d = mysqli_fetch_array($data);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Edit Data Pasien</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<div class="container">

<h2>Edit Data Pasien</h2>

<form method="POST">

<label>Nama Lengkap</label>
<input type="text" name="nama" value="<?php echo $d['nama']; ?>" required>

<label>NIK</label>
<input type="text" name="nik" value="<?php echo $d['nik']; ?>" required>

<label>Nomor HP</label>
<input type="text" name="hp" value="<?php echo $d['hp']; ?>" required>

<label>Jenis Kelamin</label>
<select name="jk">
    <option <?php if($d['jk']=="Laki-laki") echo "selected"; ?>>Laki-laki</option>
    <option <?php if($d['jk']=="Perempuan") echo "selected"; ?>>Perempuan</option>
</select>

<label>Tanggal Berobat</label>
<input type="date" name="tanggal" value="<?php echo $d['tanggal']; ?>">

<label>Poli</label>
<select name="poli">
    <option <?php if($d['poli']=="Poli Umum") echo "selected"; ?>>Poli Umum</option>
    <option <?php if($d['poli']=="Poli Gigi") echo "selected"; ?>>Poli Gigi</option>
    <option <?php if($d['poli']=="Poli Anak") echo "selected"; ?>>Poli Anak</option>
    <option <?php if($d['poli']=="Poli Lansia") echo "selected"; ?>>Poli Lansia</option>
    <option <?php if($d['poli']=="Poli Ibu & Anak") echo "selected"; ?>>Poli Ibu & Anak</option>
</select>

<label>Keluhan</label>
<textarea name="keluhan"><?php echo $d['keluhan']; ?></textarea>

<br><br>

<button type="submit" name="update">Simpan Perubahan</button>

</form>

</div>

</body>
</html>