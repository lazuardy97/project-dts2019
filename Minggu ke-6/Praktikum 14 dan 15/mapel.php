<?php
	require 'function.php';
?>
<!DOCTYPE html>
<html>
<head>
	<title>Mapel</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>
	<div class="container">
		<h2 class="text-center mb-5">Mapel Yang Sudah Terdaftar</h2>
		<a href="form_mapel.php" class="btn btn-primary">Tambah Data</a>
		<a href="index.php" class="btn btn-info">Home</a>
		<table class="table my-3">
			<thead class="thead-dark">
				<tr>
					<th>#</th>
					<th>Mapel</th>					
					<th>Action</th>
				</tr>
			</thead>
			<tbody>
				<?php
					$mapel = query("select * from mapel");
					$i = 1;
					foreach ($mapel as $row):
				?>
				<tr>
					<td><?= $i ?></td>
					<td><?= $row['mapel'] ?></td>
					<td>
						<a href="edit_mapel.php?id=<?= $row['id_mapel']; ?>" class="btn btn-info">Edit</a>
						<a href="hapus_mapel.php?id=<?= $row['id_mapel']; ?>" onclick="return confirm('Apakah data ini akan dihapus ?')" class="btn btn-info">Hapus</a>
					</td>
				</tr>
				<?php $i++; endforeach; ?>
			</tbody>
		</table>
	</div>
</body>
</html>