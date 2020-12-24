<?php 
include "koneksi.php";

if (isset($_POST['kirim'])){
    $nama=$_POST['nama'];
    $pass=$_POST['pass'];
    $email=$_POST['email'];


    $simpan ="INSERT INTO register(nama,pass,email) VALUES ('$nama','$pass','$email')"; 
    $result=mysqli_query($kon,$simpan);

    if ($result) {
        echo "Berhasil simpan data anggota";
        exit;
      }
    else {
        echo "Gagal simpan data anggota";
        exit;
    }  
    // if($result){
    //     echo "<script>alert('Data telah berhasil disimpan');window.location='register1.php'<script>";
    // }

}
?>