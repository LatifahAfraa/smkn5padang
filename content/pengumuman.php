<section class="single-page-header">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
			</div>
		</div>
	</div>
</section>

<br>
<center>
	<h3>Pengumuman</h3>
</center>
<div class="border"></div>
<section class="posts section">
	<div class="container">
		<div class="row mb-4"><?php 
				if(isset($_GET['cari'])){
					$cari = $_GET['cari'];
			?>
			<h6>Hasil Pencarian : <?= $cari ?></h6>
			<?php } ?>
		</div>

		<div class="row">
<?php
	if(isset($_GET['cari'])){
		$cari=$_GET['cari'];
		$query=mysqli_query($konek, "SELECT * FROM pengumuman WHERE judul like '%".$cari."%'");
	}else{
		$query=mysqli_query($konek, "SELECT * FROM pengumuman ORDER BY id ASC");
	}

                while ($row=mysqli_fetch_array($query)) 
                {
                ?>



			<!-- /section title -->
			<!-- single blog post -->
			<article class="col-md-4 col-sm-6 col-xs-12 ">
				<div class="post-item">
					<div class="media-wrapper">
						<img class="img-fluid" src="admin/pengumuman/img/<?php echo $row['gambar'] ?>"
							alt="amazing caves coverimage" style="width:30em; height:15em">
					</div>

					<div class="content">
						<h3><?php echo $row['judul'];?></h3>
						<p ><?php echo $row['isi'];?></p>
						<a class="btn btn-main" href="pengumuman-<?php echo $row['id'] ?>">Lihat Lebih lanjut</a>
					</div>
				</div>
			</article>
			<?php } ?>
		</div>
	</div>
</section>

</div>
</div>
</section>