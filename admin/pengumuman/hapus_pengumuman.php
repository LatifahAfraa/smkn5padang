<?php

$q=mysqli_query($konek, "DELETE  FROM pengumuman WHERE id ='$_GET[id]'");

if($q)
	echo "<script>alert('Data Berhasil Dihapus'); window.location.href='index.php?page=pengumuman'</script>";
?>a