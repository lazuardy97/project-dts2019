<?php
include 'koneksi.php';
$id         = $_GET['id_mhs'];
$sql        = mysqli_query($koneksi, "select * from tb_mhs where id_mhs='$id'");
$row        = mysqli_fetch_array($sql);


if (isset($_POST['ubah'])) {
    // menyimpan data kedalam variabel
    $id_mhs       = $_POST['id_mhs'];
    $nama         = $_POST['nama'];
    $nim          = $_POST['nim'];
    $alamat       = $_POST['alamat'];
    $jk           = $_POST['jk'];
    $no_hp        = $_POST['no_hp'];
    // query SQL untuk insert data
    $query = "UPDATE `tb_mhs` SET `nim`='$nim', `nama`='$nama', `jk`='$jk', `no_hp`='$no_hp', `alamat`='$alamat' WHERE `id_mhs`='$id'";
    $sql = mysqli_query($koneksi, $query);
    if ($sql) {
        echo "<script>alert('Data Berhasil diubah!');document.location='index.php';</script>";
    } else {
        echo "<script>alert('Data Gagal diubah!');document.location='index.php';</script>";
    }
}
?>
<!DOCTYPE html>
<html>

<head>
    <title>Ubah Data Printer</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

</head>

<body>
    <br>
    <div class="container">
        <h2>Ubah Data Mahasiswa</h2><br>
        <form method="post" action="" name="input">
            <input type="hidden" value="<?php echo $row['id_mhs']; ?>" name="id_mhs">
            <div class="form-group">
                <label for="exampleInputEmail1">Nama</label>
                <input class="form-control" type="text" value="<?php echo $row['nama']; ?>" name="nama" onkeyup="this.value = this.value.toUpperCase()">
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">NIM</label>
                <input class="form-control" type="text" value="<?php echo $row['nim']; ?>" name="nim" onkeyup="this.value = this.value.toUpperCase()">
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
                <input class="form-control" value="<?php echo $row['no_hp']; ?>" type="text" name="no_hp">
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Alamat</label>
                <input class="form-control" value="<?php echo $row['alamat']; ?>" type="text" name="alamat">
            </div>
            <div class="form-group">
                <button class="btn btn-primary" type="submit" value="simpan" name="ubah">SIMPAN DATA</button>
                <a class="btn btn-primary" href="index.php">KEMBALI</a>
            </div>
        </form>
    </div>
</body>

</html>