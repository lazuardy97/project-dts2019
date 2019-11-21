<?php
include "koneksi.php";
if (isset($_GET['id_print'])) {
    $id_print = $_GET['id_print'];
} else {
    die("Error. Id not SElected");
}

if (!empty($id_print) && $id_print != "") {
    $query = "DELETE FROM tb_printer WHERE id_print='$id_print'";
    $sql = mysqli_query($koneksi, $query);
    if ($sql) {
        echo "<script>alert('Data Berhasil dihapus!');document.location='index.php';</script>";
    } else {
        echo "<script>alert('Data Gagal dihapus!');document.location='index.php';</script>";
    }
}
