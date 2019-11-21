<?php

	require 'function.php';
	
	$id = $_GET['id'];

	if (hapus_mapel($id)>0) {
		echo "
		<script>
			alert('Data berhasil dihapus');
			document.location.href='mapel.php';
		</script>
		";
	} else {
		echo "
		<script>
			alert('Data gagal dihapus');
			document.location.href='index.php';
		</script>
		<br>
		";
		echo mysqli_error($koneksi);
	}

?>