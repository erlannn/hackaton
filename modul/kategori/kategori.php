<?php
include "../../head.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Kategori</title>
  <!-- <link rel="stylesheet" type="text/css" href="../../css/1.css"> -->
  <link rel="stylesheet" href="../../assets/css/1.css">
  <style>
    body {
      margin: 0;
      padding: 0;
      color: black;
      font-family: Arial, sans-serif;
      background-image: url('../../assets/images/slider-right-dec.jpg');
      background-size: cover;
      background-repeat: no-repeat;
    }
    </style>
</head>
<body>
  
<?php 
	error_reporting(0);

include "../../config/koneksi.php";
// include "../config/ubah_tanggal.php";
switch($_GET['act']){
default:
?>
<div class="btnout"  >
  <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-arrow-left-square-fill" viewBox="0 0 16 16">
  <path d="M16 14a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V2a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v12zm-4.5-6.5H5.707l2.147-2.146a.5.5 0 1 0-.708-.708l-3 3a.5.5 0 0 0 0 .708l3 3a.5.5 0 0 0 .708-.708L5.707 8.5H11.5a.5.5 0 0 0 0-1z"/>
</svg>
  </div> 
  <div align="center" class="header">
    <h1>Data Kategori</h1>
  </div>
       
  <div class="panel panel-default">                               
    <div class="panel-body" >
      <table cellpadding="0" cellspacing="0" border="0" class="table table-striped table-bordered" id="basic-datatable">
        <div class="panel-heading">
        <td align="center" class="tambah"><button type="submit" class="btn btn-primary"><a href="?modul=kategori&act=add" class="btn btn-primary">TAMBAHKAN DATA</a></button></div><BR></BR>
          <div class="panel-body" >
            <table  cellpadding="0" cellspacing="0" border="0" class="table table-striped table-bordered" id="basic-datatable">
              <thead>
                <tr >
                  <th>No.</th>
                  <th>ID Kategori</th>
                  <th>Nama Kategori</th>
                  <th>Aksi</th>
                </tr>
              </thead>
              <tbody>
              <?php 
                $no=1;
                $res=mysqli_query($conn,"SELECT * FROM kategori ORDER BY id_kategori ASC") or die(mysqli_error($conn));
                while($row=mysqli_fetch_array($res)){                                  
              ?>
                <tr class="odd gradeX">
                  <td align="center"><?php echo $no;?></td>
                  <td align="center"><?php echo $row['id_kategori'];?></td>
                  <td align="center"><?php echo $row['nama_kategori'];?></td>
                    <td align="center"><button type="submit" class="btn btn-primary"><a href="?act=edit&id=<?php echo $row['id_kategori'];?>"> 
                        <i title="Rubah" class="fa fa-edit">EDIT</i></a></button>  
                      <button type="button" class="btn btn-primary"><a href="hapus.php?id=<?php echo $row['id_kategori'];?>">
                        <i title="hapus" class="fa fa-trash">HAPUS</i></a></button></td>
                </tr>
                <?php $no++; } ?> <!-- Akhir While-->
              </tbody>
            </table>
        </div>
    </div>
<?php 

    break;
    case "add":

  $queryPeriksa = mysqli_query($conn,"SELECT * FROM kategori");
  $di=1;
  $tot = array();
  while($row = mysqli_fetch_row($queryPeriksa)) {
    $tot[$di]=str_replace('KTGR00','',$row[0]);
    $di++;
  }
  if(count($tot)==0){
    $akhir=1;
  }else{
    $akhir = max($tot);
    $akhir++;
  }
  $kode = "KTGR00".$akhir;

?>
<script language='javascript'>
function validAngka(a)
{
  if(!/^[0-9.]+$/.test(a.value))
  {
  a.value = a.value.substring(0,a.value.length-1000);
  }
}
function validHuruf(b)
{
  if(!/^[a-zA-Z ]+(([\'\,\.\-\ ][a-zA-Z ])?[a-zA-Z]*)*$/.test(b.value))
  {
  b.value = b.value.substring(0,b.value.length-1000);
  }
}
 //var namaValid    = /^[a-zA-Z]+(([\'\,\.\- ][a-zA-Z ])?[a-zA-Z]*)*$/;
function isNumberKey(evt)
      {
         var charCode = (evt.which) ? evt.which : event.keyCode
         if ((charCode < 65) || (charCode == 32))
            return false;        
         return true;
      }
</script>
        <div class="page-header"><h1>Data Kategori</h1></div>

            <div class="row">
            
              <div class="col-md-12">
                  <div class="panel panel-default">
                        <!-- <div class="panel-heading">Input Data Kategori</div> -->
                        <div class="panel-body">
                          
                            <form class="form-horizontal" role="form" action="simpan.php" method="POST">
                                  <div class="form-group">
                                    <p align="center"><b>Input Data Kategori</b></p>
                                    <label class="col-sm-2 control-label">ID Kategori</label>
                                    <div class="col-sm-7">
                                      <input type="text" class="form-control form-control-flat" readonly name="id_kategori" required value="<?php echo $kode;?>">
                                    </div>
                                  </div>
                                  <hr class="dotted">

                                  <div class="form-group">
                                    <label class="col-sm-2 control-label">Nama Kategori</label>
                                    <div class="col-sm-7">
                                      <input type="text" onkeyUp='validHuruf(this)'  title="Isikan Nama Kategori dengan Huruf" class="form-control form-control-flat" autofocus placeholder='Nama Kategori' maxlength="25" name="nama_kategori" value="" required>
                                    </div>
                                  </div>
                                  <hr class="dotted">
                                  <div class="form-group">
                                  <div class="col-sm-offset-2 col-sm-7">
                                    <button type="submit" class="btn btn-primary">Simpan</button>
                                    <button type="button" class="btn btn-danger" onclick=location.href='?modul=kategori'>Batal</button>
                                  </div>
                                  </div>

                            </form>

                        </div>
                    </div>
                 </div>
            
            </div>

            <?php
            break; 
    case "edit":
     $id=$_GET['id'];
     $q=mysqli_query($conn,"SELECT * FROM kategori WHERE id_kategori='$id'") or die(mysqli_error($conn));
     $row=mysqli_fetch_array($q);
?>
        <div class="page-header">
            <h1>Data Kategori</h1>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading">Ubah Data Kategori</div>
                    <div class="panel-body">
                        <form class="form-horizontal" role="form" action="update.php" method="POST">
                            <input type="hidden" name="id_kategori" value="<?php echo $row['id_kategori'];?>">
                            <div class="form-group">
                                <label class="col-sm-2 control-label">ID Kategori</label>
                                <div class="col-sm-7">
                                    <input type="text" class="form-control form-control-flat" name="id_kategori" value="<?php echo $row['id_kategori'];?>" disabled>
                                </div>
                            </div>
                            <hr class="dotted">
                            <div class="form-group">
                                <label class="col-sm-2 control-label">Nama Kategori</label>
                                <div class="col-sm-7">
                                    <input type="text" onkeyup="validAngka(this)" class="form-control form-control-flat" maxlength="17" name="nama_kategori" value="<?php echo $row['nama_kategori'];?>" required>
                                </div>
                            </div>
                            <hr class="dotted">
                            <div class="form-group">
                                <div class="col-sm-offset-2 col-sm-7">
                                    <button type="submit" class="btn btn-primary">Simpan</button>
                                    <button type="button" class="btn btn-danger" onclick=location.href='?modul=kasir'>Batal</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

    <?php
        break;
        case "Delete":
            $id=$_GET['id'];
            $q=mysqli_query($conn,"SELECT * FROM kategori where id_kategori='$id'")
            or die(mysql_error($conn));
            $r=mysqli_fetch_array($q);
    ?>
    <form name="form1" method="post" action="hapus.php">
        <p><h1>Form Hapus Data </h1></p>
        <p> Id Kategori:
            <input type="text" name="id_kategori" id="textfield" disable value="<?php echo $r['id_kategori']?>">
            <input type="hidden"name="id_kategori" value="<?php echo $r['id_kategori']?>">
        </p>
        <p>
            <input type="submit" name="btnsimpan" id="submit" value="Hapus">
        </p>
        </form>
    <?php
        break;
      }
    ?>
</body>
</html>

