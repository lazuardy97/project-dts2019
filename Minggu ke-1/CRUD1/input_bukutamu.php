<?php
include "koneksi.php";
if (isset($_POST['input'])) {
    $nama = addslashes(strip_tags($_POST['nama']));
    $email = addslashes(strip_tags($_POST['email']));
    $isi = addslashes(strip_tags($_POST['isi']));
    $id_kategori = stripcslashes($_POST['id_kategori']);

    $query = "INSERT INTO `bukutamu` (`tanggal`, `nama`, `email`, `isi`,`id_kategori`) 
            VALUES (NOW(), '$nama', '$email', '$isi','$id_kategori')";
    $sql = mysqli_query($conn, $query);
    if ($sql) {
        echo "<h2><font color='blue'>Buku tamu telah berhasil ditambahkan</font></h2>";
    } else {
        echo "<h2><font color='blue'>Buku tamu telah gagal ditambahkan</font></h2>";
    }
}
?>
<html>

<head>
    <title>Index Buku Tamu</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <a href="index.php"> Halaman Depan</a>
    <a href="input_bukutamu.php"> Input Buku Tamu</a>
    <br><br>
    <form action="" method="POST" name="input">
        <h2>Input Buku Tamu</h2>
        <p>
            Kategori Tamu <br>
            <select name="id_kategori">
                <?php
                $query = "SELECT * FROM kategori ORDER BY nama_kategori";
                $sql = mysqli_query($conn, $query);

                while ($hasil = mysqli_fetch_array($sql)) {
                    $selected = ($hasil['id_kategori'] == $id_kategori) ? 'selected' : '';
                    echo "<option value='$hasil[id_kategori]' $selected>$hasil[nama_kategori]</option>";
                }
                ?>
            </select>
        </p>
        <p>
            Nama <br>
            <input type="text" name="nama" size="30">
        </p>
        <p>
            Email <br>
            <input type="text" name="email" size="30">
        </p>
        <p>
            Isi <br>
            <textarea name="isi" cols="50" rows="10"></textarea>
        </p>
        <p>
            <input type="submit" name="input" value="Input Buku Tamu">
            <input type="reset" name="reset " value="Cancel">
        </p>
    </form>
</body>

</html>