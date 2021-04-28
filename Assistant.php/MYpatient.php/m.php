<?php
	session_start();
	if(!isset($_SESSION["user"])){
	header("Location: login.php");
}
?>
<html>
	<head>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
		<link rel="stylesheet" href="styles/mystyle.css">
	</head>
	<body>
	<fieldset>
			 <legend align="center" >
			 
			 <tr>
			 <style>
			 
			 
		
			 
			 
			 
			 
			 
			 
		  </style>
			<div class="text-center">				  				    
				<td><h1  align="center" style="font-family:verdana;">WELCOME <?php echo $_SESSION["user"];?> Dhaka Medical Center</h1></td>
			      </tr>
				    </legend>
	<form action="" method="post">
		<div class="text-center">
			<a href="doc info.php" class="btn btn-danger">Medicine</a>
			<a href="path.php" class="btn btn-warning">Pathodology</a>			
			<a href="card.php" class="btn btn-danger">Cardology</a>
			<a href="anes.php" class="btn btn-warning">Anesthetics</a>
			<a href="login.php" class="btn btn-primary">Logout</a>		
		</div>
		</fieldset>
	
	
	
	<h5 style="text-align:left;">Wanna Visit our side? <a href="web.php">click here</a></h5>