<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Autodebit</title>
    <link rel="stylesheet" href="assets/css/general_style.css">
    <link rel="stylesheet" href="assets/css/navigation_bar.css">
    <link rel="stylesheet" href="assets/css/autodebit.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
</head>

<body>
    <!--Navigation-->
    <header class="header">
        <nav>
            <div class="kiri">
                <div class="nav-logo">
                    <a href="index.php">
                        <img src="assets/img/logo.svg" alt="">
                    </a>
                </div>
                <div class="nav-bundle">
                    <a href="registrasi_autodebit.html">
                        <img class="nav-icon" src="assets/img/icon-donasi.svg" alt="">                        
                    </a>
                    <div class="nav-teks">Donasi</div>
                </div>
                <div class="nav-bundle">
                    <a href="aktivitas_terakhir.html">
                        <img class="nav-icon" src="assets/img/icon-search.svg" alt="">
                    </a>
                    <div class="nav-teks">Aktivitas</div>
                </div>
            </div>
            <div class="kanan">
                <div class="nav-bundle">
                    <a href="riwayat.html">
                        <img class="nav-icon" src="assets/img/icon-riwayat.svg" alt="">
                    </a>
                    <div class="nav-teks">Riwayat</div>
                </div>
                <div class="nav-bundle">
                    <a href="profil.html">
                        <img class="nav-icon" src="assets/img/icon-akun.svg" alt="">
                    </a>
                    <div class="nav-teks">Akun</div>
                </div>
            </div>
        </nav>
    </header>

    <section class="content-autodebit">
        <!--Title-->
        <div class="title">
            <h1>Autodebit</h1>
        </div>
        <!--Form Autodebit-->
        <div class="content">
            <div class="thetextfield">
                <label>Metode Pembayaran</label> <br>
                <input type="text" placeholder="Rp. 50.000">
            </div>
            <div class="thedropdown">
                <label>Interval Waktu Pembayaran</label> <br>
                <select class="drop_down" name="interval" id="">
                    <option value="Harian">Harian</option>
                    <option value="Bulanan">Bulanan</option>
                    <option value="Tahunan">Tahunan</option>
                </select>
            </div>
            <div class="thedropdown">
                <label>Tanggal Pendebitan</label> <br>
                <select class="drop_down" name="tanggal" id="">
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                    <option value="6">6</option>
                    <option value="7">7</option>
                    <option value="8">8</option>
                    <option value="9">9</option>
                    <option value="10">10</option>
                    <option value="11">11</option>
                    <option value="12">12</option>
                    <option value="13">13</option>
                    <option value="14">14</option>
                    <option value="15">15</option>
                    <option value="16">16</option>
                    <option value="17">17</option>
                    <option value="18">18</option>
                    <option value="19">19</option>
                    <option value="20">20</option>
                    <option value="21">21</option>
                    <option value="22">22</option>
                    <option value="23">23</option>
                    <option value="24">24</option>
                    <option value="25">25</option>
                    <option value="26">26</option>
                    <option value="27">27</option>
                    <option value="28">28</option>
                    <option value="29">29</option>
                    <option value="30">30</option>
                    <option value="31">31</option>
                </select>                
            </div>
            <div class="thedropdown">
                <label>Metode Autodebit</label> <br>
                <select class="drop_down" name="metode" id="">
                    <option value="Automatis">Automatis</option>
                    <option value="Manual">Manual</option>
                </select>
            </div>
        </div>

        <!--Paragraph-->
        <div class="manual">
            <p>Apabila kamu memilih manual, maka kamu akan mendapatkan notifikasi untuk menekan tombol donasi pada setiap tanggal yang telah kamu tentukan</p>
        </div>
        <div class="info-donasi">
            <p>Berdasarkan dari data di atas, kamu akan memberikan donasi sebesar <b>Rp. 50.000</b> pada setiap tanggal <b>17</b></p>
        </div>

        <!--Button Confirmation-->
        <div class="button">
            <button class="thebutton">Mulai Donasi</button>
        </div>

        <!--Copyright Text-->
        <div class="copyrighttext">
            <p>Copyright © 2020 Berbaggi. All rights reserved</p>
        </div>

</body>

</html>