<?php 
include "koneksi.php";
if (isset($_GET['idkosakata'])){
    $idkosakata = $_GET['idkosakata'];
}else{
    die ("Error. Id not SElected");
}
    $query = "SELECT * FROM tb_kamus WHERE idkosakata='$idkosakata'";
    $sql = mysqli_query($conn,$query);  
    $hasil = mysqli_fetch_array($sql);

    $idkosakata = $hasil['idkosakata'];
    $inggris = stripcslashes($hasil['inggris']);
    $indonesia = stripcslashes($hasil['indonesia']);
    $deskripsi = stripcslashes($hasil['deskripsi']);

    if(isset($_POST['edit'])){
        $idkosakata = $_POST['idkosakata'];
        $inggris = addslashes(strip_tags($_POST['inggris']));
        $indonesia = addslashes(strip_tags($_POST['indonesia']));
        $deskripsi = addslashes(strip_tags($_POST['deskripsi']));

        $query = "UPDATE tb_kamus SET 
                    inggris='$inggris', 
		            indonesia='$indonesia', 
		            deskripsi='$deskripsi' 
                WHERE idkosakata='$idkosakata'";

        $sql = mysqli_query($conn,$query);

        if ($sql){
            echo "<script>alert('Kosakata Berhasil diedit!');document.location='index.php';</script>";
        }
        else{
            echo "<script>alert('Kosakata Gagal diedit!');document.location='index.php';</script>";
        }

    }
?>
<html>
<head><title>Edit KosaKata</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    </head>
    <body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="index.php">
            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRJKud2gtvZ3W89pK-AIvwCz909anr85C2EF30h6SFUE01H70mN" width="30" height="30" class="d-inline-block align-top" alt="">
            Kamus Inggris - Indonesia
         </a>
         <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
    <div class="navbar-nav">
      <a class="nav-item nav-link" href="index.php">Halaman Utama </a>
      <a class="nav-item nav-link" href="input_kosakata.php">Tambah KosaKata</a>
    </div>
  </div>
    </nav>
        <br><br>
        <div class="container-fluid">
        <form action="" method="POST" name="input">
            <h2>Edit KosaKata</h2>
            <div class="form-group col-md-4">
                Bahasa Inggris <br>
                <input class="form-control " type="text" name="inggris" size="30" value="<?=$inggris?>">
            </div>
            <div class="form-group col-md-4">
                Bahasa Indonesia <br>
                <input class="form-control " type="text" name="indonesia" size="30" value="<?=$indonesia?>">
            </div>
            <div class="form-group col-md-4">
                Deskripsi <br>
                <textarea class="form-control " name="deskripsi" cols="50" rows="10"><?=$deskripsi?></textarea>
            </div>
            <div class="form-group col-md-4">
                <input type="hidden" name="idkosakata" value="<?=$idkosakata?>">
                <input class="btn btn-primary" type="submit" name="edit" value="Edit KosaKata">
                <a href='index.php' class='btn btn-danger'>Cancel</a>
            </div>
        </form>
        </div>
    </body>
</html>
