<?php
$data = mysqli_query($konek, "SELECT * FROM user WHERE id ='$_GET[id]'");
$user = mysqli_fetch_assoc($data);
?>

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Edit Data User</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Edit Data User</li>
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

                <center><h2>Form Edit User</h2></center>
<form action="" method="POST">
  <div class="form-group row">
    <label for="username" class="col-sm-2 col-form-label" >Username</label>
  <div class="col-sm-10">
    <input type="text" name="username" value="<?php echo $user['username'] ?>" class="form-control" id="username">
    </div>
  </div>

  <!-- <div class="form-group row">
    <label for="password" class="col-sm-2 col-form-label" >Password</label>
  <div class="col-sm-10">
    <input type="text" name="password" value="<?php echo $user['password'] ?>" class="form-control" id="password">* jangan di ganti jika tidak ingin mengubah password

    </div>
  </div> -->

  
    

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
  $username= $_POST['username'];
  // $password= password_hash($_POST['password'], PASSWORD_BCRYPT);

  $update= mysqli_query($konek, "UPDATE user SET username='$username' WHERE id= '$_GET[id]'");
  if ($update) {
    # code...
    echo "<script>alert('Data Berhasil Disimpan'); window.location.href='index.php?page=user'</script>";
  }
}
?>




              </div>
            </div>
        </div>
      </section>
    </div>
</div>






