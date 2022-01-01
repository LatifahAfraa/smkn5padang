<?php
$query = mysqli_query($konek, "SELECT * FROM galeri WHERE id='" . $_GET['id'] . "'");
$row = mysqli_fetch_array($query);
?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>EDIT DATA GALERI</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Kelola Data</a></li>
            <li class="breadcrumb-item active"> Edit Data Galeri</li>
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
                    <label for="judul" class="col-sm-2 col-form-label">Judul</label>
                    <div class="col-sm-10">
                      <input type="text" name="judul" value="<?php echo $row['judul'] ?>" class="form-control" id="judul">
                    </div>
                  </div>


                  <div class="form-group row">
                    <label for="foto" class="col-sm-2 col-form-label">Foto</label>
                    <div class="col-sm-10">
                      <img src="galeri/img/<?php echo $row['foto'] ?>" width="180"></br><br>
                      <input type="hidden" name="nmgmb" value="<?php echo $row['foto']; ?>">

                      <input type="checkbox" name="ubah_gambar" value="true"> Ceklis jika ingin mengubah foto<br><br>
                      <input type="file" name="foto">
                    </div>
                  </div>
                  <!-- /.box-body -->
                  <div class="box-footer">
                    <button type="submit" class="btn btn-primary" title="Simpan Data" name="ubah"> <i class="glyphicon glyphicon-floppy-disk"></i> Simpan</button>
                  </div>
              </form>
              <?php
              if (isset($_POST['ubah'])) {

                $id = $_POST['id'];
                $judul =$_POST['judul'];


                $rand = rand();
                $ekstensi =  array('png', 'jpg', 'jpeg', 'gif');
                $filename = $_FILES['foto']['name'];
                $ukuran = $_FILES['foto']['size'];
                $ext = pathinfo($filename, PATHINFO_EXTENSION);

                if ($filename != '') {
                  if ($ukuran < 1044070) {
                    
                    $hapus = mysqli_query($konek, "SELECT * FROM galeri WHERE id=$id");
                    // memilih gambar untuk dihapus
                    $nama_gambar = mysqli_fetch_array($hapus);
                    // nama field gambar
                    $lokasi = $nama_gambar['foto'];
                    // alamat tempat gambar
                    $hapus_gambar = "galeri/img/$lokasi";
                    // script delete gambar dari folder
                    unlink($hapus_gambar); 

                    $foto = $rand . '_' . $filename;
                    move_uploaded_file($_FILES['foto']['tmp_name'], 'galeri/img/' . $rand . '_' . $filename);

                    mysqli_query($konek, "UPDATE galeri SET foto='$foto' WHERE id='$id'");
                    echo '<script>alert("Data Berhasil Diubah !!!");
			              window.location.href="index.php?page=galeri"</script>';
                  } else {
                    echo '<script>alert("Data GAGAL Ditambahkan !!!");';
                  }
                } else {
                  $foto = $_POST['nmgmb'];

                  $query2 = mysqli_query($konek, "UPDATE galeri SET judul='$judul' WHERE id='$id'");

                  if ($query2) {
                    echo '<script>alert("Data Berhasil Diubah !!!");
				window.location.href="index.php?page=galeri"</script>';
                  } else {
                    echo '<script>alert("Data GAGAL Ditambahkan !!!");';
                  }
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