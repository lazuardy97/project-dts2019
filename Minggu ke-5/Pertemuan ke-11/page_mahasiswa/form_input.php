<?php
include "koneksi.php";
if (isset($_POST['input'])) {
    $nama = $_POST["nama"];
    $nim = $_POST["nim"];
    $alamat = $_POST["alamat"];
    $jk = $_POST['jk'];
    $no_hp = $_POST['no_hp'];

    $query = "INSERT INTO `tb_mhs` (`nim`, `nama`, `jk`, `no_hp`, `alamat`) 
                VALUES ('$nim', '$nama', '$jk', '$no_hp', '$alamat')";

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
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="index.php">
            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRJKud2gtvZ3W89pK-AIvwCz909anr85C2EF30h6SFUE01H70mN" width="30" height="30" class="d-inline-block align-top" alt="">
            Elektronik Kampus
        </a>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav">
                <a class="nav-item nav-link " href="index.php">Home</a>
                <a class="nav-item nav-link active" href="form_input.php">Data Mahasiswa</a>
                <a class="nav-item nav-link" href="about.php">About</a>
            </div>
        </div>
    </nav>
    <br>
    <div class="container">
        <h2>Input Data Mahasiswa</h2><br>
        <form method="post" action="" name="input">
            <div class="form-group">
                <label for="exampleInputEmail1">Nama</label>
                <input class="form-control" type="text" name="nama" onkeyup="this.value = this.value.toUpperCase()">
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">NIM</label>
                <input class="form-control" type="text" name="nim" onkeyup="this.value = this.value.toUpperCase()">
            </div>
            <div class="form-group">
                <label>Jenis Kelamin</label>
                <select class="form-control" name="jk">
                    <option value="Laki-Laki">Laki-Laki</option>
                    <option value="Perempuan">Perempuan</option>
                </select>
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">No Handphone</label>
                <input class="form-control" type="text" name="no_hp">
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Alamat</label>
                <textarea class="form-control" rows="3" name="alamat"></textarea>
            </div>
            <div class="form-group">
                <button class="btn btn-primary" type="submit" value="simpan" name="input">SIMPAN DATA</button>
                <a class="btn btn-primary" href="index.php">KEMBALI</a>
            </div>
        </form>
    </div>
</body>

</html>