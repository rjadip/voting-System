<?php
//Deklarasikan Variabel Default Untuk Konek Ke Database
  	$host = "localhost";
  	$user = "root";
  	$password = "";
 	$db = "tugas";

  //Hubungkan Ke Database
	$connect = mysqli_connect($host, $user, $password, $db) or die("Tidak Dapat Terhubung Ke Databsae");
?>