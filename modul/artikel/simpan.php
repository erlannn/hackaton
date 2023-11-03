<?php

    include "../../config/koneksi.php";
    // include "../../config/ubah_tanggal.php";

    $id_artikel=$_POST['id_artikel'];
    $Judul_artikel=$_POST['judul_artikel'];
	$status=$_POST['status'];
    $isi_artikel=$_POST['isi_artikel'];
   

    $b=mysqli_query($conn,"INSERT INTO artikel VALUES('$id_artikel','$Judul_artikel','$status','$isi_artikel')") or die(mysqli_error($conn));

    if($b)
    {
        echo "<script>alert('Data artikel Berhasil ditambahkan..!!')</script>";
        echo "<script>window.location.href='artikel.php';</script>";
      
    }
    else
    {
        echo "Gagal Menyimpan Data Kategori";
    }
?>