<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register 1</title>
    <link rel="stylesheet" href="assets/css/register.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
</head>

<body style="background-color: #fafafa;">
    <section class="register1">
        <div class="logo">
            <img src="assets/img/logo.png" alt="">
        </div>
        <form action="simpan_register.php" method="POST">
        <div class="form">
            <div>
                <input class="nama" type="text" placeholder="Nama" name="nama">
                <img src="assets/img/akun-black.svg">
            </div>
            <div>
                <input class="email" type="text" placeholder="Email" name="email">
                <img src="assets/img/email.png">
            </div>
            <div>
                <input class="password" type="password" placeholder="Password" name="pass">
                <img src="assets/img/icon-password.svg">
                <img class="closeeyes" src="assets/img/icon-closeeyes.svg">
            </div>
        </div>
        <div class="button">
            <input class="btn-daftar" type="submit" value="Daftar"></input>
            <div class="texttanya">
                <p>Sudah punya akun? <a href="login.php">Masuk di sini</a></p>
            </div>
        </div>
        <div class="copyright">
            <p>Copyright © 2020 Berbaggi. All rights reserved</p>
        </div>
        </form>
    </section>
</body>

</html>