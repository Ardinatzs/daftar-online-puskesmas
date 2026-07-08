<?php
include "koneksi.php";
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pendaftaran Online Puskesmas</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<div class="container">

<h1>Pendaftaran Online Puskesmas</h1>

<form action="tambah.php" method="POST">

<label>Nama Lengkap</label>
<input type="text" name="nama" required>

<label>NIK</label>
<input type="text" name="nik" required>

<label>Nomor HP</label>
<input type="text" name="hp" required>

<label>Jenis Kelamin</label>
<select name="jk">
<option>Laki-laki</option>
<option>Perempuan</option>
</select>

<label>Tanggal Berobat</label>
<input type="date" name="tanggal" required>

<label>Poli Tujuan</label>
<select name="poli">
<option>Poli Umum</option>
<option>Poli Gigi</option>
<option>Poli Anak</option>
<option>Poli Lansia</option>
<option>Poli Ibu & Anak</option>
</select>

<label>Keluhan</label>
<textarea name="keluhan"></textarea>

<button type="submit">Daftar</button>

</form>

<hr>

<h2>Data Pasien</h2>

<table border="1" width="100%">
<tr>
<th>No</th>
<th>Nama</th>
<th>NIK</th>
<th>HP</th>
<th>JK</th>
<th>Tanggal</th>
<th>Poli</th>
<th>Keluhan</th>
<th>Aksi</th>
</tr>

<?php
$no = 1;
$data = mysqli_query($koneksi, "SELECT * FROM pasien");

while($d = mysqli_fetch_array($data)){
?>

<tr>
<td><?= $no++; ?></td>
<td><?= $d['nama']; ?></td>
<td><?= $d['nik']; ?></td>
<td><?= $d['hp']; ?></td>
<td><?= $d['jk']; ?></td>
<td><?= $d['tanggal']; ?></td>
<td><?= $d['poli']; ?></td>
<td><?= $d['keluhan']; ?></td>
<td>
<a href="edit.php?id=<?= $d['id']; ?>">Edit</a> |
<a href="hapus.php?id=<?= $d['id']; ?>" onclick="return confirm('Yakin ingin menghapus?')">Hapus</a>
</td>
</tr>

<?php } ?>

</table>

</div>

</body>
</html>