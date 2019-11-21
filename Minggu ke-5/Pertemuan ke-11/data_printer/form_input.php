<?php
include "koneksi.php";
if (isset($_POST['input'])) {
    $merk = $_POST["merk"];
    $warna = $_POST["warna"];
    $jumlah = $_POST["jumlah"];

    $query = "INSERT INTO `tb_printer` (`merk`, `warna`,`jumlah`) 
            VALUES ('$merk','$warna', '$jumlah')";

    $sql = mysqli_query($koneksi, $query);
    if ($sql) {
        echo "<script>alert('Data Berhasil ditambahkan!');document.location='index.php';</script>";
    } else {
        echo "<script>alert('Data Gagal ditambahkan!');document.location='index.php';</script>";
    }
}
?>
<html>

<head>
    <title>Form Input Data</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

</head>

<body>
    <br>
    <div class="container">
        <h2>Input Data Printer</h2><br>
        <form method="post" action="" name="input">
            <div class="form-group">
                <label for="exampleInputEmail1">MERK</label>
                <input class="form-control" type="text" name="merk" onkeyup="this.value = this.value.toUpperCase()">
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">WARNA</label>
                <input class="form-control" type="text" name="warna" onkeyup="this.value = this.value.toUpperCase()">
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">JUMLAH</label>
                <input class="form-control" type="text" name="jumlah">
            </div>
            <div class="form-group">
                <button class="btn btn-primary" type="submit" value="simpan" name="input">SIMPAN BARANG</button>
                <a class="btn btn-primary" href="index.php">KEMBALI</a>
            </div>
        </form>
    </div>
</body>

</html>