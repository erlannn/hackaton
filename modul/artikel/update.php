<?php
include "../../config/koneksi.php";
if ($_SERVER['REQUEST_METHOD'] === 'POST') {

  $id_artikel = $_POST['id_artikel'];
  $judul_artikel = $_POST['judul_artikel'];
  $status = $_POST['status'];
  $isi_artikel = $_POST['isi_artikel'];


  $update_query = "UPDATE artikel SET id_artikel = '$id_artikel',judul_artikel = '$judul_artikel', status = '$status', isi_artikel= '$isi_artikel' WHERE id_artikel = '$id_artikel'";
  $result = mysqli_query($conn, $update_query);

  if ($result) {
    echo "<script>alert('Data Artikel Berhasil Diubah..!!')</script>";
    echo "<script>window.location.href='artikel.php';</script>";
  } else {
    echo "Gagal mengubah data";
  }
}
?>