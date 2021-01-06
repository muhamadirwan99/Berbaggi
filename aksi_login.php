<?php

include "koneksi.php";


$email=$_POST['email'];
$pass=$_POST['pass'];

$sql=mysqli_query($kon, "select * from register where email='$email' and pass='$pass' ");

$aksi=mysqli_num_rows($sql);
if($aksi>0){
	echo include "index.php";
}else {
	echo "Maaf, Email atau Password anda salah";
	echo include "login.php";
}





?>