
<?php 
include "koneksi.php";

    $metpem=$_POST['metpem'];
    $nokredit=$_POST['nokredit'];
    $noponsel=$_POST['noponsel'];


    $simpan =mysqli_query($kon, "insert into autodebit values('','$metpem','$nokredit','$noponsel')");

    if ($simpan) {
<<<<<<< HEAD
    	echo include "autodebit.php";
        //echo "BERHASIL";
=======
        echo include "autodebit.php";
>>>>>>> dc005be234b88c274e6a734ac74e53d140da02ed
            
      }
    else {
    	echo include "registrasi_autodebit.php";
        //echo "Gagal simpan data anggota";
        
}
?>