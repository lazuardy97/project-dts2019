<?php
include "koneksi.php"
?>
<html>

<head>
    <title>Index Buku Tamu</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>

<body>
    <a href="index.php"> Halaman Depan</a>
    <a href="input_bukutamu.php"> Input Buku Tamu</a>
    <br><br>

    <h2>Halaman Depan ~ Buku Tamu</h2>
    Tampil Kategori :
    <?php
    $query = "SELECT * FROM kategori";
    $sql = mysqli_query($conn, $query);
    while ($hasil = mysqli_fetch_array($sql)) {

        $idkategori = $hasil['id_kategori'];
        $namakategori = $hasil['nama_kategori'];
        echo " | <a href='index.php?id_kategori=$idkategori'>$namakategori</a>";
    }
    ?>
    <form name="pencarian" method="get">
        Pencarian : <input type="text" name="keyword">&nbsp;<input type="submit" name="cari" value="Cari">
    </form>
    <?php

    if (isset($_GET['cari'])) {
        $keyword = $_GET['keyword'];
        $query = "SELECT * FROM  bukutamu a
                LEFT JOIN kategori b
                ON a.id_kategori = b.id_kategori
                WHERE a.isi LIKE '%$keyword%'
                ORDER BY tanggal DESC";
    } else if (isset($_GET['id_kategori'])) {
        $idkategori = $_GET['id_kategori'];
        $query = "SELECT * FROM  bukutamu a
                LEFT JOIN kategori b
                ON a.id_kategori = b.id_kategori
                WHERE a.id_kategori = '$idkategori'
                ORDER BY tanggal DESC";
    } else {
        $query = "SELECT * FROM  bukutamu a
                LEFT JOIN kategori b
                ON a.id_kategori = b.id_kategori
                ORDER BY tanggal DESC";
    }
    $sql = mysqli_query($conn, $query);

    while ($hasil = mysqli_fetch_array($sql)) {

        $idbukutamu = $hasil['idbukutamu'];
        $tanggal = $hasil['tanggal'];
        $nama = stripcslashes($hasil['nama']);
        $email = stripcslashes($hasil['email']);
        $isi = stripcslashes($hasil['isi']);
        $namakategori = stripcslashes($hasil['nama_kategori']);

        echo "<p>";
        echo "<b>$nama</b>, $email<br>";
        echo "Kategori : $namakategori <br>";
        echo "<small>Dikirimkan pada : $tanggal</small><br>";
        echo "$isi<br>";
        echo "<small>Action : <a href='delete_bukutamu.php?idbukutamu=$idbukutamu'>Hapus</a> | <a href='edit_bukutamu.php?idbukutamu=$idbukutamu'>Ubah</a> </small>";
        echo "</>";
        echo "<hr>";
    }
    ?>
</body>

</html>