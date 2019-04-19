<?php
include('konek.php');
session_start();
//tangkap data dari form login
$username = $_POST['username'];
$password = md5($_POST['password']);

//untuk mencegah sql injection

//kita gunakan mysql_real_escape_string
$q = mysqli_query($conn,"SELECT * FROM admin WHERE username='$username' AND password='$password'");
 
if (mysqli_num_rows($q) == 1) {
    //kalau username dan password sudah terdaftar di database
    //buat session dengan nama username dengan isi nama user yang login
    $_SESSION['username'] = $username;
     
    //redirect ke halaman index
    header('location:result.php');
} else {
    //kalau username ataupun password tidak terdaftar di database
 echo "<script>alert('Wrong Username or Password');";
 header("location:admin.php");
}
?>