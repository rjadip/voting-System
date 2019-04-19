<?php require('config.php'); ?>

<!doctype html>
<html>
<head>
  <meta http-equiv="Content-Type" content="text/html;charset=utf-8">
  <title>Data sudah ada</title>
  <link rel="shortcut icon" href="favicon.ico">
  <link rel="icon" href="favicon.ico">
  <link rel="stylesheet" type="text/css" media="all" href="css/ada.css">
<!--  <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js">
-->
<script type="text/javascript" src="jquery-ui/jquery-ui.min.js">
</script>
</head>
<body>
  <div id="w">
    <div id="content">
      <!-- Icons source http://dribbble.com/shots/913555-Flat-Web-Elements -->
      <div class="notify errorbox">
        <h1>Warning!</h1>
        <span class="alerticon"><img src="icon/error.png" alt="error" /></span>
        <?php
		session_start();
		$tampilkan = $_SESSION['namaterdaftar'];
		echo "<center>Maaf nama " . $tampilkan." Sudah terdaftar</center>";
		?>
      </div>
    </div><!-- @end #content -->
  </div><!-- @end #w -->
<meta http-equiv="refresh" content="3;url=index.php">
</body>
</html>