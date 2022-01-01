<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Tambah Visi Misi</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Tambah Data Visi Misi</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>
    
    <!-- Main content -->

    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-12">
            <div class="card">
              <div class="card-body">

                <center><h2>Form Tambah Visi Misi</h2></center>
<form action="" method="POST" enctype="multipart/form-data">
  

  <div class="form-group row">
    <label for="isi" class="col-sm-2 col-form-label" >Visi</label>
  <div class="col-sm-10">
      <textarea class="ckeditor" id="visi" name="visi" required></textarea>
    </div>
  </div> 
  
  <div class="form-group row">
    <label for="isi" class="col-sm-2 col-form-label" >Misi</label>
  <div class="col-sm-10">
      <textarea class="ckeditor" id="misi" name="misi" required></textarea>
    </div>
  </div> 

  <div class="form-group row">
    <label for="stok" class="col-sm-2 col-form-label"></label>
  <div class="col-sm-10">
      <button type="submit" name="simpan" class="btn btn-success">Simpan</button>
    </div>
  </div>
</section>
</form>

    <?php
    if (isset($_POST['simpan'])) {
      # code...
      $visi= $_POST['visi'];
      $misi= $_POST['misi'];
    
      $simpan= mysqli_query($konek, "INSERT INTO visimisi (visi, misi) VALUES ('$visi','$misi')");
      if ($simpan) {
        # code...
        echo "<script>alert('Data Berhasil Disimpan'); window.location.href='index.php?page=visimisi'</script>";
      }
    }
    ?>



              </div>
            </div>
        </div>
      </section>
    </div>
</div>






