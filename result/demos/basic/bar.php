<?php
include("../../../config.php");
include("../../lib/inc/chartphp_dist.php");

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

$p->data = array(array(array("Team 1",$hasil1),array("Team 2", $hasil2),array("Team 3", $hasil3),array("Team 4", $hasil4),array("Team 5", $hasil5),array("Team 6", $hasil6),array("Team 7", $hasil7),array("Team 8", $hasil8),array("Team 9", $hasil9),array/*Test Team 10 (kosong)*/("Team 10", $hasil10)));

$p->chart_type = "bar";

// Common Options
$p->title = "Bar Chart";
$p->xlabel = "My X Axis";
$p->ylabel = "My Y Axis";
$p->export = false;
$p->options["legend"]["show"] = true;
$p->series_label = array('Q1','Q2','Q3'); 

$out = $p->render('c1');
?>
<!DOCTYPE html>
<html>
	<head>
		<script src="../../lib/js/jquery.min.js"></script>
		<script src="../../lib/js/chartphp.js"></script>
		<link rel="stylesheet" href="../../lib/js/chartphp.css">
	</head>
	<body>
		<div style="width:40%; min-width:450px;">
			<?php echo $out; ?>
		</div>
	</body>
</html>