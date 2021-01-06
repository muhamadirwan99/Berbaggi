
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
        <form action="aksi_login.php" method="POST">
        <div class="form">
            <div>
                <input class="email" type="text" placeholder="Email" name="email">
                <img src="assets/img/akun-black.svg">
            </div>
            <div>
                <input class="password" type="password" placeholder="Password" name="pass">
                <img src="assets/img/icon-password.svg">
                <img class="closeeyes" src="assets/img/icon-closeeyes.svg">
            </div>
            <div class="lupa-password">
                <p>Lupa password? <b>Klik di sini</b></p>
            </div>
        </div>

        <div class="button">
            <button class="btn-masuklogin" type="submit" >Masuk</button>
            <div class="akun-medsos">
                <p>Atau masuk dengan akun:</p>
            </div>
            <div class="medsos">
                <a href="https://www.google.com/?hl=id"><img src="assets/img/medsos.png"></a>
            </div>
            <div class="daftar-disini">
                <p>Belum punya akun? <a href="register1.php">Daftar di sini</a></p>
            </div>
        </div>
        </form>

        <div class="copyright">
            <p>Copyright © 2020 Berbaggi. All rights reserved</p>
        </div>
        

    </section>

</body>

</html>