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
	<h3>Galeri</h3>
</center>
<div class="border"></div>
<section class="posts section">
	<div class="container">
		<div class="row text-center">
<?php
				$query=mysqli_query($konek, "SELECT * FROM galeri ORDER BY id ASC");
                while ($row=mysqli_fetch_array($query)) 
                {
                ?>


			<!-- /section title -->
			<!-- single blog post -->
			<article class="col-md-4 col-sm-6 col-xs-12 ">
				<div class="post-item">
					<div class="media-wrapper">
						<img class="img-fluid rounded-circle" src="admin/galeri/img/<?php echo $row['foto'] ?>"
							alt="amazing caves coverimage" style="width:30em; height:15em">
					</div>

					<div class="content">
						<h3><?php echo $row['judul'];?></h3>
						<a class="btn btn-main" href="galeri-<?php echo $row['id'] ?>">Read more</a>
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