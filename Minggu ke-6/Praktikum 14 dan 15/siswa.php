<?php
	require 'function.php';
?>
<!DOCTYPE html>
<html>
<head>
	<title>Siswa</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>
	<div class="container">
		<h2 class="text-center mb-5">Siswa Yang Sudah Mendaftar</h2>
		<a href="form_daftar.php" class="btn btn-primary">Tambah Data</a>
		<a href="index.php" class="btn btn-info">Home</a>
		<table class="table my-3">
			<thead class="thead-dark">
				<tr>
					<th>#</th>
					<th>Nama</th>
					<th>Alamat</th>
					<th>Jenis Kelamin</th>
					<th>Agama</th>
					<th>Sekolah</th>
					<th>Action</th>
				</tr>
			</thead>
			<tbody>
				<?php
					$siswa = query("select * from peserta");
					$i = 1;
					foreach ($siswa as $row):
				?>
				<tr>
					<td><?= $i ?></td>
					<td><?= $row['nama'] ?></td>
					<td><?= $row['alamat'] ?></td>
					<td><?= $row['jenis_kelamin'] ?></td>
					<td><?= $row['agama'] ?></td>
					<td><?= $row['sekolah'] ?></td>
					<td>
						<a href="edit.php?id=<?= $row['id']; ?>" class="btn btn-info">Edit</a>
						<a href="hapus.php?id=<?= $row['id']; ?>" onclick="return confirm('Apakah data ini akan dihapus ?')" class="btn btn-info">Hapus</a>
					</td>
				</tr>
				<?php $i++; endforeach; ?>
			</tbody>
		</table>
	</div>
</body>
</html>