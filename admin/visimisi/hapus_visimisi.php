<?php

$q=mysqli_query($konek, "DELETE  FROM visimisi WHERE id ='$_GET[id]'");

if($q)
	echo "<script>alert('Data Berhasil Dihapus'); window.location.href='index.php?page=visimisi'</script>";
?>a