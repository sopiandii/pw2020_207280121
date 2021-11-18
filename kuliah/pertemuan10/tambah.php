<?php
require 'functions.php';

if (isset($_POST['simpan'])) {
  if (tambah($_POST) > 0) {
    echo "
			<script>
				alert('Data berhasil disimpan!');
				document.location.href = 'index.php';
			</script>
		";
  } else {
    echo "
    <script>
      alert('Data gagal disimpan!');
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
  <title>Tambah Data</title>
</head>

<body>
  <h3>Tambah Data Pegawai</h3>

  <form action="" method="POST" enctype="multipart/form-data">
    <ul>
      <li>
        <label>
          NIP :
          <input type="text" name="nip" autofocus required>
        </label>
      </li>
      <li>
        <label>
          Nama :
          <input type="text" name="nama" required>
        </label>
      </li>
      <li>
        <label>
          Pangkat,Gol. :
          <input type="text" name="pangkat" required>
        </label>
      </li>
      <li>
        <label>
          Jabatan :
          <input type="text" name="jabatan" required>
        </label>
      </li>
      <li>
        <label>
          Foto :
          <input type="text" name="gambar" required>
        </label>
      </li>
      <br>
      <li>
        <button type="submit" name="simpan">Simpan</button>
      </li>
      <br>
      <li>
        <a href="index.php">Kembali ke daftar pegawai</a>
      </li>
    </ul>
  </form>
</body>

</html>