<?php
session_start();
if (empty($_SESSION['email'])) {
    header('Location: formlogin.php');
} else {
    $email = $_SESSION['email'];
}

?>
<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">


<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="index.php">
            <img src="https://digitalent.kominfo.go.id/assets/@images/logo.png" width="90" height="30" class="d-inline-block align-top" alt="">

        </a>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav">
                <a class="nav-item nav-link active" href="home.php">Dasboard<span class="sr-only">(current)</span></a>
                <a class="nav-item nav-link" href="input_kosakata.php"></a>
            </div>
        </div>
        <span class="navbar-text">
            <?= date('l, d-m-Y'); ?>
            &nbsp;
            <a href="logout.php">Keluar</a>
        </span>
    </nav>
    <br>
    <div class="container">
        <br>
        <br>
        <h2>Halo Selamat Datang <?= $email ?></h2>
        <br>
        <h5>Daftar Tugas</h5>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col" style="width: 800px;">Nama Tugas</th>
                    <th scope="col">Link</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th scope="row">1</th>
                    <td>Fungsi</td>
                    <td><a href="http://localhost:8080/DTS/MInggu%20ke-4/Pertemuan%20ke-8/contohfungsi1.php">Klik disini</a></td>
                </tr>
                <tr>
                    <th scope="row">2</th>
                    <td>Desain bootstrap</td>
                    <td><a href="http://localhost:8080/DTS/Minggu%20ke-3/Pertemuan%20ke-6/kominfo.php">Klik disini</a></td>
                </tr>
                <tr>
                    <th scope="row">3</th>
                    <td>Tabel</td>
                    <td><a href="http://localhost:8080/DTS/Minggu%20ke-3/Pertemuan%20ke-5/tugasakhir.php">Klik disini</a></td>
                </tr>
                <tr>
                    <th scope="row">4</th>
                    <td>Perhitungan Diskon</td>
                    <td><a href="http://localhost:8080/DTS/MInggu%20ke-4/Pertemuan%20ke-10/tugas1.php">Klik disini</a></td>
                </tr>
            </tbody>
        </table>
    </div>

</body>

</html>