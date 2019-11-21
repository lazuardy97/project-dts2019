<html>

<head>
    <title>Index Buku Tamu</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>

<body>
    <form name="angka" method="post">
        Masukkan Angka : <input type="text" name="angka"><br>
        Pilih Jenis Bilangan :
        <select name="jnsbil">
            <option value="ganjil">Ganjil</option>
            <option value="genap">Genap</option>
        </select>
        <input type="submit" name="hitung" value="Hitung">
    </form>
</body>

</html>
<?php
if (isset($_POST['hitung'])) { }
$angka = $_POST['angka'];
$jns = $_POST['jnsbil'];

for ($i = 1; $i < $angka; $i++) {
    if ($jns == 'ganjil') {
        if (($i % 2) == 1) {
            echo "$i ";
        }
    } else {
        if (($i % 2) == 0) {
            echo "$i ";
        }
    }
}
