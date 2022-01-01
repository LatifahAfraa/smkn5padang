
<?php
$query = mysqli_query($konek, "SELECT * FROM visimisi WHERE id='".$_GET['id']."'");
$row = mysqli_fetch_array($query);
?>

<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>EDIT DATA VISI MISI</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Kelola Data</a></li>
              <li class="breadcrumb-item active"> Edit Data Visi Misi</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>
    
    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="card">
              <!-- /.card-header -->
              <div class="card-body">
            <form role="form" method="post" action="" enctype='multipart/form-data'>
              <div class="box-body">
                <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
                

            <div class="form-group row">
                  <label for="visi" class="col-sm-2 col-form-label" >Visi</label>
                <div class="col-sm-10">
                  <textarea class="ckeditor" id="visi" name="visi" required><?php echo $row['visi']; ?></textarea>
                </div>
            </div>

            <div class="form-group row">
                  <label for="misi" class="col-sm-2 col-form-label" >Misi</label>
                <div class="col-sm-10">
                  <textarea class="ckeditor" id="misi" name="misi" required><?php echo $row['misi']; ?></textarea>
                </div>
            </div>

                
              <!-- /.box-body -->
              <div class="box-footer">
                <button type="submit" class="btn btn-primary" title="Simpan Data" name="ubah"> <i class="glyphicon glyphicon-floppy-disk"></i> Simpan</button>
              </div>
            </form>
            <?php
if (isset($_POST['ubah'])) {
  # code...
  $visi= $_POST['visi'];
  $misi= $_POST['misi'];

  $ubah= mysqli_query($konek, "UPDATE visimisi SET visi='$visi',misi='$misi' WHERE id= '$_GET[id]'");
  if ($ubah) {
    # code...
    echo "<script>alert('Data Berhasil Disimpan'); window.location.href='index.php?page=visimisi'</script>";
  }
}
?>

 

          </div>
          <!-- /.box -->
        </div>
      </div>
    </section>
    <!-- /.content -->
  </div>
<!-- /.content-wrapper -->
