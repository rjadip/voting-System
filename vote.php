<?php
//  include"fungsi.php";
  include"config.php";
//Kalau dia Tidak Daftar, Maka Tidak Akan Melihat Form Ini
if(isset($_POST['register'])) {
    $nama 		= strtolower($_POST['username']);
    $tempat 	= strtolower($_POST['tempat']);
    $tgl_lahir 	= $_POST['tgl_lahir'];
//	$email		= strtolower($_POST['email']);
	$ipaddress	= getHostByName(php_uname('n'));
	$tanggal	= date('Y-m-d H:i:s', time()+18000);
	
    //memulai sesion
    session_start();

    //menyimpan ke session
    $_SESSION['username']	= $nama;
    $_SESSION['tempat']		= $tempat;
    $_SESSION['tgl_lahir']	= $tgl_lahir;
//	$_SESSION['email']		= $email;
	$_SESSION['ipaddress']	= $ipaddress;
	$_SESSION['tanggal']	= $tanggal;
//	echo "$nama $tempat $tgl_lahir $ipaddress $tanggal";

//	cek apakah sudah terdaftar atau belum
    $cekkuery = "SELECT nama, tempat, tgl_lahir FROM tb_vote where nama = '$nama' && tempat='$tempat' && tgl_lahir ='$tgl_lahir'";
    $cekhasil = mysqli_query($connect, $cekkuery);
    if($baris = mysqli_fetch_assoc($cekhasil))
	{
      $namaterdaftar = $baris['nama'];
      $_SESSION['namaterdaftar'] = $namaterdaftar;
	  header("location:ada.php");
    }
    else
	{	
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Voting Form</title>
    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    
    <!-- Hover Gambar CSS -->
    <link href="css/hovergambar.css" rel="stylesheet">
    
    <!-- Custom CSS -->
    <link href="css/3-col-portfolio.css" rel="stylesheet">
	
    <!-- HOVER & Gambar-->
    <link href="css/gambar.css" rel="stylesheet">
    <link href="css/hover2.css" rel="stylesheet">
	<link href="css/hover3.css" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>
<body>
    <!-- Page Content -->
    <div class="container">
        <!-- Page Header -->
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Vote your best team here!<br>
<!--                    <small>Vote your best team here!</small>	-->
                </h1>
            </div>
        </div>
        <!-- /.row -->

        <!-- Projects Row -->
        <div class="row" class="container-a2" class="img-responsive" class="col-md-4 portfolio-item col-md-4 col-sm-6 col-xs-12 caption">
			<form action="berhasil.php" method="POST">
            	<ul class="caption-style-2">
			        <li>
                    <div class="caption-style-2 img-responsive">
                            <input class="gambar1" type="submit" name="satu" alt="" value="">
                        	<div class="caption">
                               	<div class="blur"></div>
                               	<div class="caption-text">
                                    <h1>Kribcorn</h1>
                                	<p>Popcorn menyerupai jagung berpadu dengan kelembutan marshmallow</p>
                            	</div>
                        	</div>
	                    </div>
                    </li>
                    
			        <li>
                    <div class="caption-style-2 img-responsive">
                            <input class="gambar2" type="submit" name="dua" alt="" value="">
                        	<div class="caption">
                               	<div class="blur"></div>
                               	<div class="caption-text">
                                    <h1>Ars Ligna</h1>
                                	<p>Produk dari kayu dengan seni pembuatan yang berpresisi dan akurasi tinggi</p>
                            	</div>
                        	</div>
 	                    </div>
                    </li>

			        <li>
                    <div class="caption-style-2 img-responsive">
                            <input class="gambar3" type="submit" name="tiga" alt="" value="">
                        	<div class="caption">
                               	<div class="blur"></div>
                               	<div class="caption-text">
                                    <h1>Spasia</h1>
                                	<p>Pasta dengan varian rasa ala nusantara</p>
                            	</div>
                        	</div>
	                    </div>
                    </li>

			        <li>
                    <div class="caption-style-2 img-responsive">
                            <input class="gambar4" type="submit" name="empat" alt="" value="">
                        	<div class="caption">
                               	<div class="blur"></div>
                               	<div class="caption-text">
                                    <h1>Krobi</h1>
                                	<p>Makanan ringan berbahan ubi dengan rasa dan sentuhan modern</p>
                            	</div>
                        	</div>
	                    </div>
                    </li>

			        <li>
                    <div class="caption-style-2 img-responsive">
                            <input class="gambar5" type="submit" name="lima" alt="" value="">
                        	<div class="caption">
                               	<div class="blur"></div>
                               	<div class="caption-text">
                                    <h1>Bocil</h1>
                                	<p>Bolu cupcake dengan rasa sayuran yang bermafaat bagi kesehatan</p>
                            	</div>
                        	</div>
	                    </div>
                    </li>

			        <li>
                    <div class="caption-style-2 img-responsive">
                            <input class="gambar6" type="submit" name="enam" alt="" value="">
                        	<div class="caption">
                               	<div class="blur"></div>
                               	<div class="caption-text">
                                    <h1>B.A.Q</h1>
                                	<p>Tas multifungsi non-plastik, yang fleksibel dan dilengkapi karet penyangga untuk dipakai kapan pun dan dimana pun</p>
                            	</div>
                        	</div>
	                    </div>
                    </li>

			        <li>
                    <div class="caption-style-2 img-responsive">
                            <input class="gambar7" type="submit" name="tujuh" alt="" value="">
                        	<div class="caption">
                               	<div class="blur"></div>
                               	<div class="caption-text">
                                    <h1>Sushiban</h1>
                                	<p>Sushi banana yang dibalut lembut dengan tortila, berpadu dengan lapisan nutela dan toping</p>
                            	</div>
                        	</div>
	                    </div>
                    </li>

			        <li>
                    <div class="caption-style-2 img-responsive">
                            <input class="gambar8" type="submit" name="delapan" alt="" value="">
                        	<div class="caption">
                               	<div class="blur"></div>
                               	<div class="caption-text">
                                    <h1>Cheese Pong</h1>
                                	<p>Tahu isi crispy dengan lelehan keju di setiap gigitan</p>
                            	</div>
                        	</div>
	                    </div>
                    </li>        
                    
					<li>
                    <div class="caption-style-2 img-responsive">
                            <input class="gambar9" type="submit" name="sembilan" alt="" value="">
                        	<div class="caption">
                               	<div class="blur"></div>
                               	<div class="caption-text">
                                    <h1>Warung Es Batavia</h1>
                                	<p>Es selendang mayang dengan kesegaran dan bahan alami</p>
                            	</div>
                        	</div>
	                    </div>
                    </li>        
                    
					<li>
                    <div class="caption-style-2 img-responsive">
                            <input class="gambar10" type="submit" name="sepuluh" alt="" value="">
                        	<div class="caption">
                               	<div class="blur"></div>
                               	<div class="caption-text">
                                    <h1>Potaco</h1>
                                	<p>Sensasi makan mash potato dengan extra sosis dan crabstick yang dibalut dengan tortilla</p>
                            	</div>
                        	</div>
	                    </div>
                    </li>        

					<li>
                    <div class="caption-style-2 img-responsive">
                            <input class="gambar11" type="submit" name="sebelas" alt="" value="">
                        	<div class="caption">
                               	<div class="blur"></div>
                               	<div class="caption-text">
                                    <h1>NAKAL</h1>
                                	<p>Perpaduan makanan khas Indonesia dengan nasi warna warni berbalut nori, bercita rasa lokal memikat</p>
                            	</div>
                        	</div>
	                    </div>
                    </li>        

					<li>
                    <div class="caption-style-2 img-responsive">
                            <input class="gambar12" type="submit" name="duabelas" alt="" value="">
                        	<div class="caption">
                               	<div class="blur"></div>
                               	<div class="caption-text">
                                    <h1>Magaza</h1>
                                	<p>Tas belanja khusus untuk ibu dan anak</p>
                            	</div>
                        	</div>
	                    </div>
                    </li>        

					<li>
                    <div class="caption-style-2 img-responsive">
                            <input class="gambar13" type="submit" name="tigabelas" alt="" value="">
                        	<div class="caption">
                               	<div class="blur"></div>
                               	<div class="caption-text">
                                    <h1>Sir Chick</h1>
                                	<p>Daging ayam dengan stik serai khas Indonesia</p>
                            	</div>
                        	</div>
	                    </div>
                    </li>        

					<li>
                    <div class="caption-style-2 img-responsive">
                            <input class="gambar14" type="submit" name="empatbelas" alt="" value="">
                        	<div class="caption">
                               	<div class="blur"></div>
                               	<div class="caption-text">
                                    <h1>Sandwitch</h1>
                                	<p>Sandwich isi daging rendang dan ayam penyet dengan pilihan roti dan extra topping, disajikan dengan bumbu spesial</p>
                            	</div>
                        	</div>
	                    </div>
                    </li>        
				</ul>
			</form>
		</div>
	</div>
        -->
        <!-- /.row -->

        <hr>
        <!-- /.row -->

        <hr>

        <!-- Footer -->
        <footer>
            <div class="row">
                <div class="col-lg-12">
                    <p>Copyright &copy; Albert, Ryan, & Terry</p>
                </div>
            </div>
            <!-- /.row -->
        </footer>

    </div>
    <!-- /.container -->

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

</body>

</html>

<?php
 	}
//kurung kurawal penutup dari pembuka if, ketika ia klik tombol daftar
}
else
{
  header("location:index.php");
}
?>