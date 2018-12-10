<?php
session_start();
require 'dbconfig/config.php';


?>
<!DOCTYPE HTML>
<html>
<head>
	<title> Register with to Cofftastic </title>
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
					<a class="closebtn" href="javascript:void(0)" onclick="closeNav()">&times;</a> <a href="index.php">Home</a> <a href="register.php">Register</a> <a href="login.php">Login</a>  <a href="Location&ContactPage.php">Contact & Location</a>
				</div>
				<span onclick="openNav()" style="font-size:30px;cursor:pointer"><button class="btn btn-dark">&#9776; </button></span>
			</div>
		</div>
	</div>

	<div id="main-wrapper">
		<center>
		<h2> Changing Password</h2>


			<img id="img" src="imgs/cofftasticlogo.jpg" class="logo"/>

		</center>



	<form class="myform" action="changepassword.php" method="POST">

		<label><b>Old Password:</b></label>
			<br>
		<input name="opass" type="text" placeholder="Type your password" />
		<br>
		<label><b> New Password:</b></label>
			<br>
		<input name="npass" type="password" placeholder="Type your new password" />
		<br>


		<center>
		<input name="submitpass" type="submit" id="submitpass_btn" value="Submit"/>
		</center>
		<a href="homepage.php"><input type="button" id="back_btn2" value="Back to Homepage"/>


			<br>

		</form>
		<?php
		if(isset($_POST['submitpass']))
		{

			$oldpass = md5($_POST['opass']);
			$newpass = md5($_POST['npass']);
			if($oldpass!=$newpass){
			$query = "UPDATE from user where username='.$newpass.' and password='.$oldpass.';";
			echo $query;
			mysqli_query($con,$query);
			}
			else{
				echo '<script type="text/javascript"> alert("Password does not match") </script>';

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
