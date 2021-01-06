
<?php 
include "koneksi.php";

    $nama=$_POST['nama'];
    $email=$_POST['email'];
    $pass=$_POST['pass'];


    $simpan =mysqli_query($kon, "insert into register values('','$nama','$email','$pass')");

    if ($simpan) {
        echo include "register2.php";
            
      }
    else {
        echo "Gagal simpan data anggota";
        
     
    // if($result){
    //     echo "<script>alert('Data telah berhasil disimpan');window.location='register1.php'<script>";
    // }

}
?>