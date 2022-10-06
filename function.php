<?php

function koneksi()
{
  return mysqli_connect('localhost', 'root', '', 'prakweb_2022_b_203040083');
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

  $nama_buku = htmlspecialchars($data['nama_buku']);
  $penulis_buku =  htmlspecialchars($data['penulis_buku']);
  $tahun_penerbit = htmlspecialchars($data['tahun_penerbit']);
  $stok = htmlspecialchars($data['stok']);
  $gambar = htmlspecialchars($data['gambar']);

  $query = "INSERT INTO buku VALUES (null, '$nama_buku', '$penulis_buku', '$tahun_penerbit', '$stok ', '$gambar')";

  mysqli_query($conn, $query) or die(mysqli_error($conn));
  echo mysqli_error($conn);
  return mysqli_affected_rows($conn);
}

function hapus($id)
{
  $conn = koneksi();
  mysqli_query($conn, "DELETE FROM buku WHERE id_buku = $id") or die(mysqli_error($conn));
  return mysqli_affected_rows($conn);
}

function ubah($data)
{
  $conn = koneksi();

  $id_buku= htmlspecialchars($data['id']);
  $nama_buku = htmlspecialchars($data['nama_buku']);
  $penulis_buku =  htmlspecialchars($data['penulis_buku']);
  $tahun_penerbit = htmlspecialchars($data['tahun_penerbit']);
  $stok = htmlspecialchars($data['stok']);
  $gambar = htmlspecialchars($data['gambar']);

  $query = "UPDATE buku SET
              nama_buku = '$nama_buku',
              penulis_buku = '$penulis_buku',
              tahun_penerbit = '$tahun_penerbit',
              stok = '$stok',
              gambar = '$gambar'
            WHERE id_buku = $id_buku";

  mysqli_query($conn, $query) or die(mysqli_error($conn));
  echo mysqli_error($conn);
  return mysqli_affected_rows($conn);
}

?>
