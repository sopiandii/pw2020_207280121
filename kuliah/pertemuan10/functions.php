<?php

function koneksi()
{
  return mysqli_connect('localhost', 'root', '', 'phpdasar');
}

function query($query)
{
  $conn = koneksi();

  $result = mysqli_query($conn, $query);

  // jika hasilnya hanya 1 data
  if (mysqli_num_rows($result) == 1) {
    return mysqli_fetch_assoc($result);
  }

  $rows = [];
  while ($row = mysqli_fetch_assoc($result)) {
    $rows[] = $row;
  }

  return $rows;
}

function tambah($data)
{
  $conn = koneksi();

  $nip = htmlspecialchars($data['nip']);
  $nama = htmlspecialchars($data['nama']);
  $pangkat = htmlspecialchars($data['pangkat']);
  $jabatan = htmlspecialchars($data['jabatan']);
  $gambar = htmlspecialchars($data['gambar']);

  $query = "INSERT INTO pegawai 
            VALUES 
            (null, '$nip', '$nama', '$pangkat', '$jabatan', '$gambar')";

  mysqli_query($conn, $query) or die(mysqli_error($conn));
  echo mysqli_error($conn);
  return mysqli_affected_rows($conn);
}

function hapus($id)
{
  $conn = koneksi();

  $query = "DELETE FROM pegawai WHERE id = $id";

  mysqli_query($conn, $query) or die(mysqli_error($conn));

  return mysqli_affected_rows($conn);
}

function ubah($data)
{
  $conn = koneksi();

  $id = $data["id"]; // ini untuk mengambil data id yang akan diubah
  // ambil data dari tiap elemen dalam form
  $nip = htmlspecialchars($data["nip"]);
  $nama = htmlspecialchars($data["nama"]);
  $pangkat = htmlspecialchars($data["pangkat"]);
  $jabatan = htmlspecialchars($data["jabatan"]);
  $gambar = htmlspecialchars($data["gambar"]);

  // cek apakah user pilih gambar baru atau tidak
  // if ($_FILES['gambar']['error'] === 4) {
  //   $gambar = $gambarLama;
  // } else {
  //   $gambar = upload();
  // }

  // query ubah data
  $query = "UPDATE pegawai SET 
				nip = '$nip',
				nama = '$nama',
				pangkat = '$pangkat',
				jabatan = '$jabatan',
				gambar = '$gambar'
			WHERE id = $id";

  mysqli_query($conn, $query);

  return mysqli_affected_rows($conn);
}
