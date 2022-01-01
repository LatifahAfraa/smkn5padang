<?php
$query = mysqli_query($konek, "SELECT * FROM berita WHERE id='" . $_GET['id'] . "'");
$row = mysqli_fetch_array($query);
?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>EDIT DATA BERITA</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Kelola Data</a></li>
            <li class="breadcrumb-item active"> Edit Data Berita</li>
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
                      <input type="text" name="judul" class="form-control" placeholder="Judul" value="<?php echo $row['judul']; ?>" required>
                    </div>
                  </div>


                  <div class="form-group row">
                    <label for="tanggal" class="col-sm-2 col-form-label">Tanggal</label>
                    <div class="col-sm-10">
                      <input type="date" name="tanggal" class="form-control" value="<?php echo $row['tanggal']; ?>" required>
                    </div>
                  </div>

                  <div class="form-group row">
                  <label for="isi" class="col-sm-2 col-form-label" >isi</label>
                  <div class="col-sm-10">
                  <textarea class="ckeditor" id="ckeditor" name="isi" required><?php echo $row['isi']; ?></textarea>
                </div>
                  </div>

                  <div class="form-group row">
                    <label for="kategori" class="col-sm-2 col-form-label">Kategori</label>
                    <div class="col-sm-10">
                      <select name="kategori" id="kategori" class="form-control">
                        <option value="">===Pilih Kategori===</option>
                        <?php
                        $data = mysqli_query($konek, "SELECT * FROM kategori");
                        while ($r = mysqli_fetch_assoc($data)) {
                          # code...
                        ?>
                          <option value="<?php echo $r['id_kategori'] ?>"><?= $r['kategori'] ?></option>
                        <?php
                        }
                        ?>
                      </select>

                    </div>
                  </div>

                  <script>
                    document.getElementsByName('kategori')[0].value = "<?php echo $row['kategori'] ?>" //name kiri, kanan table db
                  </script>



                  <div class="form-group row">
                  <label class="col-sm-2 col-form-label">Gambar</label>
                    <div class="col-sm-10">
                    <img src="berita/img/<?php echo $row['gambar'] ?>" width="180"></br><br>
                    <input type="hidden" name="nmgmb" value="<?php echo $row['gambar']; ?>">

                    <input type="checkbox" name="ubah_gambar" value="true"> Ceklis jika ingin mengubah foto<br><br>
                    <input type="file" name="gambar">
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
                $judul = $_POST['judul'];
                $tanggal = $_POST['tanggal'];
                $kategori = $_POST['kategori'];
                $isi =$_POST['isi'];

                $hapus = mysqli_query($konek, "SELECT * FROM berita WHERE id=$id");
                // memilih gambar untuk dihapus
                $nama_gambar = mysqli_fetch_array($hapus);
                // nama field gambar
                $lokasi = $nama_gambar['gambar'];
                // alamat tempat gambar

                $rand = rand();
                $ekstensi =  array('png', 'jpg', 'jpeg', 'gif');
                $filename = $_FILES['gambar']['name'];
                $ukuran = $_FILES['gambar']['size'];
                $ext = pathinfo($filename, PATHINFO_EXTENSION);

                if ($filename != '') {
                  if ($ukuran < 1044070) {
                    $gambar = $rand . '_' . $filename;
                    move_uploaded_file($_FILES['gambar']['tmp_name'], 'berita/img/' . $rand . '_' . $filename);

                    mysqli_query($konek, "UPDATE berita SET judul='$judul',gambar='$gambar', tanggal='$tanggal', kategori='$kategori', isi='$isi' WHERE id='$id'");
                    echo '<script>alert("Data Berhasil Diubah !!!");
			window.location.href="index.php?page=berita"</script>';
                  } else {
                    echo '<script>alert("Data GAGAL Ditambahkan !!!");';
                  }
                } else {
                  $gambar = $_POST['nmgmb'];

                  $query2 = mysqli_query($konek, "UPDATE berita SET judul='$judul',gambar='$gambar',tanggal='$tanggal', kategori='$kategori', isi='$isi' WHERE id='$id'");

                  if ($query2) {
                    echo '<script>alert("Data Berhasil Diubah !!!");
				window.location.href="index.php?page=berita"</script>';
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