<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Riwayat</title>
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
                Riwayat
            </div>
            
            <div class="waktu-riwayat">
                <div class="bulan-riwayat">
                    <select class="drop_down_riwayat" name="bulan-rwyt" id="">
                        <option value="Januari">Januari</option>
                        <option value="Februari">Februari</option>
                        <option value="Maret">Maret</option>
                        <option value="April">April</option>
                        <option value="Mei">Mei</option>
                        <option value="Juni">Juni</option>
                        <option value="Juli">Juli</option>
                        <option value="Agustus">Agustus</option>
                        <option value="September">September</option>
                        <option value="Oktober">Oktober</option>
                        <option value="November">November</option>
                        <option value="Desember">Desember</option>
                    </select>
                </div>
                <div class="tahun-riwayat">
                    <select class="drop_down_thnrwyt" name="tahun-rwyt" id="">
                        <option value="2021">2021</option>
                        <option value="2020">2020</option>
                        <option value="2019">2019</option>
                        <option value="2018">2018</option>
                        <option value="2017">2017</option>
                        <option value="2016">2016</option>
                        <option value="2015">2015</option>
                        <option value="2014">2014</option>
                        <option value="2013">2013</option>
                        <option value="2012">2012</option>
                        <option value="2011">2011</option>
                        <option value="2010">2010</option>
                    </select>
                </div>
            </div>

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
                                }
                            ?>
                    
                </div>
            </div>
            <div class="footer-aktivitas_terakhir">
                Copyright © 2020 Berbaggi. All rights reserved
            </div>
        </section>
    </body>
</html>

