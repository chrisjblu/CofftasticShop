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
					<a class="closebtn" href="javascript:void(0)" onclick="closeNav()">&times;</a> <a href="index.php">Home</a> <a href="register.php">Register</a> <a href="Location&ContactPage.php">Login</a>  <a href="">Contact & Location</a>
				</div>
				<span onclick="openNav()" style="font-size:30px;cursor:pointer"><button class="btn btn-dark">&#9776; </button></span>
			</div>
		</div>
	</div>

	<div id="main-wrapper">
		<center>
		<h2> Homepage </h2>


			<img id="img" src="imgs/cofftasticlogo.jpg" class="logo"/>
		<h3> Hi <?php echo $_SESSION['username'] ?> here is your discount code : <script src="random.js"></script> </h3>
		</center>



	<form class="myform" action="homepage.php" method="post">

		<input name="logout" type="submit" id="logout_btn" value="Log Out"/><br>

		<label><b>Delete:</b></label>
		<br>
	<input name="deleteTf"type="text" class="inputvalues" placeholder="Type your username"/>
		<br>
	<input name="Delete_Btn" type="submit" id="delete_btn" value="Delete Account"/>

		<a href="changepassword.php"><input type="button" id="changepassword_btn" value="ChangePassword"/>


		</form>
		<?php
		if(isset($_POST['logout']))
		{
		session_destroy();
		header('location:index.php');
		}
		?>

		<?php
if(isset($_POST['Delete_Btn']))
{
    $sql = "DELETE FROM user WHERE username'".$_POST["deleteTf"]."'" or die ("this stuffed up");

    $result = mysqli_query($con,$sql);

    header("Location:index.php");

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
