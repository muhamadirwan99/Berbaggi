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

    <body class="register1">
        <section class="register1">
            <div class="logo">
                <img src="assets/img/logo.png" alt="">
            </div>
            <div class="form" action="add_register1.php" method="post">
                <div>
                    <input class="nama" type="text" placeholder="Nama" name="nama" class="form-control">
                    <img src="assets/img/akun-black.png">
                </div>
                <div>
                    <input class="password" type="password" placeholder="Password" name="password" class="form-control">
                    <img src="assets/img/icon-password.svg">
                    <img class="closeeyes" src="assets/img/icon-closeeyes.svg">
                </div>
                <div>
                    <input class="email" type="text" placeholder="Email" name="email" class="form-control">
                    <img src="assets/img/email.png">
                </div>
            </div>
            <div class="button">
                <button class="btn-daftar" type="submit" name="kirim">Daftar</button>
                <div class="texttanya">
                    <p>Sudah punya akun? <b>Masuk di sini</b></p>
                </div>
            </div>
            <div class="copyrightr1">
                <p>Copyright © 2020 Berbaggi. All rights reserved</p>
            </div>
        </section>
    </body>
</html>