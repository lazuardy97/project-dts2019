<?php

	require 'function.php';

	if (isset($_POST['submit'])) {
		if (tambah($_POST)>0) {
			echo "
					<script>
					alert('Data Berhasil Disimpan');
					document.location.href='index.php';
					</script>
				";
		} else {
			echo "
					<script>
					alert('Data Gagal Disimpan');
					document.location.href='form_daftar.php';
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
	<title>Form Pendaftaran</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>
	<div class="container">
		<h1 class="text-center">Formulir Pendaftaran Siswa</h1>
		<form method="post" action="form_daftar.php">
			<div class="form-group">
				<label>Nama Anda</label>
				<input type="text" name="nama" class="form-control" required="">
			</div>
			<div class="form-group">
				<label>Alamat Anda</label>
				<textarea name="alamat" class="form-control" required=""></textarea>
			</div>
			<div class="form-group form-check form-check-inline">
				<label class="form-check-label pr-2">Jenis Kelamin : </label>
				<input type="radio" name="jk" value="Laki Laki" class="form-check-input" required="">
				<label class="form-check-label pr-2">Laki Laki</label>
				<input type="radio" name="jk" value="Perempuan" class="form-check-input" required="">
				<label class="form-check-label">Perempuan</label>
			</div>
			<div class="form-group">
				<label>Agama</label>
				<select class="form-control" name="agama">
					<option value="-">-</option>
					<option value="Islam">Islam</option>
					<option value="Kristen">Kristen</option>
					<option value="Katolik">Katolik</option>
					<option value="Hindu">Hindu</option>
					<option value="Buddha">Buddha</option>
					<option value="Kong Hu Cu">Kong Hu Cu</option>
				</select>
			</div>
			<div class="form-group">
				<label>Sekolah Asal</label>
				<input type="text" name="sekolah" class="form-control" required="">
			</div>
			<button type="submit" name="submit" class="btn btn-primary">Tambah</button>
			<a href="index.php" class="btn btn-info">Home</a>
		</form>
	</div>
</body>
</html>