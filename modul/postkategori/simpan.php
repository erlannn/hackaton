<?php

    include "../../config/koneksi.php";
    // include "../../config/ubah_tanggal.php";

    $id_artikel=$_POST['id_artikel'];
    $id_kategori=$_POST['id_kategori'];
    $tgl_posting=$_POST['tgl_posting'];
    $username=$_SESSION['username'] ;
    $link=$_POST['link'];

    $b=mysqli_query($conn,"INSERT INTO postingan_kategori VALUES('$id_artikel','$id_kategori','$tgl_posting','$username','$link')") or die(mysqli_error($conn));

    if($b)
    {
        echo "<script>alert('Data Kategori Berhasil ditambahkan..!!')</script>";
        echo "<script>window.location.href='postkategori.php';</script>";
      
    }
    else
    {
        echo "Gagal Menyimpan Data Kategori";
    }
?>