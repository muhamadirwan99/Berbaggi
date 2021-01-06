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

        <form action="simpan_donasi.php" method="POST">
            <div class="content">
                <div class="thetextfield">
                    <label>Jumlah Donasi</label> <br>
                    <input type="text" placeholder="Rp. 50.000" name="jumlahdonasi">
                </div>
                <div class="thedropdown">
                    <label>Interval Waktu Pembayaran</label> <br>
                    <?php
                        $options = array("Harian", "Bulanan", "Tahunan");
                    ?>
                    <select class="drop_down" name="intervalwaktu">                      
                        <?php foreach ($options as $option): ?>
                            <option value="<?php echo $option; ?>"selected="selected">
                                <?php echo $option; ?>
                            </option>
                        <?php endforeach; ?>
                    </select>
                </div>
                <div class="thedropdown">
                    <label>Tanggal Pendebitan</label> <br>
                    <?php
                        $options = array("1", "2", "3", "4", "5", "6", "7", "8", "9", "10", "11", "12", "13", "14", "15", "16", "17", "18", "19", "20"
                                         , "21", "22", "23", "24", "25", "26", "27", "28", "29", "30", "31");
                    ?>
                    <select class="drop_down" name="tanggaldebit">                      
                        <?php foreach ($options as $option): ?>
                            <option value="<?php echo $option; ?>"selected="selected">
                               <?php echo $option; ?>
                            </option>
                        <?php endforeach; ?>
                    </select>               
                </div>
                <div class="thedropdown">
                    <label>Metode Autodebit</label> <br>
                    <?php
                        $options = array("Automatis", "Manual");
                    ?>
                    <select class="drop_down" name="metode_debit">                      
                        <?php foreach ($options as $option): ?>
                            <option value="<?php echo $option; ?>"selected="selected">
                                <?php echo $option; ?>
                            </option>
                        <?php endforeach; ?>
                    </select>
                </div>
            </div>
            <div class="margin32px"></div>
            <!--Paragraph-->
            <div class="manual">
                <br>
                <p>Apabila kamu memilih manual, maka kamu akan mendapatkan notifikasi untuk menekan tombol donasi pada setiap tanggal yang telah kamu tentukan</p>
            </div>
     <div class="info-donasi">
                <p>  </p>
            </div>
            <div class="margin32px"></div>

            <!--Button Confirmation-->
            <div class="button">
                <button class="thebutton">Mulai Donasi</button>
            </div>
        </form>
        <!--Copyright Text-->
        <div class="copyrighttext">
            <p>Copyright © 2020 Berbaggi. All rights reserved</p>
        </div>

</body>

</html>