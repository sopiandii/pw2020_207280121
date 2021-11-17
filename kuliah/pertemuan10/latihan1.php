<?php
// koneksi ke DB dan Pilih Database
$conn = mysqli_connect('localhost', 'root', '', 'phpdasar');

// Query isi tabel mahasiswa
$result = mysqli_query($conn, "SELECT * FROM pegawai");

// ubah data ke dalam array
$rows = [];
while ($row = mysqli_fetch_assoc($result)) {
  $rows[] = $row;
}

// tampung ke variabel pegawai
$pegawai = $rows;


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

  <table border="1" cellpadding="10" cellspacing="0">

    <tr>
      <th>No.</th>
      <th>Foto</th>
      <th>NIP</th>
      <th>Nama</th>
      <th>Pangkat/Gol</th>
      <th>Jabatan</th>
      <th>Aksi</th>
    </tr>

    <?php $i = 1;
    foreach ($pegawai as $pns) : ?>
      <tr>
        <td><?= $i++; ?></td>
        <td><img src="img/<?= $pns["gambar"]; ?>" width="50"></td>
        <td><?= $pns["nip"]; ?></td>
        <td><?= $pns["nama"]; ?></td>
        <td><?= $pns["pangkat"]; ?></td>
        <td><?= $pns["jabatan"]; ?></td>
        <td>
          <a href="">Ubah</a> |
          <a href="">Hapus</a>
        </td>
      </tr>
    <?php endforeach; ?>

  </table>

</body>

</html>