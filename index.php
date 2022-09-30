<?php



require 'function.php';

$buku = query("SELECT * FROM buku");

?>



<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <title>prakweb_2022_b_203040083</title>
  <link rel="stylesheet" href="css/style.css">
  <link type="text/css" rel="stylesheet" href="css/materialize.min.css" media="screen,projection" />
</head>

<body class="luar">
  <h1 class="judul">QistiIzatus.</h1>

  <a href="tambah.php">Tambah Data Buku</a>
  <br>
  <br>
  <br>
  <table class="tabel" border="1" cellpadding="13" cellspacing="0">
    <tr class="top">
      <th>#</th>
      <th>id</th>
      <th>judul Buku</th>
      <th>penulis</th>
      <th>penerbit</th>
      <th>stok</th>
      <th>gambar</th>
      <th>Aksi</th>
    </tr>
    <?php $i = 1; ?>
    <?php foreach ($buku as $sb) : ?>
      <tr class="isi">
        <td><?= $i ?></td>
        <td><?= $sb['id_buku']; ?></td>
        <td><?= $sb['nama_buku']; ?></td>
        <td><?= $sb['penulis_buku']; ?></td>
        <td><?= $sb['tahun_penerbit']; ?></td>
        <td><?= $sb['stok']; ?></td>
        <td><img src="img/<?= $sb['gambar']; ?>" alt="" width="100"></td>
        <td>
          <a href="">ubah</a>
          <a href="hapus.php?id_buku=<?= $sb['id_buku']; ?>" 
          onclick=" return confirm('Yakin?');">hapus</a>
        </td>
      </tr>
      <?php $i++; ?>
    <?php endforeach; ?>
  </table>

  <footer class="page-footer blue-grey darken-4 center white-text">
    <div class="container">
      <p class="flow-text">Qisti Izatussyabani. Copyright 2022.</p>
    </div>
  </footer>

</body>

</html>