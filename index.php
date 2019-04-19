<!doctype html>
<html>
<head>
<link rel="stylesheet" href="css/style.css"/>
<meta charset="utf-8">
<title>Signup Pemilihan Online</title>
  <link rel="stylesheet" href="jquery-ui/jquery-ui.css">
  <script src="jquery-ui/external/jquery/jquery.js"></script>
  <script src="jquery-ui/jquery-ui.js"></script>
  <script>
  $(function() {
    $( "#datepicker" ).datepicker({
      changeMonth: true,
      changeYear: true
    });
  });
  </script>
<!--
<link rel="stylesheet" href="/resources/demos/style.css">
-->
</head>
<body>
<!--<h2>Sign Up</h2>-->
<div id="inputan">
	<div class="transbox">
	  <div class="centering">
	    <form style="margin-top:10px;" method="post" action="vote.php">
			<input style="margin-top:10px;" type="text" name="username" placeholder="Nama Lengkap" title="username" pattern="(^[a-zA-Z\ ]{1,})" class="textfield" required><br><br>
			<input type="text" name="tempat" placeholder="Tempat Lahir" title="tempat" pattern="^[a-zA-Z]{1,}" class="date" required/>
            <input type="text" name="tgl_lahir" placeholder="Tanggal Lahir" title="tgl_lahir" id="datepicker" class="date" pattern="([0-9]{2}[/][0-9]{2}[/][0-9]{4})" required><br><br> 
   			
	        <input style="margin-left: 35px;" type="submit" name="register" value="Register" class="button"><br>
	        </form>
		</div>
  	</div>
</div>
</body>
</html>
<?php

?>