<?php

//include "koneksi.php";
require "koneksi.php";


if(isset($_POST["login"])){
    $email=$_POST['email'];
    $pass=$_POST['pass'];

   $hasil= mysqli_query($kon,"select*from register where email='$email'");

    //cek email
    if(mysqli_num_rows($hasil)===1){
        $row=mysqli_fetch_assoc($hasil);
        if(password_verify($pass,$row['pass'])){
            header("Location:index.php");
            exit;
            // echo include "index.php";
            
        }
    }
}

?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="assets/css/login.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
</head>


<body style="background-color: #fafafa;">
    <section class="login">
        <div class="logo">
            <img src="assets/img/logo.png" alt="">
        </div>

      

        <form action= "index.php" method="POST">
        <div class="form">
            <div>
                <input class="email" type="text" placeholder="Email" name="email">
                <img src="assets/img/akun-black.svg">
            </div>
            <div>
                <input class="password" type="pass" placeholder="Password" name="pass">
                <img src="assets/img/icon-password.svg">
                <img class="closeeyes" src="assets/img/icon-closeeyes.svg">
            </div>
            <div class="lupa-password">
                <p>Lupa password? <b>Klik di sini</b></p>
            </div>
        </div>

        <div class="button">
            <button href="https://google.com" class="btn-masuklogin" type="submit" name="login">Masuk</button>
            <div class="akun-medsos">
                <p>Atau masuk dengan akun:</p>
            </div>
            <div class="medsos">
                <img src="assets/img/medsos.png">
            </div>
            <div class="daftar-disini">
                <p>Belum punya akun? <a href="register1.php">Daftar di sini</a></p>
            </div>
        </div>

        <div class="copyright">
            <p>Copyright © 2020 Berbaggi. All rights reserved</p>
        </div>
        </form>

    </section>

</body>

</html>