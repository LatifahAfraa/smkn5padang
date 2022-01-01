<section class="single-page-header">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
			</div>
		</div>
	</div>
</section>

<br><center><h3>Pimpinan</h3></center>
					<div class="border"></div>
<section class="about-shot-info section-sm">
	<div class="container">
		<div class="row">
			<div class="col-md-6 mt-20">
			
				<?php
				$query=mysqli_query($konek, "SELECT * FROM pimpinan ORDER BY id DESC");
                while ($row=mysqli_fetch_array($query))
                {
                ?>
                  
                  <h5><?php echo $row['nama'];?></h5>
				  
               	
			</div>
			<div class="col-md-6">
				<img class="img-fluid rounded-circle" src="admin/pimpinan/img/<?php echo $row['gambar'] ?>" alt="">
			</div>
			<?php } ?>
		</div>
	</div>
</section>



<section class="company-mission section-sm bg-gray">
	<div class="container">
		<div class="row">
			<div class="col-md-6">
			<center><h3>Misi</h3></center>
					<div class="border"></div>
				<?php
				$query=mysqli_query($konek, "SELECT * FROM visimisi ORDER BY id DESC");
                while ($row=mysqli_fetch_array($query))
                {
                ?>
                    
                  <?php echo $row['misi'];?></p>
                <?php } ?>
				<img src="images/company/company-image-2.jpg" alt="" class="img-fluid mt-30">
			</div>
			<div class="col-md-6">
			<center><h3>Visi</h3></center>
					<div class="border"></div>
				<?php
				$query=mysqli_query($konek, "SELECT * FROM visimisi ORDER BY id DESC");
                while ($row=mysqli_fetch_array($query))
                {
                ?>
                  
                  <p><?php echo $row['visi'];?></p>
                <?php } ?>
				
				<img src="images/company/company-image-3.jpg" alt="" class="img-fluid mt-30">
			</div>
		</div>
	</div>
</section>
