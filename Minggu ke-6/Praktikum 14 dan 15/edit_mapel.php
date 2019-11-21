<?php

	require 'function.php';

	$id = $_GET['id'];

	$row = query("select * from mapel where id_mapel='$id'")[0];

	if (isset($_POST['submit'])) {
		if (edit_mapel($_POST)>0) {
			echo "
					<script>
					alert('Data Berhasil Dirubah');
					document.location.href='mapel.php';
					</script>
				";
		} else {
			echo "
					<script>
					alert('Data Gagal Dirubah');
					document.location.href='index.php';
					</script>
					<br>
				";
			echo mysqli_error($koneksi);
		}
	}

?>

<!DOCTYPE html>
<html>
<head>
	<title>Form Edit</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</head>
<body>
	<div class="container">
		<h1 class="text-center">Edit Guru</h1>
		<form method="post">
			<input type="hidden" name="id_mapel" value="<?= $row['id_mapel'] ?>">
			<div class="form-group">
				<label>Mapel</label>
				<input type="text" name="mapel" class="form-control" required="" value="<?= $row['mapel'] ?>">
			</div>
			<button type="submit" name="submit" class="btn btn-primary">Edit</button>
			<a href="index.php" class="btn btn-info">Home</a>
		</form>
	</div>
</body>
</html>