<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>artikel</title>
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

    .page-header {
      background-color: rgba(0, 0, 0, 0.5); /* Warna latar belakang header dengan efek transparan */
      padding: 20px;
      text-align: center;
      color: #fff; /* Warna teks pada header */
    }


    .background img {
      display: block;
      margin: 0 auto;
      width: 100px;
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
  <div align="center" class="header" >
    <h1>Data Artikel</h1>
  </div>       
  <div class="panel panel-default">                               
    <div class="panel-body" >
      <table cellpadding="0" cellspacing="0" border="0" class="table table-striped table-bordered" id="basic-datatable">
        <div class="panel-heading">
              <td align="center" class="tambah"><button type="submit" class="btn btn-primary"><a href="?modul=kategori&act=add" class="btn btn-primary" >TAMBAHKAN DATA</a></button></div>
          <div class="panel-body" >
            <table  cellpadding="0" cellspacing="0" border="0" class="table table-striped table-bordered" id="basic-datatable">
              <thead>
                <br>
                <tr >
                  <th>No.</th>
                  <th>ID Artikel</th>
                  <th>Judul Artikel</th>
                  <th>Status</th>
                  <th>Isi Artikel</th>
                  <th>Aksi</th>
                </tr>
              </thead>
              <tbody>
              <?php 
                $no=1;
                $res=mysqli_query($conn,"SELECT * FROM artikel ORDER BY id_artikel ASC") or die(mysqli_error($conn));
                while($row=mysqli_fetch_array($res)){                                  
              ?>
                <tr class="odd gradeX">
                  <td align="center"><?php echo $no;?></td>
                  <td align="center"><?php echo $row['id_artikel'];?></td>
                  <td align="center"><?php echo $row['judul_artikel'];?></td>
                  <td align="center"><?php echo $row['status'];?></td>
                  <td align="center"><?php echo $row['isi_artikel'];?></td>
                    <td align="center"><button type="submit" class="btn btn-primary"><a href="?act=edit&id=<?php echo $row['id_artikel'];?>"> 
                        <i title="Rubah" class="fa fa-edit">EDIT</i></a></button>  
                      <button type="button" class="btn btn-primary"><a href="hapus.php?id=<?php echo $row['id_artikel'];?>">
                        <i title="hapus" class="fa fa-trash" style="">HAPUS</i></a></button></td>
                </tr>
                <?php $no++; } ?> <!-- Akhir While-->
              </tbody>
            </table>
        </div>
    </div>
<?php 

    break;
    case "add":

  $queryPeriksa = mysqli_query($conn,"SELECT * FROM artikel");
  $di=1;
  $tot = array();
  while($row = mysqli_fetch_row($queryPeriksa)) {
    $tot[$di]=str_replace('ARTKL00','',$row[0]);
    $di++;
  }
  if(count($tot)==0){
    $akhir=1;
  }else{
    $akhir = max($tot);
    $akhir++;
  }
  $kode = "ARTKL00".$akhir;

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
        <div class="page-header"><h1>Data Artikel</h1></div>

            <div class="row">
            
              <div class="col-md-12">
                  <div class="panel panel-default">
                        <!-- <div class="panel-heading">Input Data Kategori</div> -->
                        <div class="panel-body">
                          
                            <form class="form-horizontal" role="form" action="simpan.php" method="POST">
                                  <div class="form-group">
                                    <p align="center"><b>Input Data Artikel</b></p>
                                    <label class="col-sm-2 control-label">ID Artikel</label>
                                    <div class="col-sm-7">
                                      <input type="text" class="form-control form-control-flat" readonly name="id_artikel" required value="<?php echo $kode;?>">
                                    </div>
                                  </div>
                                  <hr class="dotted">

                                  <div class="form-group">
                                    <label class="col-sm-2 control-label">Judul Artikel</label>
                                    <div class="col-sm-7">
                                      <input type="text" onkeyUp='validHuruf(this)'  title="Isikan judul artikel anda" class="form-control form-control-flat" autofocus placeholder='Judul Artikel' maxlength="50" name="judul_artikel" value="" required>
                                    </div>
                                  </div>
                                  <div class="form-group custom-combobox">
                                    <label class="col-sm-2 control-label">Status</label>
                                    <div class="col-sm-7">
                                        <select class="form-control chosen-select" name="status" required data-placeholder="Pilih Status">
                                        
                                        <option></option>
                                        <option value="Publish">Publish </option>
                                        <option value="Tidak_publish">Tidak Publish </option>
                                      

                                      </select>   
                                    </div>
                                  </div>
                                  <div class="form-group">
                                    <label class="col-sm-2 control-label">isi Artikel</label>
                                    <div class="col-sm-7">
                                    <textarea class="form-control" name="isi_artikel" required rows="5" placeholder="Isikan rangkuman dari artikel anda"><?php echo $row['isi_artikel']; ?></textarea>
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
    </div>
            <?php 
    // switch($_GET['act']){
    // default:
    // ?>

<?php 
     break;
    case "edit":

    $id = $_GET['id'];

    $q = mysqli_query($conn, "SELECT * FROM artikel WHERE id_artikel='$id'") or die(mysqli_error($conn));
    $row = mysqli_fetch_array($q);
?>
    
<div class="page-header">
    <h1>Data Artikel</h1>
</div>

<div class="row">
    <div class="col-md-12">
        <div class="panel panel-default">
            <div class="panel-heading">Ubah Data Artikel</div>
            <div class="panel-body">
                <form class="form-horizontal" role="form" action="update.php" method="POST">
                    <input type="hidden" name="id_artikel" value="<?php echo $row['id_artikel']; ?>">
                    <div class="form-group">
                        <label class="col-sm-2 control-label">ID Artikel</label>
                        <div class="col-sm-7">
                            <input type="text" class="form-control form-control-flat" name="id_artikel" value="<?php echo $row['id_artikel']; ?>" >
                        </div>
                    </div>
                    <hr class="dotted">
                    <div class="form-group">
                        <label class="col-sm-2 control-label">Judul Artikel</label>
                        <div class="col-sm-7">
                            <input type="text" onkeyup="validAngka(this)" class="form-control form-control-flat" maxlength="20" name="judul_artikel" value="<?php echo $row['judul_artikel']; ?>" required>
                        </div>
                    </div>
                    <hr class="dotted">
                    <div class="form-group custom-combobox">
                    <label class="col-sm-2 control-label">Status</label>
                    <div class="col-sm-7">
                        <select class="form-control chosen-select" name="status" required data-placeholder="Pilih Status">
                            <option value="">Pilih Status</option>
                            <option value="Publish" <?php if ($row['status'] === 'Publish') echo 'selected'; ?>>Publish</option>
                            <option value="Tidak_publish" <?php if ($row['status'] === 'Tidak_publish') echo 'selected'; ?>>Tidak Publish</option>
                        </select>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-2 control-label">Isi Artikel</label>
                    <div class="col-sm-7">
                        <textarea class="form-control" name="isi_artikel" required rows="5" placeholder="Isikan rangkuman dari artikel anda"><?php echo $row['isi_artikel']; ?></textarea>
                    </div>
                </div>

                    <hr class="dotted">
                    <div class="form-group">
                        <div class="col-sm-offset-2 col-sm-7">
                            <button type="submit" class="btn btn-primary">Simpan</button>
                            <button type="button" class="btn btn-danger" onclick="location.href='?modul=kasir'">Batal</button>
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
            $q=mysqli_query($conn,"SELECT * FROM artikel where id_artikel='$id'")
            or die(mysql_error($conn));
            $r=mysqli_fetch_array($q);
    ?>
    <form name="form1" method="post" action="hapus.php">
        <p><h1>Form Hapus Data </h1></p>
        <p> Id Kategori:
            <input type="text" name="id_artikel" id="textfield" disable value="<?php echo $r['id_artikel']?>">
            <input type="hidden"name="id_artikel" value="<?php echo $r['id_artikel']?>">
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