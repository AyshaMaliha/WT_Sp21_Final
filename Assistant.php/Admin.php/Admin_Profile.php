<?php
	
	$department="";
	$err_department="";
	$doctor="";
	$err_doctor="";
	$hospital="";
	$err_hospital="";
	

	
	

?>


<html>
	<head></head>
	<body>

	    <fieldset style="width:1000px" align="center">
	    <legend align="center"><center><h1>Hospital Hub</h1></center></legend>
		<img align="left" src="Admin.jpg" alt="" height="300px" width="250px">
		<form action="Admin_Hospital_Form.php" method="post">	
			 
			<center><h1>Tahsin Hasan Saad</h1></center>
			<center><h2>ID: 3517</h2></center>
			
			<br>
			<br><br><br>
			
		
		 	
		<br>
		<br>
		<table>
		<tr>
		<td><span><b>Hospital</b>:</span></td>
					<td>
						:<select name="hospital">
						<option disabled selected>Choose One</option>
						<option>Popular Diagnostic Centre</option>
						<option>Kurmitola Hospital</option>
						<option>Uttara Hospital</option>
							
						</select>
						<td><span><?php echo $err_hospital;?></span></td>
					</td>
					<td><a href="Admin_Hospital_Form.php"><button type="submit">Check</button></td>
		</tr>			
		
		<tr>
					<td><span><b>Department</b>:</span></td>
					<td>
						:<select name="department">
							<option disabled selected>Choose One</option>
							<option>Orthopedics</option>
							<option>Neuro Surgery</option>
							<option>Cardiology</option>
							<option>Gynocology</option>
							
						</select>
						<td><span><?php echo $err_department;?></span></td>
					</td>
					<td><a href="Assistant_Home_Form.php"><button type="submit">Check</button></td>
	</tr>
	
	<tr>
					<td><span><b>Doctor</b>:</span></td>
					<td>
						:<select name="doctor">
							<option disabled selected>Choose One</option>
							<option>Dr. Farzana Sohael</option>
							<option>Dr. Mamunur Rashid</option>
							
							
							
						</select>
						<td><span><?php echo $err_doctor;?></span></td>
					</td>
					<td><a href="Assistant_Home_Form.php"><button type="submit">Check</button></td>
	</tr>
	<tr>
					<td><span><b>Patient</b>:</span></td>
					<td>
						:<select name="doctor">
							<option disabled selected>Choose One</option>
							<option>Fahim Mahtab Ifsan</option>
							<option>Tanzila Tabassum</option>
							<option>Sadia Afrin</option>
							
							
						</select>
						<td><span><?php echo $err_doctor;?></span></td>
					</td>
					<td><a href="Assistant_Home_Form.php"><button type="submit">Check</button></td>
	</tr>
	

	
	</table>
		
		
		
		
			
			
			<br><br>
			<br>
			<br>
			<br><br>
				<h4 style="text-align:left;"><a href="Edit_Profile.php">Edit Profile</a></h5>
			     <h4 style="text-align:left;"><a href="Assistant_Chat.php">Chat</a></h5>
				 <h4 style="text-align:left;"><a href="Assistant_Notification.php">Notification</a></h5>
				 <br>
				 
				 
				 
		
				
				
				<br>
				
			
		
			
			<a href="Admin_Add_Coordinator.php" target="_blank"><button align="left" style="height: 100px; width: 250px";><b><h2>Add Coordinators</h2></b></button></a>
				<button  onclick="document.location='Login.php'" style="height: 50px; width: 200px; float: right"><b><h3>Log Out</h3></b> </button>

			
			
			
			
	
		</form>
			
		</fieldset>	
		</body>
</html>