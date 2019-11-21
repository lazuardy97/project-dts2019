<?php
include "koneksi.php";
if (isset($_GET['idbukutamu'])) {
    $idbukutamu = $_GET['idbukutamu'];
} else {
    die("Error. Id not Selected");
}
$query = "SELECT * FROM bukutamu WHERE idbukutamu='$idbukutamu'";
$sql = mysqli_query($conn, $query);
$hasil = mysqli_fetch_array($sql);

$idbukutamu = $hasil['idbukutamu'];
$nama = stripcslashes($hasil['nama']);
$email = stripcslashes($hasil['email']);
$isi = stripcslashes($hasil['isi']);
$id_kategori = stripcslashes($hasil['id_kategori']);

if (isset($_POST['edit'])) {
    $idbukutamu = $_POST['idbukutamu'];
    $nama = addslashes(strip_tags($_POST['nama']));
    $email = addslashes(strip_tags($_POST['email']));
    $isi = addslashes(strip_tags($_POST['isi']));
    $id_kategori = addslashes(strip_tags($_POST['id_kategori']));

    $query = "UPDATE bukutamu SET 
                    nama='$nama', 
		            email='$email', 
		            isi='$isi',
                    id_kategori='$id_kategori' 
                WHERE idbukutamu='$idbukutamu'";

    $sql = mysqli_query($conn, $query);

    if ($sql) {
        echo "<h2><font color='blue'>Buku tamu telah berhasil diedit</font></h2>";
    } else {
        echo "<h2><font color='blue'>Buku tamu telah gagal diedit</font></h2>";
    }
}
?>
<html>

<head>
    <title>Edit Buku Tamu</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <a href="index.php"> Halaman Depan</a>
    <a href="input_bukutamu.php"> Input Buku Tamu</a>
    <br><br>
    <form action="" method="POST" name="input">
        <h2>Edit Buku Tamu</h2>
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
            <input type="text" name="nama" size="30" value="<?= $nama ?>">
        </p>
        <p>
            Email <br>
            <input type="text" name="email" size="30" value="<?= $email ?>">
        </p>
        <p>
            Isi <br>
            <textarea name="isi" cols="50" rows="10"><?= $isi ?></textarea>
        </p>
        <p>
            <input type="hidden" name="idbukutamu" value="<?= $idbukutamu ?>">
            <input type="submit" name="edit" value="Edit Buku Tamu">
            <input type="reset" name="reset " value="Cancel">
        </p>
    </form>
</body>

</html>