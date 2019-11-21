<?php
include "koneksi.php";
if (isset($_POST['input'])) {
    $nim = $_POST["nim"];
    $nama = $_POST["nama"];
    $jk = $_POST["jenis_kelamin"];
    $jurusan = $_POST["jurusan"];
    $alamat = $_POST["alamat"];

    $query = "INSERT INTO `mahasiswa` (`nim`, `nama`, `jenis_kelamin`, `jurusan`, `alamat`) 
            VALUES ('$nim','$nama', '$jk', '$jurusan', '$alamat')";

    $sql = mysqli_query($koneksi, $query);
    if ($sql) {
        echo "<script>alert('Data Berhasil ditambahkan!');document.location='index.php';</script>";
    } else {
        echo "<script>alert('Data Gagal ditambahkan!');document.location='index.php';</script>";
    }
}
?>
<html>

<head>
    <title>Form Input Data</title>
</head>

<body>
    <form method="post" action="" name="input">
        <table>
            <tr>
                <td>NIM</td>
                <td><input type="text" onkeyup="isi_otomatis()" name="nim"></td>
            </tr>
            <tr>
                <td>NAMA</td>
                <td><input type="text" name="nama"></td>
            </tr>
            <tr>
                <td>JENIS KELAMIN</td>
                <td><input type="radio" name="jenis_kelamin" value="L">Laki laki
                    <input type="radio" name="jenis_kelamin" value="P">Perempuan
                </td>
            </tr>
            <tr>
                <td>JURUSAN</td>
                <td>
                    <select name="jurusan">
                        <option value="TEKNIK INFORMATIKA">TEKNIK INFORMATIKA</option>
                        <option value="TEKNIK MESIN">TEKNIK MESIN</option>
                        <option value="TEKNIK KIMIA">TEKNIK KIMIA</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td>ALAMAT</td>
                <td><input type="text" name="alamat"></td>
            </tr>
            <tr>
                <td colspan="2">
                    <button type="submit" value="simpan" name="input">Simpan</button>
                </td>
            </tr>
        </table>
    </form>
</body>

</html>