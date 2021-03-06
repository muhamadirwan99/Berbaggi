<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profil</title>
    <link rel="stylesheet" href="assets/css/general_style.css">
    <link rel="stylesheet" href="assets/css/navigation_bar.css">
    <link rel="stylesheet" href="assets/css/profil.css">
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
                    <a href="registrasi_autodebit.php">
                        <img class="nav-icon" src="assets/img/icon-donasi.svg" alt="">                        
                    </a>
                    <div class="nav-teks">Donasi</div>
                </div>
                <div class="nav-bundle">
                    <a href="aktivitas_terakhir.php">
                        <img class="nav-icon" src="assets/img/icon-search.svg" alt="">
                    </a>
                    <div class="nav-teks">Aktivitas</div>
                </div>
            </div>
            <div class="kanan">
                <div class="nav-bundle">
                    <a href="riwayat.php">
                        <img class="nav-icon" src="assets/img/icon-riwayat.svg" alt="">
                    </a>
                    <div class="nav-teks">Riwayat</div>
                </div>
                <div class="nav-bundle">
                    <a href="profil.php">
                        <img class="nav-icon" src="assets/img/icon-akun.svg" alt="">
                    </a>
                    <div class="nav-teks">Akun</div>
                </div>
            </div>
        </nav>
    </header>

    <section class="content-profil">
        <!--Title-->
        <div class="title">
            <h1>Profil</h1>
        </div>
        <!--Profil-->
        <div class="content-profil">
            <!--Avatar-Identity-->
            <div class="identity">
                <!--Avatar-->
                <img src="assets/img/avatar.png" alt="Avatar" class="avatar">
                <!--Name-->
                <div class="name">
                    <p>Raihan I T</p>
                </div>
                <!--Email-->
                <div class="email">
                    <p>raytumb.design@gmail.com</p>
                </div>
                <!--Log Out Button-->
                <div class="keluar-akun">
                    <a href="login.php">
                        <img src="assets/img/exit.svg" alt="Exit" class="icon-exit">
                        <div class="text-exit">
                            <p>Keluar Akun</p>
                        </div>
                    </a>
                </div>
                <!--Phone Number-->
                <div class="more-info">
                    <div class="info">
                        <p>Nomor Ponsel</p>
                    </div>
                    <div class="desc">
                        <p>(+62) 89506651503</p>
                    </div>
                </div>
                <!--Phone Number-->
                <div class="more-info">
                    <div class="info">
                        <p>Alamat</p>
                    </div>
                    <div class="desc">
                        <p>Taman Sentosa Blok H, Cikarang Selatan, Kab. Bekasi, Jawa Barat</p>
                    </div>
                </div>
                <!--Button-->
                <!--Button Blue-->
                <div class="button">
                    <button class="thebutton-blue">Atur Profil</button>
                </div>
                <!--Button White-->
                <div class="button">
                    <button class="thebutton-white-one"><a href="konfirmasipin_autodebit.php">Ubah PIN</a></button>
                </div>
                <div class="button">
                    <button class="thebutton-white-two"><a href="konfirmasipin_autodebit.php">Ubah Password</a></button>
                </div>

                <!--Latest Donation-->
                <div class="latest-donation">
                    <!--Title Latest Donation-->
                    <div class="donasi-terakhir">
                        <p>Donasi Terakhir</p>
                    </div>
                    <!--Thumbnail-->
                    <img src="assets/img/latest-donation.png" alt="Thumbnail" class="thumbnail">
                    <!--Detail-->
                    <div class="detail">
                        <div class="detail-desc">
                            <p>Pengiriman donasi kepada<br>Keluarga <b>Bpk. Nama Keluarga</b></p>
                        </div>
                        <div class="detail-tags">
                            <p>Pengirim
                                <br> Tunai
                                <br> Barang
                                <br> Total
                                <br>
                                <br> Metode
                                <br> No. Rek
                            </p>
                        </div>
                        <div class="detail-data">
                            <p>: <b>Hamba Tuhan</b>
                                <br>: <b>Rp. 50.000</b>
                                <br>: <b>Beras</b> (Rp. 50.000)
                                <br>: <b>Rp. 100.000</b>
                                <br>
                                <br>: <b>Direct BNI Transfer</b>
                                <br>: <b>******909</b>
                            </p>
                        </div>
                    </div>
                    <div class="detail-tanggal">
                        <p>20 Desember 2020</p>
                    </div>

                </div>
            </div>
            <!--Copyright Text-->
            <div class="copyrighttext">
                <p>Copyright © 2020 Berbaggi. All rights reserved</p>
            </div>
        </div>
    </section>

</body>

</html>