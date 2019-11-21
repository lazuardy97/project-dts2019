<?php
function hitungUmur($thn_lahir, $thn_sekarang)
{
    $umur = $thn_sekarang - $thn_lahir;
    return $umur;
}
function hitungLuasPersegi($panjang, $lebar)
{
    $luas = $panjang * $lebar;
    return $luas;
}
function hitungLuasLingkaran($jari)
{
    $luas = (22 / 7) * $jari;
    return $luas;
}
function hitungLuasTrapesium($alasB, $alasA, $tinggi)
{
    $luas = 0.5 * ($alasA + $alasB) * $tinggi;
    return $luas;
}
function hitungKelilingPersegi($panjang, $lebar)
{
    $Keliling = (2 * $panjang) + (2 * $lebar);
    return $Keliling;
}
function hitungKelilingLingkaran($d)
{
    $Keliling = (22 / 7) * $d;
    return $Keliling;
}
function hitungKelilingTrapesium($A, $B, $C, $D)
{
    $Keliling = ($A * $B) + ($B * $C) + ($C * $D) + ($D * $A);
    return $Keliling;
}

function perkenalan($nama, $salam = "Selamat Pagi!!")
{
    echo "<b>Soal 8</b> <br>";
    echo "$salam <br>";
    echo "Perkenalkan nama saya $nama <br>";
    echo "Saya berusia " . hitungUmur(1997, 2019) . " tahun <br>";
    echo "Senang berkenalan dengan anda <br><br>";
}
function perhitungan($bangun, $judul = "Perhitungan Luas Bangun")
{
    $hitung = "hitungLuas$bangun";
    echo "<b>Soal 9</b> <br>";
    echo "$judul $bangun <br>";
    echo "Luas Bangun Persegi adalah " . $hitung(20, 10) . "  <br>";
}

echo "<b>Soal 1</b> <br>";
echo "Umur saya sekarang " . hitungUmur(1997, 2019) . " tahun <br><br>";
echo "<b>Soal 2</b> <br>";
echo "Luas Persegi Panjang adalah " . hitungLuasPersegi(30, 10) . "<br><br>";
echo "<b>Soal 3</b> <br>";
echo "Luas Persegi Lingkaran adalah " . hitungLuasLingkaran(100) . "<br><br>";
echo "<b>Soal 4</b> <br>";
echo "Luas Persegi Trapesium adalah " . hitungLuasTrapesium(30, 10, 20) . "<br><br>";
echo "<b>Soal 5</b> <br>";
echo "Keliling Persegi Panjang adalah " . hitungKelilingPersegi(30, 10) . "<br><br>";
echo "<b>Soal 6</b> <br>";
echo "Keliling Persegi Lingkaran adalah " . hitungKelilingLingkaran(20) . "<br><br>";
echo "<b>Soal 7</b> <br>";
echo "Keliling Persegi Trapesium adalah " . hitungKelilingTrapesium(30, 10, 5, 8) . "<br><br>";
perkenalan("Lazuardy");
perhitungan("Persegi");
