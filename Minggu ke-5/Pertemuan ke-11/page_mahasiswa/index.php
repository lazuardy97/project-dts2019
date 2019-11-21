<html>

<head>
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
                <a class="nav-item nav-link active" href="index.php">Home <span class="sr-only">(current)</span></a>
                <a class="nav-item nav-link" href="form_input.php">Data Mahasiswa</a>
                <a class="nav-item nav-link" href="about.php">About</a>
            </div>
        </div>
    </nav>
    <br>
    <div class="container">
        <h2>DATA MAHASISWA</h2>
        <table class="table">
            <thead>
                <tr>
                    <th>No.</th>
                    <th>NIM</th>
                    <th>NAMA</th>
                    <th>JENIS KELAMIN</th>
                    <th>NO HANDPHONE</th>
                    <th>ALAMAT</th>
                    <th colspan="2">Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php
                include 'koneksi.php';
                $barang = mysqli_query($koneksi, "SELECT * from tb_mhs");
                $no = 1;
                foreach ($barang as $row) {
                    echo "<tr>
                <td>$no</td>
                <td>" . $row['nim'] . "</td>
                <td>" . $row['nama'] . "</td>
                <td>" . $row['jk'] . "</td>
                <td>" . $row['no_hp'] . "</td>
                <td>" . $row['alamat'] . "</td>
                <td><a class='btn btn-warning' href='form_edit.php?id_mhs=$row[id_mhs]'>EDIT</a>&nbsp;<a class='btn btn-danger' href='delete.php?id_mhs=$row[id_mhs]'>DELETE</a></td>
                
            </tr>";
                    $no++;
                }
                ?>
            </tbody>
        </table>
    </div>
</body>

</html>