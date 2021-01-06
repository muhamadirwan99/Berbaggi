
<?php 
include "koneksi.php";

    $metpem=$_POST['metpem'];
    $nokredit=$_POST['nokredit'];
    $noponsel=$_POST['noponsel'];


    $simpan =mysqli_query($kon, "insert into autodebit values('','$metpem','$nokredit','$noponsel')");

    if ($simpan) {
    	echo include "autodebit.php";
        //echo "BERHASIL";
            
      }
    else {
    	echo include "registrasi_autodebit.php";
        //echo "Gagal simpan data anggota";
        
}
?>