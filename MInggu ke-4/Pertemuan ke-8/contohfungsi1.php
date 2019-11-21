<?php
function soal1($minggu, $kelas)
{
    echo "<b>Soal 1</b> <br>";
    echo "Pertemuan minggu ke-$minggu di kelas $kelas <br><br>";
}
function soal2($hari)
{
    echo "<b>Soal 2</b> <br>";
    echo "Hari $hari tanggal 19 Oktober 2019<br><br>";
}
function soal3($isi)
{
    echo "<b>Soal 3</b><br>";
    echo "$isi dilaksanakan pada 16 Oktober 2019<br><br>";
}
function perkenalan($nama, $salam)
{
    echo "<b>Soal 4</b> <br>";
    echo "$salam <br>";
    echo "Perkenalkan nama saya $nama <br>";
    echo "Senang berkenalan dengan anda <br>";
}

soal1("4", "JWP-B");
soal2("Sabtu");
soal3("Sertifikasi BNSP");
perkenalan("Lazuardy", "Halo!");

echo "<hr>";

$saya = "Syahrul";
$ucapSalam = "Selamat Siang!!";

perkenalan($saya, $ucapSalam);
