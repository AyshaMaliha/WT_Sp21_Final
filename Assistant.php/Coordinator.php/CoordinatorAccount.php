<?php
session_start();
//if(!isset($_SESSION['updated']) && $_SESSION['updated']!=true)
	//header("Location:Assistant_Account.php");

	require_once "coordinatorDBconfig.php";
	$userID = $_SESSION['id'];
	$query = "SELECT * FROM coordinatorinfo WHERE c_id='$userID'";
	$userData = get($query);
	$userData = $userData[0];

?>

<html>
	<head></head>
	<body>
	    <fieldset style="width:1000px" align="center">
	    <legend align="center"><center><h1>Hospital Hub</h1></center></legend>
		
		
			<center><h1>Account</h1></center>
			
			
			<h4 style="text-align:left;">Name: <?=$userData['c_name']?></h4>
			<h4 style="text-align:left;">ID: <?=$userData['c_id']?></h4>
			<h4 style="text-align:left;">UserName: <?=$userData['c_uname']?></h4>
			<h4 style="text-align:left;">Email: <?=$userData['c_email']?></h4>
			<h4 style="text-align:left;">Phone: <?=$userData['c_phone']?></h4>
			<h4 style="text-align:left;">Gender: <?=$userData['c_gender']?></h4>
			<h4 style="text-align:left;">Hospital Name: <?=$userData['c_hospital']?></h4>
			<h4 style="text-align:left;">Birth Date: <?=$userData['c_birthdate']?></h4>
			
				
				
				
				
			
			
			<button align="left" onclick="window.location.href='CoordinatorEditProfile.php'" style="height: 100px; width: 250px";><b><h2>Edit</h2></b></button>
	
		
		</fieldset>	
		</body>
</html>