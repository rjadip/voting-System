<?php
$host = "localhost";
$user = "root";
$name = "pemilihan";
$pass ="";
$conn = mysqli_connect($host,$user,$pass); 
 
if ($conn) {
    $buka = mysqli_select_db ($conn,$name);
    if (!$buka) {
        die ("Database tidak dapat dibuka");    
    }
} else {
    die ("Server MySQL tidak terhubung");   
}
?>