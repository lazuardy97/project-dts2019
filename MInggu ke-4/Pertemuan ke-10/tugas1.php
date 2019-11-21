<?php
function rupiah($angka)
{
    $hasil_rupiah = "Rp " . number_format($angka, 2, ',', '.');
    return $hasil_rupiah;
}
$diskon = 0;
$total = 0;
$total_diskon = 0;
$total_bayar = 0;
if (isset($_POST['submit'])) {

    $harga = $_POST['harga'];
    $jml = $_POST['jml'];
    $total = $harga * $jml;

    if ($total > 500000) {
        $diskon = "50%";
        $total_diskon = 0.5 * $total;
        $total_bayar = $total - $total_diskon;
    } elseif (($total <= 500000) && ($total > 250000)) {
        $diskon = "20%";
        $total_diskon = 0.2 * $total;
        $total_bayar = $total - $total_diskon;
    } elseif (($total <= 250000) && ($total > 100000)) {
        $diskon = "10%";
        $total_diskon = 0.1 * $total;
        $total_bayar = $total - $total_diskon;
    }
}
?>
<html>
<title>Hitung Diskon</title>

<head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>

<body>

    <div class="container">
        <h2>Perhitungan Diskon</h2>
        <form method="post" action="tugas1.php">
            <div class="form-group">
                <label for="exampleInputEmail1">Harga Barang</label>
                <input type="text" class="form-control" name="harga" class="uang">
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Jumlah Barang</label>
                <input type="text" class="form-control" name="jml">
            </div>
            <button type="submit" class="btn btn-primary" name="submit">Submit</button>
        </form>
        <?php
        echo "Total Belanja " . rupiah($total) . "<br>";
        echo "Anda Mendapatkan Diskon sebesar " . $diskon . "<br>";
        echo "Total Diskon " . rupiah($total_diskon) . "<br>";
        echo "Total yang harus dibayar " . rupiah($total_bayar) . "<br>";
        ?>
    </div>
</body>

</html>