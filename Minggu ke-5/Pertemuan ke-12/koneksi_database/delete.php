<?php
include "koneksi.php";
if (isset($_GET['id_mhs'])) {
    $id_mhs = $_GET['id_mhs'];
} else {
    die("Error. Id not SElected");
}

if (!empty($id_mhs) && $id_mhs != "") {
    $query = "DELETE FROM mahasiswa WHERE id_mhs='$id_mhs'";
    $sql = mysqli_query($koneksi, $query);
    if ($sql) {
        echo "<script>alert('Data Berhasil dihapus!');document.location='index.php';</script>";
    } else {
        echo "<script>alert('Data Gagal dihapus!');document.location='index.php';</script>";
    }
}
