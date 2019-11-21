<?php 
include "koneksi.php";
if (isset($_GET['idkosakata'])){
    $idkosakata = $_GET['idkosakata'];
}else{
    die ("Error. Id not SElected");
}

if(!empty($idkosakata) && $idkosakata !=""){
    $query = "DELETE FROM tb_kamus WHERE idkosakata='$idkosakata'";
    $sql = mysqli_query($conn,$query);
    if ($sql){
        echo "<script>alert('Berhasil dihapus!');document.location='index.php';</script>";
    }
    else{
        echo "<script>alert('Gagal dihapus!');document.location='index.php';</script>";
    }
}
?>