<?php

	require 'function.php';

	$id = $_GET['id'];

	$row = query("select * from peserta where id='$id'")[0];

	if (isset($_POST['submit'])) {
		if (edit($_POST)>0) {
			echo "
					<script>
					alert('Data Berhasil Diperbarui');
					document.location.href='siswa.php';
					</script>
				";
		} else {
			echo "
					<script>
					alert('Data Gagal Diperbarui');
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
</head>
<body>
	<div class="container">
		<h1 class="text-center">Edit Siswa</h1>
		<form method="post">
			<input type="hidden" name="id" value="<?= $row['id'] ?>">
			<div class="form-group">
				<label>Nama Anda</label>
				<input type="text" name="nama" class="form-control" required="" value="<?= $row['nama']; ?>">
			</div>
			<div class="form-group">
				<label>Alamat Anda</label>
				<textarea name="alamat" class="form-control" required=""><?= $row['alamat']; ?></textarea>
			</div>
			<div class="form-group form-check form-check-inline">
				<label class="form-check-label pr-2">Jenis Kelamin : </label>
				<input type="radio" name="jk" value="Laki Laki" class="form-check-input" required="" <?php if($row['jenis_kelamin'] == 'Laki Laki') { echo 'checked'; }?> >
				<label class="form-check-label pr-2">Laki Laki</label>
				<input type="radio" name="jk" value="Perempuan" class="form-check-input" required="" <?php if($row['jenis_kelamin'] == 'Perempuan') { echo'checked'; }?> >
				<label class="form-check-label">Perempuan</label>
			</div>
			<div class="form-group">
				<label>Agama</label>
				<select class="form-control" name="agama">
					<option value="-">-</option>
					<option value="Islam" <?php if($row['agama'] == 'Islam') { echo 'selected'; }?>>Islam</option>
					<option value="Kristen" <?php if($row['agama'] == 'Kristen') { echo 'selected'; }?>>Kristen</option>
					<option value="Katolik" <?php if($row['agama'] == 'Katolik') { echo 'selected'; }?>>Katolik</option>
					<option value="Hindu" <?php if($row['agama'] == 'Hindu') { echo 'selected'; }?>>Hindu</option>
					<option value="Buddha" <?php if($row['agama'] == 'Buddha') { echo 'selected'; }?>>Buddha</option>
					<option value="Kong Hu Cu" <?php if($row['agama'] == 'Kong Hu Cu') { echo 'selected'; }?>>Kong Hu Cu</option>
				</select>
			</div>
			<div class="form-group">
				<label>Sekolah Asal</label>
				<input type="text" name="sekolah" class="form-control" required="" value="<?= $row['sekolah'] ?>">
			</div>
			<button type="submit" name="submit" class="btn btn-primary">Edit</button>
			<a href="index.php" class="btn btn-info">Home</a>
		</form>
	</div>
</body>
</html>