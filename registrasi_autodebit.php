<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrasi Autodebit</title>
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/registrasi_autodebit.css">
    <link rel="stylesheet" href="assets/css/general_style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
</head>

<body>
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

    <section class="content-regis_autodebit">
        <div class="headtxt">
            Registrasi Autodebit
        </div>
        
        <div class="head2txt">
            Pastikan kamu telah mengaktifkan layanan <br> 
            <b>Internet/Mobile Banking</b> 
        </div>
        <form action="simpan_autodebit.php" method="POST">
            <div class="form-autodebit">
                <div class="metode">
                    <div class="pembayaran">
                        <label><b>Metode Pembayaran</b></label> <br>
                        <?php
                                $options = array("Direct BNI Transfer", "Direct BCA Transfer", "Kartu Credit Lainnya");
                        ?>
                        <select class="drop_down" name="metpem" type="submit">                      
                            <?php foreach ($options as $option): ?>
                                <option value="<?php echo $option; ?>"selected="selected">
                                    <?php echo $option; ?>
                                </option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                    <div class="kredit">
                        <label><b>Nomor Kartu Kredit</b></label><br>
                        <input type="text" placeholder="Nomor Kartu Kredit" name="nokredit"><img src="assets/img/kartu.png">
                    </div>
                    <div class="ponsel">
                        <label><b>Nomor Ponsel</b></label><br>
                        <input type="" placeholder="Nomor Ponsel" name="noponsel"><img src="assets/img/telp.png">
                    </div>
                </div>
            </div>
       
            <div class="pemberhentian">
                <p>Pemberhentian autodebit hanya dapat dilakukan melalui layanan <br><b>Internet/Mobile Banking </b> pengguna</p>
            </div>
            <div class="syarat">
                <p>Dengan menekan tombol di bawah, Kamu menyetujui <b>Syarat & Ketentuan</b> Debit Instant</p>
            </div>
            <div class="button">
                <button class="btn-daftar" type="submit" value="Regis">Registrasi Autodebit</button><img src="assets/img/verifikasi.png">
            </div>
            <div class="copyrighttext">
                <p>Copyright © 2020 Berbaggi. All rights reserved</p>
            </div>
        </form>
    </section>

</body>

</html>