<?php
require 'functions.php';

// ambil id dari url
$id = $_GET['id'];

// query pegawai berdasarkan id
$pegawai = query("SELECT * FROM pegawai where id = $id");

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Detail Pegawai</title>
</head>

<body>
  <h3>Detail Pegawai</h3>
  <ul>
    <li><img src="img/<?= $pegawai['gambar']; ?>"></li>
    <li>Nama : <?= $pegawai['nama']; ?></li>
    <li>NIP : <?= $pegawai['nip']; ?></li>
    <li>Pangkat, Gol : <?= $pegawai['pangkat']; ?></li>
    <li>Jabatan : <?= $pegawai['jabatan']; ?></li>
    <li><a href="">Ubah</a> | <a href="">Hapus</a></li>
    <li><a href="latihan3.php">Kembali ke daftar pegawai</a></li>
  </ul>
</body>

</html>