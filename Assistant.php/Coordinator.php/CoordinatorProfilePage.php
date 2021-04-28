<?php
	session_start();
	if(!isset($_SESSION['logged_in']) && $_SESSION['logged_in']!=true)
	header("Location:Login.php");

	require_once "CoordinatorDBconfig.php";
	$userID = $_SESSION['id'];
	$sql1 = "SELECT * FROM coordinatorinfo WHERE c_id='$userID'";
	$userData = get($sql1);
	$userData = $userData[0];
	

	$department="";
	$err_department="";
	$doctor="";
	$err_doctor="";
	
	if($_SERVER["REQUEST_METHOD"] == "POST")
	{
		
		
		if(!isset($_POST["department"]))
		{ 
			$err_department = "No buttons were checked."; 
		} 
		else
		{
			$department = $_POST["department"];
		}
		
		if(!isset($_POST["doctor"]))
		{ 
			$err_doctor = "No buttons were chosen."; 
		} 
		else
		{
			$doctor = $_POST["doctor"];
		}
		
		echo "Department: ". $_POST["department"]."<br>";
		echo "Doctor: ". $_POST["doctor"]."<br>";
		

	
		
	}
	
	

?>

<html>
	<head></head>
	<body>
	<fieldset>
		<legend><h1><b>Coordinator Profile</b></h1></legend>
		<form action="" method="post">
	<table>
	
	<td>
	<img src="user.jpg" alt="User Pic" width="200" height="200">
	</td>
	
	<td>
	
	<h2>Name: <?=$userData['c_name']?></h2>
	<h3>ID: <?=$userData['c_id']?></h3>
	<h3>Hospital: <?=$userData['c_hospital']?></h3>
	
	
	</td>
	<br>
	
	
	
	
	
	
	<!--
	
	<td>
	<tr><b>Name: Md. Muntanuz Zaman 		("We will get this from Database")</b><br>
	<tr><b>ID: 18-37272-1 					("We will get this from Database")</b><br>
	<tr><b>Hospital: Popular Diagnostic 	("We will get this from Database")</b><br>
	</td>
	-->
	
	<tr>
					<td><span><b>Department</b>:</span></td>
					<td>
						:<select name="department">
							<option disabled selected>Choose One</option>
							<option>Ortho</option>
							<option>Neuro</option>
							<option>Cardio</option>
							<option>Gyno</option>
							
						</select>
						<td><span><?php echo $err_department;?></span></td>
					</td>
	</tr>
	
	<tr>
					<td><span><b>Doctor</b>:</span></td>
					<td>
						:<select name="doctor">
							<option disabled selected>Choose One</option>
							<option>Dr. X</option>
							<option>Dr. Y</option>
							<option>Dr. Z</option>
							
							
						</select>
						<td><span><?php echo $err_doctor;?></span></td>
					</td>
					<td><button type="submit">Check</button></td>
	</tr>
	

	
	</table>
	</form>
	
	<button  onclick="document.location='CoordinatorAccount.php'" style="height: 50px; width: 150px; float: left"><b><h3>Edit Profile</h3></b> </button><br><br><br>
	<button  onclick="document.location='CoordinatorEditCredentials.php'" style="height: 50px; width: 150px; float: left"><b><h3>Edit Credentials</h3></b> </button><br><br><br>
	<button  onclick="document.location='AdminSupport.php'" style="height: 50px; width: 150px; float: left"><b><h3>Contact Support</h3></b> </button><br><br><br>
	<button  onclick="document.location='AppointmentRequest.php'" style="height: 50px; width: 200px; float: left"><b><h3>Appointment Request</h3></b> </button>
	<button  onclick="document.location='logout.php'" style="height: 50px; width: 200px; float: right"><b><h3>Log Out</h3></b> </button>
	
	
	
	</fieldset>
		
		
	</body>
</html>