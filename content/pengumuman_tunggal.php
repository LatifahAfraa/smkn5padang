<?php
$q = mysqli_query($konek, "SELECT * FROM pengumuman WHERE id='".$_GET['id']."'");
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
              
            <img class="img-fluid w-200" src="admin/pengumuman/img/<?php echo $r['gambar'] ?>" alt="post-image"
            style="width:30em; height:20em">
          </div>
          <!-- Post Content -->
          <div class="post-content">
            <h3><?php echo $r['judul'];?></h3>
            <ul class="list-inline">
              <li class="list-inline-item">
                <a href="#">Admin</a>&nbsp;
              </li>
              <li class="list-inline-item">
                <a><?php echo $r['isi'];?></a>&nbsp;
              </li>
            </ul>
            <p><?php echo $r['isi'];?></p>
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
        <aside class="sidebar">
        <div class="widget-search widget">
            <form action="cari">
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
$query=mysqli_query($konek, "SELECT * FROM pengumuman WHERE id");
while ($row=mysqli_fetch_array($query))
                {
                ?>
            <ul class="widget-post-list">
              <li class="widget-post-list-item">
                <div class="widget-post-image">
                  <a href="pengumuman-">
                    <img src="admin/pengumuman/img/<?php echo $row['gambar'] ?>" alt="post-img">
                  </a>
                </div>
                <div class="widget-post-content">
                  <a href="pengumuman-">
                    <h5><?php echo $row['judul'];?></h5>
                  </a>
                  <h6><?php echo $row['isi'];?></h6>
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