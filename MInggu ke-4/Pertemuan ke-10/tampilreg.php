<?php
session_start();
//error_reporting(0);
$namadp = $_POST['namadp'];
$namabk = $_POST['namabk'];
$username = $_POST['username'];
$email = $_POST['email'];

// echo "Nama depan anda " . $namadp . "<br>";
// echo "Nama belakang anda " . $namabk . "<br>";
// echo "Username anda " . $username . "<br>";
// echo "Email anda " . $email . "<br>";
?>
<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

</head>

<body>
    <div class="container">
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Nama Depan</th>
                    <th scope="col">Nama Belakang</th>
                    <th scope="col">Email</th>
                    <th scope="col">Username</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th scope="row">1</th>
                    <td><?= $namadp ?></td>
                    <td><?= $namabk ?></td>
                    <td><?= $email ?></td>
                    <td><?= "@" . $username ?></td>
                </tr>
            </tbody>
        </table>
    </div>
</body>

</html>