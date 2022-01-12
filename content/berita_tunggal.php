<?php
$q = mysqli_query($konek, "SELECT * FROM berita LEFT JOIN kategori ON berita.kategori=kategori.id_kategori WHERE id='".$_GET['id']."'");
$r = mysqli_fetch_array($q);
?>
<section class="single-page-header">
  <div class="container">
    <div class="row">
      <div class="col-md-12">

      </div>
    </div>
  </div>
</section>

<!-- blog details part start -->
<section class="blog-details section">
  
  <div class="container">
    <div class="row">
      <div class="col-lg-8">
        <article class="post">
          <div class="post-image">
            <img class="img-fluid w-200" src="admin/berita/img/<?php echo $r['gambar'] ?>" alt="post-image"
              style="width:30em; height:20em">
          </div>
          <!-- Post Content -->
          <div class="post-content">
            <h3><?php echo $r['judul'];?></h3>
            <ul class="list-inline">
              <li class="list-inline-item">
                <a href="#">Admin</a>&nbsp;/
              </li>
              <li class="list-inline-item">
                <a><?php echo $r['tanggal'];?></a>&nbsp;
              </li>
            </ul>
            <p><?php echo $r['isi'];?></p>
            <!-- blockquote -->
            <blockquote data-aos="fade-left" data-aos-duration="1000">
              <h4>Kategori:</h4><br>
              <center><?php echo $r['kategori'];?></center>

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
        <aside class="sidebar">
        <div class="widget-search widget">
            <form action="search">
              <!-- Search bar -->
              <input class="form-control" type="text" placeholder="Search..." name="cari">
              <button type="submit" class="widget-search-btn">
                <i class="tf-ion-ios-search"></i>
              </button>
            </form>
          </div>

          <div class="widget-post widget">
            <h2>=========Latest Post=========</h2>
            <!-- latest post -->
            <?php
$query=mysqli_query($konek, "SELECT * FROM berita LEFT JOIN kategori ON berita.kategori=kategori.id_kategori ");
while ($row=mysqli_fetch_array($query))
                {
                ?>
            <ul class="widget-post-list">
              <li class="widget-post-list-item">
                <div class="widget-post-image">
                  <a href="berita-">
                    <img src="admin/berita/img/<?php echo $row['gambar'] ?>" alt="post-img"  style="width:10em; height:10em">
                  </a>
                </div>
                <div class="widget-post-content">
                  <a href="berita-">
                    <h5><?php echo $row['judul'];?></h5>
                  </a>
                  <h6><?php echo $row['tanggal'];?></h6>
                </div>
              </li>
            </ul>
            <?php } ?>
          </div>
        </aside>
      </div>
     
    </div>
  </div>
</section>