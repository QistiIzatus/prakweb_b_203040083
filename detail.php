<?php
require 'function.php';

// ambil id dari URL
$id = $_GET['id'];

// query Buku berdasarkan id
$sb = query("SELECT * FROM buku WHERE id = $id")
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Detail Buku</title>
</head>

<body>
  <h3>Detail Buku</h3>
  <ul>
    <li>Nama Buku : <?= $sb['nama_buku']; ?></li>
    <li>Penulis Buku : <?= $sb['penulis_buku']; ?></li>
    <li>Tahun Penerbit : <?= $sb['tahun_penerbit']; ?></li>
    <li>Stok : <?= $sb['stok']; ?></li>
    <li><img src="img/<?= $sb['gambar']; ?>"></li>
    <li><a href="ubah.php?id_buku=<?= $sb['id_buku']; ?>">ubah</a> | <a href="hapus.php?id_buku=<?= $sb['id_buku']; ?>" onclick="return confirm('apakah anda yakin?');">hapus</a></li>
    <li><a href="index.php">Kembali ke daftar Buku</a></li>
  </ul>
</body>

</html>
