<?php

	include 'koneksi.php';

	$result = mysqli_query($koneksi, "select * form peserta");

	function query($query_kedua) 
	{
		global $koneksi;

		$result = mysqli_query($koneksi, $query_kedua);
		$rows = [];

		while ($row = mysqli_fetch_assoc($result)) {
			$rows[] = $row;
		}

		return $rows;
	}

	function tambah($data)
	{
		global $koneksi;

		$nama		= htmlspecialchars($data['nama']);
		$alamat		= htmlspecialchars($data['alamat']);
		$jk			= htmlspecialchars($data['jk']);
		$agama		= htmlspecialchars($data['agama']);
		$sekolah	= htmlspecialchars($data['sekolah']);

		$query = "insert into peserta set nama='$nama', alamat='$alamat', jenis_kelamin='$jk', agama='$agama', sekolah='$sekolah'";

		mysqli_query($koneksi, $query);

		return mysqli_affected_rows($koneksi);
	}

	function edit($data)
	{
		global $koneksi;

		$id 		= $data['id'];
		$nama		= htmlspecialchars($data['nama']);
		$alamat		= htmlspecialchars($data['alamat']);
		$jk			= htmlspecialchars($data['jk']);
		$agama		= htmlspecialchars($data['agama']);
		$sekolah	= htmlspecialchars($data['sekolah']);

		$query = "update peserta set nama='$nama', alamat='$alamat', jenis_kelamin='$jk', agama='$agama', sekolah='$sekolah' where id='$id'";

		mysqli_query($koneksi, $query);

		return mysqli_affected_rows($koneksi);
	}

	function hapus($id)
	{
		global $koneksi;

		$query = "delete from peserta where id='$id'";

		mysqli_query($koneksi, $query);

		return mysqli_affected_rows($koneksi);
	}

	function tambah_guru($data)
	{
		global $koneksi;

		$nama	= htmlspecialchars($data['nama']);
		$alamat	= htmlspecialchars($data['alamat']);
		$nt		= htmlspecialchars($data['no_telp']);
		$tl		= htmlspecialchars($data['tl']);

		$query 	= "insert into guru set nama='$nama', alamat='$alamat', no_telp='$nt', tl='$tl'";

		mysqli_query($koneksi,$query);

		return mysqli_affected_rows($koneksi);
	}

	function edit_guru($data)
	{
		global $koneksi;

		$id 		= $data['id_guru'];
		$nama		= htmlspecialchars($data['nama']);
		$alamat		= htmlspecialchars($data['alamat']);
		$nt			= htmlspecialchars($data['no_telp']);
		$tl			= htmlspecialchars($data['tl']);

		$query = "update guru set nama='$nama', alamat='$alamat', no_telp='$nt', tl='$tl' where id_guru='$id'";

		mysqli_query($koneksi, $query);

		return mysqli_affected_rows($koneksi);
	}

	function hapus_guru($id)
	{
		global $koneksi;

		$query = "delete from guru where id_guru='$id'";

		mysqli_query($koneksi, $query);

		return mysqli_affected_rows($koneksi);
	}

	function tambah_mapel($data)
	{
		global $koneksi;

		$mapel	= htmlspecialchars($data['mapel']);

		$query 	= "insert into mapel set mapel='$mapel'";

		mysqli_query($koneksi,$query);

		return mysqli_affected_rows($koneksi);
	}

	function edit_mapel($data)
	{
		global $koneksi;

		$id 		= $data['id_mapel'];
		$mapel		= htmlspecialchars($data['mapel']);

		$query = "update mapel set mapel='$mapel' where id_mapel='$id'";

		mysqli_query($koneksi, $query);

		return mysqli_affected_rows($koneksi);
	}

	function hapus_mapel($id)
	{
		global $koneksi;

		$query = "delete from mapel where id_mapel='$id'";

		mysqli_query($koneksi, $query);

		return mysqli_affected_rows($koneksi);
	}

?>