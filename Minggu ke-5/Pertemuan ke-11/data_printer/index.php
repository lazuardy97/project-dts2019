<html>

<head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</head>

<body>
    <br>
    <div class="container">
        <h2>List Data Printer</h2>
        <table class="table">
            <thead>
                <tr>
                    <th>No.</th>
                    <th>Merk</th>
                    <th>Warna</th>
                    <th>Jumlah</th>
                    <th colspan="2">Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php
                include 'koneksi.php';
                $barang = mysqli_query($koneksi, "SELECT * from tb_printer");
                $no = 1;
                foreach ($barang as $row) {
                    echo "<tr>
                <td>$no</td>
                <td>" . $row['merk'] . "</td>
                <td>" . $row['warna'] . "</td>
                <td>" . $row['jumlah'] . "</td>
                <td><a class='btn btn-warning' href='form_edit.php?id_print=$row[id_print]'>EDIT</a>&nbsp;<a class='btn btn-danger' href='delete.php?id_print=$row[id_print]'>DELETE</a></td>
                
            </tr>";
                    $no++;
                }
                ?>
            </tbody>
        </table>

        <a class="btn btn-primary" href='form_input.php'>TAMBAH DATA</a>
    </div>
</body>

</html>