<section class="single-page-header">
	<div class="container">
		<div class="row">
			<div class="col-mt-12 mb-12">
			</div>
		</div>
	</div>
</section>

<br>
<center>
	<h3>Berita</h3>
</center>
<div class="border"></div>
<section class="posts section">
	<div class="container">
		<div class="row mb-4">
			<?php 
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
		$query=mysqli_query($konek, "SELECT * FROM berita WHERE judul like '%".$cari."%'");
	}else{
		$query=mysqli_query($konek, "SELECT * FROM berita ORDER BY id ASC");
	}

                while ($row=mysqli_fetch_array($query)) 
                {
                ?>


			<!-- /section title -->
			<!-- single blog post -->
			<article class="col-md-4 col-sm-6 col-xs-12 ">
				<div class="post-item">
					<div class="media-wrapper">
						<img class="img-fluid" src="admin/berita/img/<?php echo $row['gambar'] ?>"
							alt="amazing caves coverimage" style="width:30em; height:15em">
					</div>

					<div class="content">
						<h3><b>
								<p><?php echo $row['judul'];?></p>
							</b></h3>
						<p ><?php echo substr($row['isi'], 0,100);?></p>
						<a class="btn btn-main" href="berita-<?php echo $row['id'] ?>">Read more</a>
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