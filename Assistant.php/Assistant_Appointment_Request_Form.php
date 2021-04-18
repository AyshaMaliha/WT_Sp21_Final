<?php
session_start();
require_once "Assistant_db_config.php";
$userID = $_SESSION['id'];
	$sql1 = "SELECT * FROM assistantinfo WHERE APID='$userID'";
	$userData = get($sql1);
	$userData = $userData[0];
	
	$sql2 = "SELECT PName FROM patient WHERE PID= (select PID from assistantinfo where APID= '$userID')";
	$userData2 = get($sql2);
	$userData2 = $userData2[0];
	
	$sql3 = "SELECT DName FROM doctors WHERE DID= (select DID from assistantinfo where APID= '$userID')";
	$userData3 = get($sql3);
	$userData3 = $userData3[0];
	
	$sql4 = "SELECT DName FROM doctors WHERE DID= (select DID from assistantinfo where APID= '$userID')";
	$userData4 = get($sql4);
	$userData4 = $userData4[0];
?>
<html>
	<head></head>
	<body>
	    <fieldset style="width:1000px" align="center">
	    <legend align="center"><center><h1>Hospital Hub</h1></center></legend>
		
		
			<center><h1>Apointment Request</h1></center>
			<h3 style="text-align:left;">Patient Name: <?=$userData2['PID']?></h3>
			<h3 style="text-align:left;">Patient ID: <?=$userData['PID']?></h3>
			<h3 style="text-align:left;">Doctor's Name: <?=$userData3['DID']?></h3>
			<h3 style="text-align:left;">Department: <?=$userData4['DID']?></h3>
			<h3 style="text-align:left;">Day: <?=$userData['APDay']?></h3>
			<br>
				
				
			
			<button align="left" onclick="window.location.href='Assistant_Appointment_Confirm_Form.php'" style="height: 100px; width: 250px";><b><h2>Proceed</h2></b></button>
			<button align="right" onclick="window.location.href='Assistant_Home_Form.php'" style="height: 100px; width: 250px";><b><h2>Reject</h2></b></button>

		</fieldset>	
		</body>
</html>