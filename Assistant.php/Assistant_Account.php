<?php
session_start();
//if(!isset($_SESSION['updated']) && $_SESSION['updated']!=true)
	//header("Location:Assistant_Account.php");

	require_once "Assistant_db_config.php";
	$userID = $_SESSION['id'];
	$query = "SELECT * FROM assistantinfo WHERE AID='$userID'";
	$userData = get($query);
	$userData = $userData[0];

?>

<html>
	<head></head>
	<body>
	    <fieldset style="width:1000px" align="center">
	    <legend align="center"><center><h1>Hospital Hub</h1></center></legend>
		
		
			<center><h1>Account</h1></center>
			
			<img align="center" src="Profile_images.php/user.jpg" alt="" height="300px" width="250px">
			<h4 style="text-align:left;">Name: <?=$userData['AName']?></h4>
			<h4 style="text-align:left;">ID: <?=$userData['AID']?></h4>
			<h4 style="text-align:left;">UserName: <?=$userData['AUserName']?></h4>
			<h4 style="text-align:left;">Email: <?=$userData['AEmail']?></h4>
			<h4 style="text-align:left;">Phone: <?=$userData['APhone']?></h4>
			<h4 style="text-align:left;">Gender: <?=$userData['AGender']?></h4>
			<h4 style="text-align:left;">Birth Date: <?=$userData['ABirthDate']?></h4>
			
				
				
				
				
			
			
			<button align="left" onclick="window.location.href='Assistant_Profile_Edit_Form.php'" style="height: 100px; width: 250px";><b><h2>Edit</h2></b></button>
			<br>
			<a href="Assistant_Home_Form.php">Back</a>

		
		</fieldset>	
		</body>
</html>