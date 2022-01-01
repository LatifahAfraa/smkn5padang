
<div class="hero-slider">
		<div class="slider-item th-fullpage hero-area"
			style="background-image: url('sklh.jpg');">
			<div class="container">
				<div class="row">
					<div class="col-md-12 text-center">
						<h1 data-duration-in=".3" data-animation-in="fadeInUp" data-delay-in=".1">SMK NEGERI 5 PADANG
							<br></h1>
						<p data-duration-in=".3" data-animation-in="fadeInUp" data-delay-in=".5">Terdapat 8 Program
							keahlian seperti: <br>1. Bisnis Konstruksi dan Properti<br>
							2. Desain Pemodelan dan Informasi Bangunan<br>
							3. Teknik Instalasi Tenaga Listrik<br>
							4. Teknik Pemesinan<br>
							5. Teknik Kendaraan Ringan Otomotif<br>
							6. Teknik dan Bisnis Sepeda Motor<br>
							7. Teknik Audio Video<br>
							8. Teknik Komputer dan Jaringan</p>
						<a data-duration-in=".3" data-animation-in="fadeInUp" data-delay-in=".8" class="btn btn-main"
							href="tentang-kami">Explore Us</a>
					</div>
				</div>
			</div> 
		</div>
		<div class="slider-item th-fullpage hero-area"
			style="background-image: url('smkn.jpg');">
			<div class="container">
				<div class="row">
					<div class="col-md-12 text-center">
						<h1 data-duration-in=".5" data-animation-in="fadeInDown" data-delay-in=".1">SMK NEGERI 5 PADANG
							<br></h1>
						<p data-duration-in=".3" data-animation-in="fadeInDown" data-delay-in=".5">SMK Negeri 5 Padang
							adalah sekolah menengah kejuruan negeri yang terletak di Jalan Beringin Nomor 4, Kelurahan
							Lolong Belanti, Kecamatan Padang Utara, Kota Padang
							<br></p>
						<a data-duration-in=".3" data-animation-in="fadeInDown" data-delay-in=".8" class="btn btn-main"
							href="tentang-kami">Explore Us</a>
					</div>
				</div>
			</div>
		</div>
	</div>




	<!--
Start About Section
==================================== -->
	
	<!--
Start About Section
==================================== -->
	<section class="about-2 section" id="about">
		<div class="container">
			<div class="row">

				<!-- section title -->
				<div class="col-12">
					<div class="title text-center">
						<h2>VISI MISI</h2>
						<div class="border"></div>
					</div>
				</div>
				<!-- /section title -->

				<div class="col-md-6">
					<img src="images/about/about-2.png" class="img-fluid" alt="">
				</div>
				<div class="col-md-6">
				<center><h3>Visi</h3></center>
					<div class="border"></div>
					
					<?php
				$query=mysqli_query($konek, "SELECT * FROM visimisi ORDER BY id DESC");
                while ($row=mysqli_fetch_array($query))
                {
                ?>
					<?php echo $row['visi'];?>
						
					
					<center><h3>Misi</h3></center>
					<div class="border"></div>
					<ul class="checklist">
						<li><?php echo $row['misi'];?><li>
					</ul>
					<?php } ?>
				</div>
			</div> <!-- End row -->
		</div> <!-- End container -->
	</section> <!-- End section -->

	<!--
Start Call To Action
==================================== -->
	<section class="call-to-action section">
		<div class="container">
			<div class="row">
				<div class="col-md-12 text-center">
					<h2>BERITA</h2>
					<i class="fas fa-newspaper>"><p>Berita terbaru</p></i>
					<a href="berita" class="btn btn-main">Lihat lebih lanjut</a>
				</div>
			</div> <!-- End row -->
		</div> <!-- End container -->
	</section> <!-- End section -->

	<!--
		Start Counter Section
		==================================== -->

	
	<section class="blog" id="blog">
		<div class="container">
			<div class="row">

				<!-- section title -->
				<div class="col-12">
					<div class="title text-center ">
						<h2> GALERI </h2>
						<div class="border"></div>
					</div>
				</div>
				<?php
				$query=mysqli_query($konek, "SELECT * FROM galeri ORDER BY id DESC");
                while ($row=mysqli_fetch_array($query))
                {
                ?>
				<!-- /section title -->
				<!-- single blog post -->
				<article class="col-md-4 col-sm-6 col-xs-12 clearfix ">
					<div class="post-item">
						<div class="media-wrapper">
							<center><img class="img-fluid rounded-circle" src="admin/galeri/img/<?php echo $row['foto'] ?>"
							alt="amazing caves coverimage" style="width:10em; height:10em"></center>
						</div>

						<div class="content">
							<h3><a><?php echo $row['judul'];?></a></h3>
						</div>
						
					</div>
					
				</article>
				<?php } ?>
				<!-- /single blog post -->
				<!-- end single blog post -->
			</div> <!-- end row -->
			
			<center><a class="btn btn-main " href="galeri">Lihat</a></center>
		</div> <!-- end container -->
	</section> <!-- end section -->
