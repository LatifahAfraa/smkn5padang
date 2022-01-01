<!DOCTYPE html>
<?php 
include "koneksi/koneksi.php";
?>
<html>
<!--<![endif]-->

<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<meta name="description" content="Bingo One page parallax responsive HTML Template ">

	<meta name="author" content="Themefisher.com">
	
	<title>SMK NEGERI 5 PADANG</title>

	<!-- Mobile Specific Meta
  ================================================== -->
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<!-- Favicon -->
	<link rel="shortcut icon" type="image/x-icon" href="images/smk.png" />

	<!-- CSS
  ================================================== -->
	<!-- Themefisher Icon font -->
	<link rel="stylesheet" href="plugins/themefisher-font/style.css">
	<!-- bootstrap.min css -->
	<link rel="stylesheet" href="plugins/bootstrap/css/bootstrap.min.css">
	<!-- Lightbox.min css -->
	<link rel="stylesheet" href="plugins/lightbox2/dist/css/lightbox.min.css">
	<!-- animation css -->
	<link rel="stylesheet" href="plugins/animate/animate.css">
	<!-- Slick Carousel -->
	<link rel="stylesheet" href="plugins/slick/slick.css">
	<!-- Main Stylesheet -->
	<link rel="stylesheet" href="css/style.css">

</head>

<body id="body">

	<?php
include "components/header.php"?>

	<?php
	if(isset($_GET['page'])){
		if($_GET['page']=='tentang_kami'){
			include "content/tentang_kami.php";
		}elseif($_GET['page']=='berita'){
			include "content/berita.php";
		}elseif($_GET['page']=='berita_tunggal'){
			include "content/berita_tunggal.php";
		}elseif($_GET['page']=='pengumuman'){
			include "content/pengumuman.php";
		}elseif($_GET['page']=='pengumuman_tunggal'){
			include "content/pengumuman_tunggal.php";
		}elseif($_GET['page']=='galeri'){
			include "content/galeri.php";
		}elseif($_GET['page']=='galeri_tunggal'){
			include "content/galeri_tunggal.php";
		}elseif($_GET['page']=='logout'){
			include "logout.php";
		}
	}else{
		include "content/home.php";
	}
	?>
	
	<?php 
	include "components/footer.php"?>

	<!-- end Footer Area
    ========================================== -->



	<!-- 
    Essential Scripts
    =====================================-->
	<!-- Main jQuery -->
	<script src="plugins/jquery/jquery.min.js"></script>
	<!-- Google Map -->
	<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBu5nZKbeK-WHQ70oqOWo-_4VmwOwKP9YQ"></script>
	<script src="plugins/google-map/gmap.js"></script>

	<!-- Form Validation -->
	<script src="plugins/form-validation/jquery.form.js"></script>
	<script src="plugins/form-validation/jquery.validate.min.js"></script>

	<!-- Bootstrap4 -->
	<script src="plugins/bootstrap/js/bootstrap.min.js"></script>
	<!-- Parallax -->
	<script src="plugins/parallax/jquery.parallax-1.1.3.js"></script>
	<!-- lightbox -->
	<script src="plugins/lightbox2/dist/js/lightbox.min.js"></script>
	<!-- Owl Carousel -->
	<script src="plugins/slick/slick.min.js"></script>
	<!-- filter -->
	<script src="plugins/filterizr/jquery.filterizr.min.js"></script>
	<!-- Smooth Scroll js -->
	<script src="plugins/smooth-scroll/smooth-scroll.min.js"></script>

	<!-- Custom js -->
	<script src="js/script.js"></script>

</body>

</html>