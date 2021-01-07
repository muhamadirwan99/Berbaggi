<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Aktivitas Terakhir</title>
        <link rel="stylesheet" href="assets/css/style.css">
        
        
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
        
        <section class="content-aktivitas_terakhir">
            <div class="txt-head">
                Aktivitas Terakhir
            </div>
            <form class="form-pin">
                <div>
                    <input class="input-search_aktivitas" type="text" placeholder="Cari dalam 48 jam terakhir">
                    <img class="icon-search_aktivitas" src="/assets/img/icon-searchdark.svg" alt="">
                </div>
            </form>
            <div class="history">
                <div class="content-history">
                   
                        <?php
                            include "koneksi.php";
                            $no=1;
                            $sql = mysqli_query($kon, "select * from donasi");
                            while($tampil = mysqli_fetch_array($sql)){
                        ?>  <div class="txt-history"> 
                                <?php
                                    echo "
                                        <b> Hamba Tuhan </b> mendonasikan <b> Rp. $tampil[jumlah_donasi] </b> dengan metode
                                        <b> $tampil[metode_debit] </b> <br>
                                            $tampil[waktu]

                                    ";
                                    $no++ 
                                ?>
                            </div>
                            <?php
                                };
                            ?>
                    
                </div>
            </div>
            <div class="footer-aktivitas_terakhir">
                Copyright © 2020 Berbaggi. All rights reserved
            </div>
        </section>
    </body>
</html>

