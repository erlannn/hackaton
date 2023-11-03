<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>POSTINGAN KATEGORI</title>
  <!-- <link rel="stylesheet" type="text/css" href="../../css/1.css"> -->
  <link rel="stylesheet" href="../../assets/css/1.css">

</head>
<body style="background-color: lightblue;">

  
<?php 
	error_reporting(0);

include "../../config/koneksi.php";
// include "../config/ubah_tanggal.php";
switch($_GET['act']){
default:
?>
  <div class="page-header">
    <h1>Data Postingan Kategori</h1>
  </div>       
  <div class="panel panel-default">                               
    <div class="panel-body" >
      <table cellpadding="0" cellspacing="0" border="0" class="table table-striped table-bordered" id="basic-datatable">
        <div class="panel-heading">
              <td align="center" class="tambah"><a href="?modul=kategori&act=add" class="btn btn-primary">TAMBAH DATA</a></div>
          <div class="panel-body" >
            <table  cellpadding="0" cellspacing="0" border="0" class="table table-striped table-bordered" id="basic-datatable">
              <thead>
                <br>
                <tr >
                  <th>No.</th>
                  <th>ID Artikel</th>
                  <th>ID Kategori</th>
                  <th>Tanggal Postingan</th>
                  <th>Link</th>
                </tr>
              </thead>
              <tbody>
              <?php 
                $no=1;
                $res=mysqli_query($conn,"SELECT * FROM postingan_kategori ORDER BY id_artikel and id_kategori ASC") or die(mysqli_error($conn));
                while($row=mysqli_fetch_array($res)){                                  
              ?>
                <tr class="odd gradeX">
                  <td align="center"><?php echo $no;?></td>
                  <td align="center"><?php echo $row['id_artikel'];?></td>
                  <td align="center"><?php echo $row['id_kategori'];?></td>
                  <td align="center"><?php echo $row['tgl_posting'];?></td>
                  <td align="center"><?php echo $row['link'];?></td>
                    <td align="center"><a href="?act=edit&id=<?php echo $row['id_artikel'&'id_kategori'];?>"> 
                        <i title="Rubah" class="fa fa-edit">EDIT</i></a>  | |
                      <a href="hapus.php?id=<?php echo $row['id_artikel'&'id_kategori'];?>">
                        <i title="hapus" class="fa fa-trash">HAPUS</i></a> </td>
                </tr>
                <?php $no++; } ?> <!-- Akhir While-->
              </tbody>
            </table>
        </div>
    </div>
<?php 

    break;
    case "add":
        // $res=mysqli_query($conn,"SELECT * FROM artikel ORDER BY id_artikel ASC") or die(mysqli_error($conn));
        // while($row=mysqli_fetch_array($res)){  

?>
        <div class="page-header"><h1>Data Kategori</h1></div>

            <div class="row">
            
              <div class="col-md-12">
                  <div class="panel panel-default">
                        <!-- <div class="panel-heading">Input Data Kategori</div> -->
                        <div class="panel-body">
                          
                            <form class="form-horizontal" role="form" action="simpan.php" method="POST">
                              <div class="form-group custom-combobox">
                                    <label class="col-sm-2 control-label">ID Artikel</label>
                                    <div class="col-sm-7">
                                        <select class="form-control chosen-select" name="id_artikel" required data-placeholder="">
                                        <option></option>
                                        <?php 
                                        $qu=mysqli_query($conn,"SELECT * FROM artikel ORDER BY id_artikel ASC ") or die(mysqli_error($conn));
                                        while($ro=mysqli_fetch_array($qu)){ 
                                        ?>
                                        <option value="<?php echo $ro['id_artikel'];?>"><?php echo $ro['id_artikel'];?> </option>
                                        
                                        <?php } ?>
                                      </select>  
                                    </div>
                                  </div><br>
                                  <!-- <hr class="dotted"> -->
                                  <div class="form-group custom-combobox">
                                  <label class="col-sm-2 control-label">ID Kategori</label>
                                    <div class="col-sm-7">
                                        <select class="form-control chosen-select" name="id_kategori" required data-placeholder="">
                                        <option></option>
                                        <?php 
                                        $qu=mysqli_query($conn,"SELECT * FROM kategori ORDER BY id_kategori ASC ") or die(mysqli_error($conn));
                                        while($ro=mysqli_fetch_array($qu)){ 
                                        ?>
                                        <option value="<?php echo $ro['id_kategori'];?>"><?php echo $ro['id_kategori'];?> </option>
                                        
                                        <?php } ?>
                                      </select>  
                                    </div>
                                  <div class="form-group">
                                    <label class="col-sm-2 control-label">Tanggal Postingan</label>
                                    <div class="col-sm-7">
                                      <input type="date" name="tgl_posting">
                                      <!-- <input type="date" onkeyUp='validHuruf(this)'  title="Isikan Nama Kategori dengan Huruf" class="form-control form-control-flat" autofocus placeholder='Nama Kategori' maxlength="17" name="nama_kategori" value="" required> -->
                                    </div>
                                  </div>
                                  <div class="form-group">
                                    <label class="col-sm-2 control-label">Link</label>
                                    <div class="col-sm-7">
                                      <input type="text" onkeyUp='validHuruf(this)'  title="Isikan Nama Kategori dengan Huruf" class="form-control form-control-flat" autofocus placeholder='link' maxlength="17" name="link" value="" required>
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

    // break;
    // case "edit":

    // $id=$_GET['id'];

    // $q=mysqli_query($conn,"SELECT * FROM kategori WHERE id_kategori='$id'") or die(mysqli_error($conn));
    // $row=mysqli_fetch_array($q);

?>
<!-- 
        <div class="page-header"><h1>Data Kategori</h1></div>

            <div class="row">
            
              <div class="col-md-12">
                  <div class="panel panel-default">
                        <div class="panel-heading">Ubah Data Kategori</div>
                        <div class="panel-body">
                          
                            <form class="form-horizontal" role="form" action="modul/kategori/ubah.php" method="POST">
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
                                      <input type="text" onkeyup="validAngka(this)"  class="form-control form-control-flat" maxlength="17" name="nama_kategori"  value="<?php echo $row['nama_kategori'];?>" required>
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
            
            </div> -->
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