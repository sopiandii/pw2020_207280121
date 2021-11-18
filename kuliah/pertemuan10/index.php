<?php
require 'functions.php';

$pegawai = query("SELECT * FROM pegawai");

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Daftar Pegawai</title>
</head>

<body>
  <h3>Daftar Pegawai</h3>

  <a href="tambah.php">Tambah Data</a>
  <br><br>

  <table border="1" cellpadding="10" cellspacing="0">

    <tr>
      <th>No.</th>
      <th>Foto</th>
      <th>Nama</th>
      <th>Aksi</th>
    </tr>

    <?php $i = 1;
    foreach ($pegawai as $pns) : ?>
      <tr>
        <td><?= $i++; ?></td>
        <td><img src="img/<?= $pns['gambar']; ?>" width="50"></td>
        <td><?= $pns['nama']; ?></td>
        <td>
          <a href="detail.php?id=<?= $pns['id']; ?>">Lihat Detail</a>
        </td>
      </tr>
    <?php endforeach; ?>

  </table>

</body>

</html>