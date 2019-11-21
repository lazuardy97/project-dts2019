<?php 
include "koneksi.php"
?>
<html>
    <head><title>Toko Buku</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.css">
  
    </head>
    <body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="index.php">
            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRJKud2gtvZ3W89pK-AIvwCz909anr85C2EF30h6SFUE01H70mN" width="30" height="30" class="d-inline-block align-top" alt="">
            Toko Buku
         </a>
         <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
    <div class="navbar-nav">
      <!-- <a class="nav-item nav-link active" href="index.php">Halaman Utama <span class="sr-only">(current)</span></a>
      <a class="nav-item nav-link" href="input_buku.php">Tambah buku</a> -->
    </div>
  </div>
    </nav> 
    <br><br>
    <div class="container-fluid">
    <div class="row">
    <div class="col-md-4">
    <form action="" method="POST" name="input">
            <h2>Form Tambah Buku</h2>
            <div class="form-group ">
                Nama Buku <br>
                <input class="form-control " type="text" name="nama_buku" size="30">
            </div>
            <div class="form-group ">
                Penulis Buku <br>
                <input class="form-control " type="text" name="penulis" size="30">
            </div>
            <div class="form-group ">
                Genre Buku <br>
                <input class="form-control " type="text" name="genre" size="30">
            </div>
            Harga Buku <br>
            <div class="input-group mb-2">
            
        <div class="input-group-prepend">
          <div class="input-group-text">Rp.</div>
        </div>
        <input type="text" class="form-control" id="inlineFormInputGroup" name="harga" placeholder="">
      </div>
      <br>
            <div class="form-group">
                <input class="btn btn-primary form-control" type="submit" name="input" value="Tambah Buku">
            </div>
        </form>
    </div>
    <div class="col-md-8">
    <h2>Form Daftar Buku</h2>
    <table class="table table-hover table table-striped fluid" id="mytable">
            <thead>
                <tr align="center" class="bg-primary">
                    <td>Nama Buku</td>
                    <td>Penulis Buku</td>
                    <td>Genre Buku</td>
                    <td>Harga Buku</td>
                    <td>Aksi</td>
                </tr>
            </thead>
            <tbody>
        <?php 
            $query = "SELECT * FROM tb_buku";
            $sql = mysqli_query($conn,$query);

            while ($hasil = mysqli_fetch_array($sql))
            {

                $idbuku = $hasil['idbuku'];
                $nama_buku = stripcslashes($hasil['nama_buku']);
                $penulis = stripcslashes($hasil['penulis']);
                $genre = stripcslashes($hasil['genre']);
                $harga = stripcslashes($hasil['harga']);
                
                echo "<tr align='center'>";
                echo "<td>$nama_buku</td>";
                echo "<td>$penulis</td>";
                echo "<td>$genre</td>";
                echo "<td>$harga</td>";
                echo "<td><a href='edit_buku.php?idbuku=$idbuku' class='btn btn-success'>Ubah</a> <a href='delete_buku.php?idbuku=$idbuku'class='btn btn-danger'>Hapus</a></td>";
                echo "</tr>";
                
            }
        ?>
        <tbody>
        </table>
    </div>    
    </div>    
    </div>
    
    </body>
</html>

<script type="text/javascript" charset="utf8" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.js"></script>
<script type="text/javascript">
    $(document).ready( function () {
    $('#mytable').DataTable();
    } );
</script>