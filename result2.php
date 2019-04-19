<?php
include("config.php");  
  
include("result/lib/inc/chartphp_dist.php"); 

$p = new chartphp(); 

$kueri = mysqli_query($connect, "SELECT id_team FROM tb_vote WHERE id_team = 1");
$hasil1 = mysqli_num_rows($kueri);

$kueri = mysqli_query($connect, "SELECT id_team FROM tb_vote WHERE id_team = 2");
$hasil2 = mysqli_num_rows($kueri);

$kueri = mysqli_query($connect, "SELECT id_team FROM tb_vote WHERE id_team = 3");
$hasil3 = mysqli_num_rows($kueri);

$kueri = mysqli_query($connect, "SELECT id_team FROM tb_vote WHERE id_team = 4");
$hasil4 = mysqli_num_rows($kueri);

$kueri = mysqli_query($connect, "SELECT id_team FROM tb_vote WHERE id_team = 5");
$hasil5 = mysqli_num_rows($kueri);

$kueri = mysqli_query($connect, "SELECT id_team FROM tb_vote WHERE id_team = 6");
$hasil6 = mysqli_num_rows($kueri);

$kueri = mysqli_query($connect, "SELECT id_team FROM tb_vote WHERE id_team = 7");
$hasil7 = mysqli_num_rows($kueri);

$kueri = mysqli_query($connect, "SELECT id_team FROM tb_vote WHERE id_team = 8");
$hasil8 = mysqli_num_rows($kueri);

$kueri = mysqli_query($connect, "SELECT id_team FROM tb_vote WHERE id_team = 9");
$hasil9 = mysqli_num_rows($kueri);

$kueri = mysqli_query($connect, "SELECT id_team FROM tb_vote WHERE id_team = 10");
$hasil10 = mysqli_num_rows($kueri);

$kueri = mysqli_query($connect, "SELECT id_team FROM tb_vote WHERE id_team = 11");
$hasil11 = mysqli_num_rows($kueri);

$kueri = mysqli_query($connect, "SELECT id_team FROM tb_vote WHERE id_team = 12");
$hasil12 = mysqli_num_rows($kueri);

$kueri = mysqli_query($connect, "SELECT id_team FROM tb_vote WHERE id_team = 13");
$hasil13 = mysqli_num_rows($kueri);

$kueri = mysqli_query($connect, "SELECT id_team FROM tb_vote WHERE id_team = 14");
$hasil14 = mysqli_num_rows($kueri);

$p->data = array(array(array("KribCorn",$hasil1),array("Ars Ligna", $hasil2),array("Spasia", $hasil3),array("Krobi", $hasil4),array("Bocil (Bolu Centil)", $hasil5),array("B.A.Q", $hasil6),array("Sushiban", $hasil7),array("Cheese Pong", $hasil8),array("Warung Es Batavia", $hasil9),array("Potaco", $hasil10),array("Nakal (Nasi Lokal)", $hasil11),array("Magaza", $hasil12),array("Sir Chick",$hasil13),array("Sandwitch", $hasil14)));
$p->chart_type = "pie"; 

// Common Options 
$p->title = "Hasil Voting"; 
$p->width = "1000px";
$p->height = "500px";

$out = $p->render('c1'); 
?>
<!DOCTYPE html> 
<html> 
    <head> 
        <script src="result/lib/js/jquery.min.js"></script> 
        <script src="result/lib/js/chartphp.js"></script> 
        <link rel="stylesheet" href="result/lib/js/chartphp.css"> 

    <style> 
        /* white color data labels */ 
        .jqplot-data-label{color:white;} 
    </style> 
    </head> 
     
    <body> 
        <div style="width:40%; min-width:1000px;"> 
        <?php echo $out; ?> 
        </div> 
    </body> 
</html>