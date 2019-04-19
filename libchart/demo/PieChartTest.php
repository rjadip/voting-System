<?php
	$connect = mysqli_connect('localhost','root','','pemilihan') or die ('Tidak dapat terhubung ke database');
	$test 	= mysqli_query($connect, "SELECT * FROM tb_vote;");
	$select = mysqli_query($connect, "SELECT nama_team, count(id_team) AS ratings FROM tb_team INNER JOIN tb_vote on tb_team.id = tb_vote.id_team GROUP BY id_team;");	
	include "../libchart/classes/libchart.php";
	
	$chart = new PieChart();

	$dataSet = new XYDataSet();
	while($baris=mysqli_fetch_assoc($select))
	{
		$nama = $baris['nama_team'];
		$ratings = $baris['ratings'];
		$dataSet-> addPoint(new Point($nama, $ratings));
	}
	/*
	$dataSet->addPoint(new Point("Mozilla Firefox (80)", 80));
	$dataSet->addPoint(new Point("Konqueror (75)", 75));
	$dataSet->addPoint(new Point("Opera (50)", 50));
	$dataSet->addPoint(new Point("Safari (37)", 37));
	$dataSet->addPoint(new Point("Dillo (37)", 37));
	$dataSet->addPoint(new Point("Other (72)", 70));
	*/
	$chart->setDataSet($dataSet);

	$chart->setTitle("Hasil Voting");
	$chart->render("generated/demo3.png");
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<title>Libchart pie chart demonstration</title>
	<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-15" />
</head>
<body>
	<img alt="Pie chart"  src="generated/demo3.png" style="border: 1px solid gray;"/>
</body>
</html>