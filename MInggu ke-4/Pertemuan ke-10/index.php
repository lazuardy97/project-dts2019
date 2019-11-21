<?php
session_start();

$form_error = '';
if (isset($_POST['submit'])) {
    $email = $_POST['email'];
    $psw = $_POST['psw'];

    if ($email == 'lazuardy@gmail.com' and $psw == '123') {
        $_SESSION['email'] = $email;
        //echo "<script>alert('Berhasil Log In!');document.location='formlogin.php';</script>";
        header('Location: home.php');
    } else {
        echo "<script>alert('Gagal Log In! Cek Email dan Password anda !!!');document.location='index.php';</script>";
    }
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
                <a class="nav-item nav-link active" href="index.php"><span class="sr-only">(current)</span></a>
                <a class="nav-item nav-link" href="input_kosakata.php"></a>
            </div>
        </div>
    </nav>
    <br>
    <div class="container">
        <h2>Form Log In</h2>
        <form method="post" action="index.php">
            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" class="form-control" id="email" placeholder="Enter email" name="email">
            </div>
            <div class="form-group">
                <label for="pwd">Password:</label>
                <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="psw">
            </div>
            <div class="form-group form-check">
                <label class="form-check-label">
                    Don't have an account? <a href="register.php">Register</a>.
                </label>
            </div>
            <button type="submit" name="submit" class="btn btn-primary">Log In</button>
        </form>
    </div>

</body>

</html>