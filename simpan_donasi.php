
<?php 
include "koneksi.php";

    $jumlahdonasi=$_POST['jumlahdonasi'];
    $intervalwaktu=$_POST['intervalwaktu'];
    $tanggaldebit=$_POST['tanggaldebit'];
    $metode_debit=$_POST['metode_debit'];


    $simpan =mysqli_query($kon, "insert into donasi values('','$jumlahdonasi','$intervalwaktu','$tanggaldebit', '$metode_debit', NOW())");

    if ($simpan) {
<<<<<<< HEAD
      echo include "aktivitas_terakhir.php";
=======
        echo include "konfirmasipin_autodebit.php";
        //echo "BERHASIL";
>>>>>>> 6d16a1caa7273aa8475baae5f06176b221ab440b
            
      }
    else {
       echo include "autodebit.php";
        //echo "Gagal simpan data anggota";
        
}
?>