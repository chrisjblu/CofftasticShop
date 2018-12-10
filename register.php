<?php
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
		<h2>Registration Form</h2>
			<img id="img" src="imgs/cofftasticlogo.jpg" class="logo"/>
		</center>
	
	
	
	<form class="myform" action="register.php" method="post"> 
		<label><b>Username:</b></label>
			<br>
		<input name="username" type="text" class="inputvalues" placeholder="Type your username" required/>
			<br>
		<label><b>Password:</b></label>
			<br>
		<input name="password" type="password" class="inputvalues" placeholder="your password" required/>
			<br>
		<label><b>Confirm Password:</b></label>
			<br>
		<input name="cpassword" type="password" class="inputvalues" placeholder="Confirm your password" required/>
			<br>
		<input name="submit_btn" type="submit" id="signup_btn" value="Signup"/>
			<br>
		<a href="login.php"><input type="button" id="back_btn" value="Back to login"/>
	</form>
	
	<?php
		if(isset($_POST['submit_btn']))
		{
			//echo '<script type="text/javascript"> alert("Sign Up button clicked") </script>';
			$username = ($_POST['username']);
			$password = md5($_POST['password']);
			$cpassword =  md5($_POST['cpassword']);
		
			
			if($password !== $cpassword)
			{
				echo '<script type="text/javascript"> alert("Password and Confirm Password does not match") </script>';
				
			}
			
			/*else if(existance_username($username)
			{	
				echo "<script type="text/javascript"> alert("User Already Exsists") </script>";		
			}*/
			
			else{
				$query = "INSERT INTO `user` (username, password) VALUES ('$username', '$password')";
				$result = mysqli_query($con, $query);
					if($result){
						echo '<script type="text/javascript"> alert("User Created Successfully") </script>';
					}else{
						echo'<script type="text/javascript"> alert("User not Entered") </script>';
					}		
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