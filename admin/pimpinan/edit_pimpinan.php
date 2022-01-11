
<?php
$query = mysqli_query($konek, "SELECT * FROM pimpinan WHERE id='".$_GET['id']."'");
$row = mysqli_fetch_array($query);
?>

<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>EDIT DATA PIMPINAN</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Kelola Data</a></li>
              <li class="breadcrumb-item active"> Edit Data Pimpinan</li>
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
                  <label for="nama" class="col-sm-2 col-form-label" >Nama</label>
                  <div class="col-sm-10">
                  <input type="text" name="nama" class="form-control" placeholder="nama" value="<?php echo $row['nama']; ?>" required>
                  </div>
                </div>            
                

                
                <div class="form-group row">
                <label class="col-sm-2 col-form-label" >Foto</label>
                  <div class="col-sm-10">
                  <img src="pimpinan/img/<?php echo $row['gambar']  ?>" width="180"></br><br>
                  <input type="hidden" name="nmgmb" value="<?php echo $row['gambar']; ?>">

                  <input type="checkbox" name="ubah_gambar" value="true"> Ceklis jika ingin mengubah foto<br><br>
                  <input type="file" name="gambar" >
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
			$nama = $_POST['nama'];

	$hapus = mysqli_query($konek, "SELECT * FROM pimpinan WHERE id=$id");
	// memilih gambar untuk dihapus
	$nama_foto=mysqli_fetch_array($hapus);
	// nama field gambar
	$lokasi=$nama_foto['gambar'];
	// alamat tempat gambar
	

	$rand = rand();
	$ekstensi =  array('png','jpg','jpeg','gif');
	$filename = $_FILES['gambar']['name'];
	$ukuran = $_FILES['gambar']['size'];
	$ext = pathinfo($filename, PATHINFO_EXTENSION);

	if($filename != ''){
		if($ukuran < 1044070){		
			$gambar = $rand.'_'.$filename;
			move_uploaded_file($_FILES['gambar']['tmp_name'], 'pimpinan/img/'.$rand.'_'.$filename);

			mysqli_query($konek, "UPDATE pimpinan SET nama='$nama', gambar='$gambar' WHERE id='$id'");
			echo '<script>alert("Data Berhasil Diubah !!!");
			window.location.href="index.php?page=pimpinan"</script>';
		}else{
			echo '<script>alert("Data GAGAL Ditambahkan !!!");';
		}

	}else{
		$foto = $_POST['nmgmb'];

			$query2 = mysqli_query($konek, "UPDATE pimpinan SET nama='$nama', gambar='$foto' WHERE id='$id'");
			
			if($query2){
				echo '<script>alert("Data Berhasil Diubah !!!");
				window.location.href="index.php?page=pimpinan"</script>';
			}else{
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
