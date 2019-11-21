<?php
	require 'function.php';
?>
<!DOCTYPE html>
<html>
<head>
	<title>Guru</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>
	<div class="container">
		<h2 class="text-center mb-5">Guru Yang Sudah Mendaftar</h2>
		<a href="form_guru.php" class="btn btn-primary">Tambah Data</a>
		<a href="index.php" class="btn btn-info">Home</a>
		<table class="table my-3">
			<thead class="thead-dark">
				<tr>
					<th>#</th>
					<th>Nama</th>
					<th>Alamat</th>
					<th>Nomor Telepon</th>
					<th>Tanggal Lahir</th>
					<th>Action</th>
				</tr>
			</thead>
			<tbody>
				<?php
					$guru = query("select * from guru");
					$i = 1;
					foreach ($guru as $row):
				?>
				<tr>
					<td><?= $i ?></td>
					<td><?= $row['nama'] ?></td>
					<td><?= $row['alamat'] ?></td>
					<td><?= $row['no_telp'] ?></td>
					<td><?= $row['tl'] ?></td>
					<td>
						<a href="edit_guru.php?id=<?= $row['id_guru']; ?>" class="btn btn-info">Edit</a>
						<a href="hapus_guru.php?id=<?= $row['id_guru']; ?>" onclick="return confirm('Apakah data ini akan dihapus ?')" class="btn btn-info">Hapus</a>
					</td>
				</tr>
				<?php $i++; endforeach; ?>
			</tbody>
		</table>
	</div>
</body>
</html>