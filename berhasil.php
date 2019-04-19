<?php require('config.php'); ?>
<?php if(isset($_POST['satu']) || isset($_POST['dua']) || isset($_POST['tiga']) || isset($_POST['empat']) || isset($_POST['lima']) || isset($_POST['enam']) || isset($_POST['tujuh']) || isset($_POST['delapan']) || isset($_POST['sembilan']) || isset($_POST['sepuluh']) || isset($_POST['sebelas']) || isset($_POST['duabelas']) || isset($_POST['tigabelas']) || isset($_POST['empatbelas'])) { //pembuka if bagian atas
		//statement pemberi angka+1
		if(isset($_POST['satu']))
		{
			$id_team = 1;
		}
		elseif (isset($_POST['dua']))
		{
			$id_team = 2;
		}
		elseif(isset($_POST['tiga']))
		{
			$id_team = 3;
		}
		elseif(isset($_POST['empat']))
		{
			$id_team = 4;
		}
		elseif(isset($_POST['lima']))
		{
			$id_team = 5;
		}
		elseif(isset($_POST['enam']))
		{
			$id_team = 6;
		}
		elseif(isset($_POST['tujuh']))
		{
			$id_team = 7;
		}
		elseif(isset($_POST['delapan']))
		{
			$id_team = 8;
		}
		elseif(isset($_POST['sembilan']))
		{
			$id_team = 9;
		}
		elseif(isset($_POST['sepuluh']))
		{
			$id_team = 10;
		}
		elseif(isset($_POST['sebelas']))
		{
			$id_team = 11;
		}
		elseif(isset($_POST['duabelas']))
		{
			$id_team = 12;
		}
		elseif(isset($_POST['tigabelas']))
		{
			$id_team = 13;
		}
		else
		{
			$id_team = 14;
		}
	?>
<!doctype html>
<html>
<head>
  <meta http-equiv="Content-Type" content="text/html;charset=utf-8">
  <link rel="shortcut icon" href="favicon.ico">
  <link rel="icon" href="favicon.ico">
  <link rel="stylesheet" type="text/css" media="all" href="css/ada.css">
<!--  <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js">
-->
<script type="text/javascript" src="jquery-ui/jquery-ui.min.js">
</script>
<title>Berhasil</title>
</head>
<body>
	<div class="notify errorbox">
<center>        <h1>Terima kasih!</h1> </center>
    	<span class="alerticon"><img src="icon/yes.png" alt="error" /></span>
	</div><!-- @end #content -->
  </div><!-- @end #w -->
<meta http-equiv="refresh" content="3;url=index.php">
<?php
		session_start();
		$nama		= $_SESSION['username'];
		$tempat		= $_SESSION['tempat'];
		$tgl_lahir	= $_SESSION['tgl_lahir'];
		$email		= $_SESSION['email'];
		$ipaddress	= $_SESSION['ipaddress'];
		$tanggal	= $_SESSION['tanggal'];
		
//		echo "$nama $tempat $tgl_lahir $email $ipaddress $tanggal";
		$insert = "INSERT INTO `tb_vote` (`id`, `nama`, `tempat`, `tgl_lahir`, `ipaddress`, `email`, `id_team`, `created_on`) VALUES (NULL, '$nama', '$tempat', '$tgl_lahir', '$ipaddress', '$email', '$id_team', '$tanggal')";

    //masukkan ke database
    	$masukkan = mysqli_query($connect, $insert);
    	if($masukkan)
		{
//			session_destroy();
//	    	echo "Terima Kasih sudah memberi Voting";
		}
		else
		{
//			session_destroy();
   	 		echo "Tidak Berhasil Menambahkan Jumlah Voting";
		}
	} 
	else
	{
		header("location:index.php");
	}
     	 	//menambahkan jumlah voting pada tabel team
/*     	 	$jumlahvotingkueri = "UPDATE tb_team set jumlah_voting = jumlah_voting + 1 where id_team = $id_team";
     	 	$jumlahvoting = mysqli_query($connect, $jumlahvotingkueri);

     	 	if($jumlahvoting) {
     	 		echo "<center><h1>Terima Kasih sudah memberi Voting :)</h1></center>";
     	 	} else {
     	 		echo "Tidak Berhasil Menambahkan Jumlah Voting";
     	 	}
		}
    	
		else
		
		{
     	 echo "Gagal Insert";
   		}
*/
?>
<meta http-equiv="refresh" content="3;url=index.php">
</body>
</html>
<?php
/*
} 
	else
	{
		header("location:signup2.php");
	}
*/	
?>