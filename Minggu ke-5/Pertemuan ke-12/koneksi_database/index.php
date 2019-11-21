<html>

<body>
    <h2>List Mahasiswa</h2>
    <table border="1">
        <tr>
            <th>No.</th>
            <th>NIM</th>
            <th>Nama</th>
            <th>Gender</th>
            <th>Jurusan</th>
            <th colspan="2">Aksi</th>
        </tr>
        <?php
        include 'koneksi.php';
        $mahasiswa = mysqli_query($koneksi, "SELECT * from mahasiswa");
        $no = 1;
        foreach ($mahasiswa as $row) {
            $jenis_kelamin = $row['jenis_kelamin'] == 'P' ? 'Perempuan' : 'Laki laki';
            echo "<tr>
                <td>$no</td>
                <td>" . $row['nim'] . "</td>
                <td>" . $row['nama'] . "</td>
                <td>" . $jenis_kelamin . "</td>
                <td>" . $row['jurusan'] . "</td>
                <td><a href='form_edit.php?id_mhs=$row[id_mhs]'>Edit</a></td>
                <td><a href='delete.php?id_mhs=$row[id_mhs]'>Delete</a></td>
            </tr>";
            $no++;
        }
        ?>
    </table>
    <a href='form_input.php'>Tambah Data</a>
</body>

</html>