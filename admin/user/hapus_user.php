<?php

$q=mysqli_query($konek, "DELETE  FROM user WHERE id ='$_GET[id]'");
if($q)
	echo "<script>alert('Data Berhasil Dihapus'); window.location.href='index.php?page=user'</script>";
?>