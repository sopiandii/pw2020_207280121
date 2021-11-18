<?php
require 'functions.php';

if (!isset($_GET['id'])) {
  header("Location: index.php");
  exit;
}

$id = $_GET['id'];

$pns = query("SELECT * FROM pegawai WHERE id = $id");


if (isset($_POST["ubah"])) {

  // cek apakah data berhasil diubah atau tidak
  if (ubah($_POST) > 0) {
    echo "
			<script>
				alert('data berhasil diubah!');
				document.location.href = 'index.php';
			</script>
		";
  } else {
    echo "
			<script>
				alert('data gagal diubah!');
				document.location.href = 'index.php';
			</script>
		";
  }
}


?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Ubah Data</title>
</head>

<body>
  <h3>Ubah Data Pegawai</h3>

  <form action="" method="POST" enctype="multipart/form-data">
    <input type="hidden" name="id" required value="<?= $pns['id']; ?>">
    <ul>
      <li>
        <label>
          NIP :
          <input type="text" name="nip" autofocus required value="<?= $pns['nip']; ?>">
        </label>
      </li>
      <li>
        <label>
          Nama :
          <input type="text" name="nama" required value="<?= $pns['nama']; ?>">
        </label>
      </li>
      <li>
        <label>
          Pangkat,Gol. :
          <input type=" text" name="pangkat" required value="<?= $pns['pangkat']; ?>">
        </label>
      </li>
      <li>
        <label>
          Jabatan :
          <input type=" text" name="jabatan" required value="<?= $pns['jabatan']; ?>">
        </label>
      </li>
      <li>
        <label>
          Foto :
          <input type=" text" name="gambar" required value="<?= $pns['gambar']; ?>">
        </label>
      </li>
      <li>
        <button type=" submit" name="ubah">Ubah</button>
      </li>
    </ul>
  </form>
</body>

</html>