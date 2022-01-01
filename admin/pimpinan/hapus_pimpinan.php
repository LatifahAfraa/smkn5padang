<?php

$q=mysqli_query($konek, "DELETE  FROM pimpinan WHERE id ='$_GET[id]'");

if($q)
	echo "<script>alert('Data Berhasil Dihapus'); window.location.href='index.php?page=pimpinan'</script>";
?>a