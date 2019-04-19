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

$p->data = array(array(array("KribCorn",$hasil1),array("Ars Ligna", $hasil2),array("Spasia", $hasil3),array("Krobi", $hasil4),array("Bocil (Bolu Centil)", $hasil5),array("B.A.Q", $hasil6),array("Sushiban", $hasil7),array("Cheese Pong", $hasil8),array("Warung Es Batavia", $hasil9),array("Potaco", $hasil10),array("Nakal (Nasi Lokal)", $hasil11),array("Magaza", $hasil12),array("SIRchick",$hasil13),array("Sandwitch", $hasil14)));

//$p->data = array(array(array("1",$hasil1),array("2", $hasil2),array("3", $hasil3),array("4", $hasil4),array("5", $hasil5),array("6", $hasil6),array("7", $hasil7),array("8", $hasil8),array("9", $hasil9),array("10", $hasil10),array("11", $hasil11),array("12", $hasil12),array("13",$hasil13),array("14", $hasil14)));

$p->chart_type = "bar";

// Common Options
$p->title = "Hasil Voting";
$p->xlabel = "Nama Team";
$p->ylabel = "Jumlah Pemilih";
$p->export = false;
$p->options["legend"]["show"] = true;
$p->series_label = array('Q1','Q2','Q3'); 
$p->width = "500px";
$p->height = "600px";
//$p->direction="300000px";
//$p->intervals="20px";
//$p->y_tick_interval="20px";
$p->direction='20px';

$out = $p->render('c1');
?> 
<!DOCTYPE html> 
<html> 
    <head> 
        <script src="result/lib/js/jquery.min.js"></script> 
        <script src="result/lib/js/chartphp.js"></script> 
        <link rel="stylesheet" href="result/lib/js/chartphp.css"> 
    </head>
    <body>
<!--		<div style="margin:50px; size:20%"> -->
        <div style="width:20%; min-width:450px;">
        </div> 
        </div>
    </body> 
</html>
<?php echo $out; ?>