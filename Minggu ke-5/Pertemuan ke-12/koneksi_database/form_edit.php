<?php
include 'koneksi.php';
$id         = $_GET['id_mhs'];
$mahasiswa  = mysqli_query($koneksi, "select * from mahasiswa where id_mhs='$id'");
$row        = mysqli_fetch_array($mahasiswa);
// membuat data jurusan menjadi dinamis dalam bentuk array
$jurusan    = array('TEKNIK INFORMATIKA', 'TEKNIK ELEKTRO', 'REKAMEDIS');
// membuat function untuk set aktif radio button
function active_radio_button($value, $input)
{
    // apabila value dari radio sama dengan yang di input
    $result =  $value == $input ? 'checked' : '';
    return $result;
}


if (isset($_POST['ubah'])) {
    // menyimpan data kedalam variabel
    $id_mhs         = $_POST['id_mhs'];
    $nim            = $_POST['nim'];
    $nama           = $_POST['nama'];
    $jurusan        = $_POST['jurusan'];
    $jenis_kelamin  = $_POST['jenis_kelamin'];
    $alamat         = $_POST['alamat'];
    // query SQL untuk insert data
    $query = "UPDATE mahasiswa SET nim='$nim',nama='$nama',jurusan='$jurusan',jenis_kelamin='$jenis_kelamin',alamat='$alamat' where id_mhs='$id_mhs'";
    $sql = mysqli_query($koneksi, $query);
    if ($sql) {
        echo "<script>alert('Data Berhasil diubah!');document.location='index.php';</script>";
    } else {
        echo "<script>alert('Data Gagal diubah!');document.location='index.php';</script>";
    }
}
?>
<!DOCTYPE html>
<html>

<head>
    <title>Digital Talent</title>
</head>

<body>
    <form method="post" action="">
        <input type="hidden" value="<?php echo $row['id_mhs']; ?>" name="id_mhs">
        <table>
            <tr>
                <td>NIM</td>
                <td><input type="text" value="<?php echo $row['nim']; ?>" name="nim"></td>
            </tr>
            <tr>
                <td>NAMA</td>
                <td><input type="text" value="<?php echo $row['nama']; ?>" name="nama"></td>
            </tr>
            <tr>
                <td>JENIS KELAMIN</td>
                <td>
                    <input type="radio" name="jenis_kelamin" value="L" <?php echo active_radio_button("L", $row['jenis_kelamin']) ?>>Laki Laki
                    <input type="radio" name="jenis_kelamin" value="P" <?php echo active_radio_button("P", $row['jenis_kelamin']) ?>>Perempuan
                </td>
            </tr>
            <tr>
                <td>JURUSAN <?php echo $row['jurusan']; ?></td>
                <td>
                    <select name="jurusan">
                        <?php
                        foreach ($jurusan as $j) {
                            echo "<option value='$j' ";
                            echo $row['jurusan'] == $j ? 'selected="selected"' : '';
                            echo ">$j</option>";
                        }
                        ?>
                    </select>
                </td>
            </tr>
            <tr>
                <td>ALAMAT</td>
                <td><input value="<?php echo $row['alamat']; ?>" type="text" name="alamat"></td>
            </tr>
            <tr>
                <td colspan="2"><button type="submit" value="simpan" name="ubah">SIMPAN PERUBAHAN</button>
                    <a href="index.php">Kembali</a></td>
            </tr>
        </table>
    </form>
</body>

</html>