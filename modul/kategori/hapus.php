<?php
	error_reporting(E_ALL);
	include "../../config/koneksi.php";

    $id=$_GET['id'];
    
    $query=mysqli_query($conn,"DELETE FROM kategori WHERE id_kategori='$id'") or die(mysql_error());
    
    if($query)
    {
        echo "<script>alert('Data buku Berhasil dihapus..!!')</script>";
        echo "<script>window.location.href='kategori.php';</script>";
        
    }
    else
    {
        echo "Gagal Menghapus Data buku";
    }
    ?>