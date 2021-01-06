<?php
$host="localhost";
$user="root";
$password="";
$db="berbaggi";

$kon = mysqli_connect($host,$user,$password);
$select= mysqli_select_db($kon,$db);
if ($select){
	  echo "";
}
else {
	echo "Gagal koneksi";
}

?>
