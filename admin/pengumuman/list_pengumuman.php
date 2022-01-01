  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>PENGUMUMAN</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Kelola Data</a></li>
              <li class="breadcrumb-item active">Data Pengumuman</li>
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
                <a href="index.php?page=tambah_pengumuman" class="btn btn-info" role="button" title="Tambah Data"><i class="fa fa-plus"></i> Tambah Pengumuman</a>
                <table id="admin" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <tr>
                    <th>No</th>
                    <th>Gambar</th>
                    <th>Judul</th>
                    <th>Isi Pengumuman</th>
                    <th>Aksi</th>
                  </tr>
                  </thead>
                  <tbody>
                    <?php
                $no=0;
                $query=mysqli_query($konek, "SELECT * FROM pengumuman ORDER BY id DESC");
                while ($row=mysqli_fetch_array($query))
                {
                ?>
                  <tr>
                  <td><?php echo $no=$no+1;?></td>
                  <td><img src="pengumuman/img/<?php echo $row['gambar'] ?>" alt="" width="80"></td>
                  <td><?php echo $row['judul'];?></td>
                  <td><?php echo $row['isi'];?></td>
                  <td>
                    <a href="index.php?page=edit_pengumuman&id=<?php echo $row['id'] ?>" class="btn btn-warning"><i class="fa fa-edit"></i>Edit</a>
                     |
                  <a href="index.php?page=hapus_pengumuman&id=<?php echo $row['id'] ?>"class="btn btn-danger"><i class="fa fa-trash"></i>Hapus</a>
                   </td>
                </tr>
                <?php } ?>
                  </tfoot>
                </table>

                <a href="" id="cetak" target="_blank" class="btn btn-primary" role="button" title="Cetak Data"  style="float: right; margin: 30px 30px 0 0;"><i class="fas fa-print"></i> Cetak</a>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
    </section>
  </div>
<!-- /.content-wrapper -->


<!-- AdminLTE App -->
<script src="../../dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="../../dist/js/demo.js"></script>
<!-- Page specific script -->
<script>
 cetak.addEventListener('click', function () {
    window.print();
  })
</script>
</body>
</html>
