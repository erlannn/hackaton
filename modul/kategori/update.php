<?php
include "../../config/koneksi.php";
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  $id_kategori = $_POST['id_kategori'];
  $nama_kategori = $_POST['nama_kategori'];


  $update_query = "UPDATE kategori SET nama_kategori = '$nama_kategori' WHERE id_kategori = '$id_kategori'";
  $result = mysqli_query($conn, $update_query);

  if ($result) {
    echo "<script>alert('Data Kategori Berhasil Diubah..!!')</script>";
    echo "<script>window.location.href='kategori.php';</script>";
  } else {
    echo "Gagal mengubah data";
  }
}
?>
