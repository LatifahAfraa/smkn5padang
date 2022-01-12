<section class="single-page-header">
  <div class="container">
    <div class="row">
      <div class="col-md-12">

      </div>
    </div>
  </div>
</section>
<br>


<!-- blog details part start -->
<section class="blog-details section">
  <?php
  $query = mysqli_query($konek, "SELECT * FROM galeri WHERE id='" . $_GET['id'] . "'");
  while ($row = mysqli_fetch_array($query)) {
  ?>
    <div class="container">
      <center>
        <h3>Foto yang di lihat</h3>
      </center>
      <div class="border"></div>
      <div class="row">
        <div class="col-lg-9">
          <article class="post">
            <div class="post-image">
              <img class="img-fluid w-100" src="admin/galeri/img/<?php echo $row['foto'] ?>" alt="post-image">
            </div>
            <!-- Post Content -->
            <div class="post-content">
              <h3><?php echo $row['judul']; ?></h3>

              <!-- blockquote -->
              <!-- post share -->
              <ul class="post-content-share list-inline">
                <li class="list-inline-item">
                  <a href="#">
                    <i class="tf-ion-social-twitter"></i>
                  </a>
                </li>
                <li class="list-inline-item">
                  <a href="#">
                    <i class="tf-ion-social-linkedin"></i>
                  </a>
                </li>
                <li class="list-inline-item">
                  <a href="#">
                    <i class="tf-ion-social-facebook"></i>
                  </a>
                </li>
            </div>
          </article>
        </div>
        <div class="col-lg-4">
          <!-- sidebar -->
        </div>
      <?php } ?>
      </div>
    </div>
</section>