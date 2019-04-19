<?php
	session_start();
	if(isset($_POST['login']))
	{
		$username = $_POST['username'];
		$password = md5($_POST['password']);
		
		$conn = mysqli_connect("localhost", "root", "", "voting");
		if ($conn)
		{
			//Security Mysql
			$username = mysqli_real_escape_string($conn, strip_tags(trim($username)));
			
			$query = "SELECT id, fullname
			FROM user
			WHERE username ='$username'
			AND password='$password'";
			
			$result = mysqli_query($conn, $query);
			if (mysqli_num_rows($result) == 1)
			{
				$user = mysqli_fetch_array($result);
				$_SESSION['id'] = $user['fullname'];
				$_SESSION['fullname'] = $user['fullname'];
				header("Location: index.php");
				//id dan fullname mengikuti di $query ketika di deklarasi
			}
			
			else
			{
				echo "<script> alert('Wrong username or password');</script>";
				//login gagal
			}
		}
		
		else
		{
			echo "<script> alert('Database connection failed');</script>";
		}
	}
	else
	{
		
	}
?>

<!doctype html>
<html>
<?php include ('includes/loginhead.php');?>
<body>
<div id="utama">
	
	
    <div id="inputan">
	<form action="" method="post">
		<div style="margin-top:10px;">
        	<input type="text" name="user" placeholder="Username" class="textfield"/>
        </div>

        
        <div style="margin-top:18px;">
        	<input type="password" name="pass" placeholder="Password" class="textfield"/>
        </div>
        
        <div style="margin-top:18px;">
        	<input type="submit" name="submit" value="Login" class="button"/>
            </div>
            </form>
    </div>
</div>
</body>
</html>