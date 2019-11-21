<?php

	require 'function.php';

	$id = $_GET['id'];

	$row = query("select * from guru where id_guru='$id'")[0];

	if (isset($_POST['submit'])) {
		if (edit_guru($_POST)>0) {
			echo "
					<script>
					alert('Data Berhasil Dirubah');
					document.location.href='guru.php';
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
			<input type="hidden" name="id_guru" value="<?= $row['id_guru'] ?>">
			<div class="form-group">
				<label>Nama Anda</label>
				<input type="text" name="nama" class="form-control" required="" value="<?= $row['nama'] ?>">
			</div>
			<div class="form-group">
				<label>Alamat Anda</label>
				<textarea name="alamat" class="form-control" required=""><?= $row['alamat'] ?></textarea>
			</div>
			<div class="form-group">
				<label>Nomor Telephone</label>
				<input type="number" name="no_telp" class="form-control" required="" value="<?= $row['no_telp'] ?>">
			</div>
			<div class="form-group">
				<label>Tanggal Lahir</label>
				<input type="date" name="tl" class="form-control" required="" value="<?= $row['tl'] ?>">
			</div>
			<button type="submit" name="submit" class="btn btn-primary">Edit</button>
			<a href="index.php" class="btn btn-info">Home</a>
		</form>
	</div>
</body>
</html>