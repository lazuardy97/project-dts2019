<?php 
include "koneksi.php"
?>
<html>
    <head><title>Index Kamus</title>
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
      <a class="nav-item nav-link active" href="index.php">Halaman Utama <span class="sr-only">(current)</span></a>
      <a class="nav-item nav-link" href="input_kosakata.php">Tambah KosaKata</a>
    </div>
  </div>
    </nav>        
    <div class="container-fluid">
        <br>
        <br>
        <table class="table table-hover table table-striped fluid">
            <thead class="thead-dark">
                <tr align="center" class="bg-primary">
                    <td>Bahasa Inggris</td>
                    <td>Bahasa Indonesia</td>
                    <td>Deskripsi</td>
                    <td>Action</td>
                </tr>
            </thead>
        <?php 
            $query = "SELECT * FROM tb_kamus ORDER BY inggris DESC";
            $sql = mysqli_query($conn,$query);

            while ($hasil = mysqli_fetch_array($sql))
            {

                $idkosakata = $hasil['idkosakata'];
                $inggris = stripcslashes($hasil['inggris']);
                $indonesia = stripcslashes($hasil['indonesia']);
                $deskripsi = stripcslashes($hasil['deskripsi']);
                echo "<tbody>";
                echo "<tr align='center'>";
                echo "<td>$inggris</td>";
                echo "<td>$indonesia</td>";
                echo "<td>$deskripsi</td>";
                echo "<td><a href='edit_kosakata.php?idkosakata=$idkosakata' class='btn btn-success'>Ubah</a> <a href='delete_kosakata.php?idkosakata=$idkosakata'class='btn btn-danger'>Hapus</a></td>";
                echo "</tr>";
                echo "</tbody>";
            }
        ?>
        </table>
    </div>
    </body>
</html>