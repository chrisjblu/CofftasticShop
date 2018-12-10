<?php
session_start();
require 'dbconfig/config.php';
?>
<!DOCTYPE html>
<html>
<head>
	<title>Cofftastic</title>
	<meta charset="utf-8">
	<meta content="width=device-width, initial-scale=1, shrink-to-fit=no" name="viewport">
	<link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet">
	<link href="style.css" rel="stylesheet" type="text/css">
</head>
<body>
	<div class='container-fluid'>
	
		<video autoplay muted loop id="myVideo"><source src="video/video.mp4" type="video/mp4"> Your browser does not support HTML5 video.</video>
		<div class='row'>
			<div class='col'>
				<div class="sidenav" id="mySidenav">
					<a class="closebtn" href="javascript:void(0)" onclick="closeNav()">&times;</a> <a href="#">Home</a> <a href="register.php">Register</a> <a href="login.php">Login</a>  <a href="Location&ContactPage.php">Contact & Location</a> 
				</div>
				<span onclick="openNav()" style="font-size:30px;cursor:pointer"><button class="btn btn-dark">&#9776; </button></span> 
			</div>
		</div>
		
		
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