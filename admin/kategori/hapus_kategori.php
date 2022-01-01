<?php

$q=mysqli_query($konek, "DELETE  FROM kategori WHERE id_kategori ='$_GET[id_kategori]'");
if($q)
	echo "<script>alert('Data Berhasil Dihapus'); window.location.href='index.php?page=kategori'</script>";
?>