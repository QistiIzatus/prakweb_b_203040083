<?php
require 'function.php';

// jika tidak ada id di url
if (!isset($_GET['id'])) {
  header("Location: index.php");
  exit;
}

// ambil id dari url
$id = $_GET['id'];

// query mbuku berdasarkan id
$sb = query("SELECT * FROM buku WHERE id_buku = $id");


// cek apakah tombol ubah sudah ditekan
if (isset($_POST['ubah'])) {
  if (ubah($_POST) > 0) {
    echo "<script>
          alert('data berhasil diubah!');
          document.location.href = 'index.php';    
          </script>";
  } else {
    echo  "<script>
            alert('data gagal diubah!');
            document.location.href = 'index.php';    
          </script>";
  }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Ubah Data Buku</title>
</head>

<body>
  <h3>Form Ubah Data Buku</h3>
  <form action="" method="POST">
    <input type="hidden" name="id" value="<?= $sb['id']; ?>">
    <ul>
      <li>
        <label>
          Nama Buku :
          <input type="text" name="nama_buku" autofocus required value="<?= $sb['nama_buku']; ?>">
        </label>
      </li>
      <li>
        <label>
          Penulis Buku :
          <input type="text" name="penulis_buku" required value="<?= $sb['penulis_buku']; ?>">
        </label>
      </li>
      <li>
        <label>
          Tahun Penerbit :
          <input type="text" name="tahun_penerbit" required value="<?= $sb['tahun_penerbit']; ?>">
        </label>
      </li>
      <li>
        <label>
          Stok :
          <input type="text" name="stok" required value="<?= $sb['stok']; ?>">
        </label>
      </li>
      <li>
        <label>
          Gambar :
          <input type="text" name="gambar" required value="<?= $sb['gambar']; ?>">
        </label>
      </li>
      <li>
        <button type="submit" name="ubah">Ubah Data!</button>
      </li>
    </ul>
  </form>
</body>

</html>