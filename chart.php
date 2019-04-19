<?php
	$connect = mysqli_connect('localhost','root','','pemilihan') or die ('Tidak dapat terhubung ke database');
	$test 	= mysqli_query($connect, "SELECT * FROM tb_vote;");
	$select = mysqli_query($connect, "SELECT nama_team, count(id_team) AS ratings FROM tb_team INNER JOIN tb_vote on tb_team.id = tb_vote.id_team GROUP BY id_team;");
	include "libchart/libchart/classes/libchart.php";

	$chart = new VerticalBarChart();
	$dataSet = new XYDataSet();
	while($baris=mysqli_fetch_assoc($select))
	{
		$nama = $baris['nama_team'];
		$ratings = $baris['ratings'];
		$dataSet-> addPoint(new Point($nama, $ratings));
	}
/*
	$dataSet->addPoint(new Point("Jan 2005", 273));
	$dataSet->addPoint(new Point("Feb 2005", 421));
	$dataSet->addPoint(new Point("March 2005", 642));
	$dataSet->addPoint(new Point("April 2005", 800));
	$dataSet->addPoint(new Point("May 2005", 1200));
	$dataSet->addPoint(new Point("June 2005", 1500));
	$dataSet->addPoint(new Point("July 2005", 2600));
*/
	$chart->setDataSet($dataSet);

	$chart->setTitle("Hasil Voting");
	$chart->render("libchart/demo/generated/demo1.png");
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<title>Libchart vertical bars demonstration</title>
	<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-15" />
</head>
<body>
	<img alt="Vertical bars chart" src="libchart/demo/generated/demo1.png" style="border: 1px solid gray;"/>
</body>
</html>