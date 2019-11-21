<?php 
include "koneksi.php";
if (isset($_GET['idbukutamu'])){
    $idbukutamu = $_GET['idbukutamu'];
}else{
    die ("Error. Id not SElected");
}

if(!empty($idbukutamu) && $idbukutamu !=""){
    $query = "DELETE FROM bukutamu WHERE idbukutamu='$idbukutamu'";
    $sql = mysqli_query($conn,$query);
    if ($sql){
        echo "<script>alert('Berhasil dihapus!');history.go(-1);</script>";
    }
    else{
        echo "<script>alert('Gagal dihapus!');history.go(-1);</script>";
    }
}
?>