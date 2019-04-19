<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<meta http-equiv="content-type" content="text/html; charset=utf-8"/>
		<title>Pie Chart Demo (Google VAPI) - http://codeofaninja.com/</title>
	</head>
	
<body style="font-family: Arial;border: 0 none;">
	<!-- where the chart will be rendered -->
	<div id="visualization" style="width: 600px; height: 400px;"></div>

	<?php

	//include database connection
	include '../../config.php';

	//query all records from the database
	$query = "select * from tb_team";
	$query2 = "select count(id_team) as ratings from tb_team INNER join tb_vote on tb_team.id = tb_vote.id_team group by nama_team";

	//execute the query
	$result = $connect->query( $query );
	$result2 = $connect->query($query2);

	//get number of rows returned
	$num_results = $result->num_rows;
	$num_results2 = $result2->num_rows;
	$result = $result;

	if( $num_results > 0){

	?>
		<!-- load api -->
		<script type="text/javascript" src="../../../javascript/jsapi.js"></script>
		
		<script type="text/javascript">
			//load package
			google.load('visualization', '1', {packages: ['corechart']});
		</script>

		<script type="text/javascript">
			function drawVisualization() {
				// Create and populate the data table.
				var data = google.visualization.arrayToDataTable([
					['PL', 'Ratings'],
					<?php
					while( $row = $result->fetch_assoc() ){
						extract($row);
						echo "['{$nama_team}', {$id}],";
					}
					?>
				]);

				// Create and draw the visualization.
				new google.visualization.PieChart(document.getElementById('visualization')).
				draw(data, {title:"Hasil Voting"});
			}

			google.setOnLoadCallback(drawVisualization);
		</script>
	<?php

	}else{
		echo "Tidak Ada Data";
	}
	?>
	
</body>
</html>