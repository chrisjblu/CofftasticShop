<?php
session_start();
require 'dbconfig/config.php';
?>
<!DOCTYPE HTML>
<html>
<head>
	<title> Welcome to Cofftastic </title>
	<link rel="stylesheet" href="css/style2.css">
	<meta charset="utf-8">
	<meta content="width=device-width, initial-scale=1, shrink-to-fit=no" name="viewport">
	<link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet">
	<link href="style.css" rel="stylesheet" type="text/css">
</head>
<body style="background-color:black">
<div class='container-fluid'>
<div class='row'>
			<div class='col'>
				<div class="sidenav" id="mySidenav">
					<a class="closebtn" href="javascript:void(0)" onclick="closeNav()">&times;</a> <a href="index.php">Home</a> <a href="register.php">Register</a> <a href="Location&ContactPage.php">Login</a>  <a href="#">Contact</a> 
				</div>
				<span onclick="openNav()" style="font-size:30px;cursor:pointer"><button class="btn btn-dark">&#9776; </button></span> 
			</div>
		</div>
	</div>
	
	
	<div id="main-wrapper">
		<center>
			<img id="img" src="imgs/cofftasticlogo.jpg" class="logo"/>
		</center>
	
	
	
	<form class="myform" action="login.php" method="post"> 
		<label><b>Username:</b></label>
			<br>
		<input name="username"type="text" class="inputvalues" placeholder="Type your username"/>
			<br>
		<label><b>Password:</b></label>
			<br>
		<input name="password" type="password" class="inputvalues" placeholder="Type your password"/>
			<br>
		<input name="login" type="submit" id="login_btn" value="Login"/>
			<br>
		<a href ="register.php"><input type="button" id="register_btn" value="Register"/>
		</form>
		<?php
		if(isset($_POST['login']))
		{
				$username= ($_POST['username']);
				$password= md5($_POST['password']);
				
				$query = "select * from user where username='$username' and password='$password' ";

				$query_run = mysqli_query($con,$query);
				if(mysqli_num_rows($query_run)>0)
				{
				
					$_SESSION['username'] = $username;
					$_SESSION['password'] = $password;
					header( "Location: homepage.php");
				}
				else
				{
					echo'<script type="text/javascript"> alert("Invalid login Details") </script>';
				}
			}
			
		
		?>
	</div>


<div class="container">
		
		<div class="row">
		
		</div>
		
	
		
		
		
		<script>
		function openNav() {
		  document.getElementById("mySidenav").style.width = "240px";
		}

		function closeNav() {
		  document.getElementById("mySidenav").style.width = "0";
		}
		</script>
		<div>
			<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js">
			</script> 
			<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js">
			</script> 
			<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js">
			</script> 
		</div>
	</div>

</body>

</html>