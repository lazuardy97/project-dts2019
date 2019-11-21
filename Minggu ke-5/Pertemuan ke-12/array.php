<?php
$buah = array();

$minuman = array("Kopi", "Teh", "Jus Jeruk");
$makanan = ["Nasi Goreng", "Soto", "Bubur"];

$anggota[1] = "Komang";
$anggota[2] = "Medi";
$anggota[0] = "Usman";

for ($i = 0; $i < count($minuman); $i++) {
    echo $minuman[$i] . "<br>";
}

echo "<hr>";

foreach ($makanan as $isi) {
    echo $isi . "<br>";
}

echo "<hr>";

$i = 0;
while ($i < count($minuman)) {
    echo $minuman[$i] . "<br>";
    $i++;
}

echo "<hr>";
echo "<b>Menghapus Array</b><br>";
$hewan = [
    "Burung",
    "Kucing",
    "Ikan"
];

unset($hewan[1]);

foreach ($hewan as $isi) {
    echo $isi . "<br>";
}

echo "<hr>";
echo "<pre>";
print_r($hewan);
echo "</pre>";

echo "<hr>";
echo "<b>Menambah Array</b><br>";
$hobi = [
    "Membaca",
    "Bermain",
    "Bersama"
];

$hobi[3] = "Coding";
$hobi[] = "Olahraga";

foreach ($hobi as $isi) {
    echo $isi . "<br>";
}

echo "<hr>";
echo "<b>Mereplace Array</b><br>";
$hobi = [
    "Membaca",
    "Bermain",
    "Bersama"
];

$hobi[1] = "Coding";

foreach ($hobi as $isi) {
    echo $isi . "<br>";
}
echo "<pre>";
print_r($hobi);
echo "</pre>";

echo "<hr>";
echo "<b>Array Asosiatif</b><br>";
$artikel = [
    "judul" => "Belajar Pemrograman PHP",
    "Penulis" => "Digital Talent",
    "View" => 128
];

echo "<h2>" . $artikel["judul"] . "</h2>";
echo "<p>Oleh" . $artikel["Penulis"] . "</p>";
echo "<p>View" . $artikel["View"] . "</p>";
echo "<hr>";
echo "<b>Array Asosiatif</b><br>";
$email["subjek"] = "Kabar";
$email["pengirim"] = "lazuardy@gmail.com";
$email["isi"] = "Haloo, Kabar";

echo "<pre>";
print_r($email);
echo "</pre>";
