<?php
$data = mysqli_query($konek, "SELECT * FROM kategori WHERE id_kategori ='$_GET[id]'");
$user = mysqli_fetch_assoc($data);
?>

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Edit Data kategori</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Edit Data Kategori</li>
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

                <center><h2>Form Edit Kategori</h2></center>
<form action="" method="POST">
  <div class="form-group row">
    <label for="kategori" class="col-sm-2 col-form-label" >Kategori</label>
  <div class="col-sm-10">
    <input type="text" name="kategori" value="<?php echo $user['kategori'] ?>" class="form-control" id="kategori">
    </div>
  </div>

      

  <div class="form-group row">
    <label for="stok" class="col-sm-2 col-form-label"></label>
  <div class="col-sm-10">
      <button type="submit" name="update" class="btn btn-success">Simpan</button>
    </div>
  </div>
</section>
</form>
<?php
if (isset($_POST['update'])) {
  # code...
  $kategori= $_POST['kategori'];

  $update= mysqli_query($konek, "UPDATE kategori SET kategori='$kategori' WHERE id_kategori= '$_GET[id]'");
  if ($update) {
    # code...
    echo "<script>alert('Data Berhasil Disimpan'); window.location.href='index.php?page=kategori'</script>";
  }
}
?>




              </div>
            </div>
        </div>
      </section>
    </div>
</div>






