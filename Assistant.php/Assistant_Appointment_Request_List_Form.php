<?php
session_start();
require_once "Assistant_db_config.php";
$id= $_SESSION['id'];
$resultApp = get("SELECT * FROM appointmentdetails WHERE AID=$id");

    $pname="";
	$err_pname="";
	
	/*if ($_SERVER["REQUEST_METHOD"] == "POST")
	{ 
      echo " Patient Name: ". $_POST["pname"]."<br>";
	}*/
	
?>
<html>
	<head></head>
	<body>
	    <fieldset style="width:1000px" align="center">
	    <legend align="center"><center><h1>Hospital Hub</h1></center></legend>
		<form action="Assistant_Appointment_Request_Form.php" method="get">
		
			<center><h1>Appointment Request List</h1></center>
			<table>
				 <tr>
				 <td><span><b>Requested Appointments</b></span></td>
                    <td>
                        <select name="requests" style="height: 50px; width: 250px">
                            <option disabled selected>Requests</option>
							<?php
							
							foreach($resultApp as $value){
								$pid = $value['PID'];
								$pResult = get("SELECT * FROM patient WHERE PID=$pid");
								$pResult = $pResult[0];
								echo "<option value='".$value['PID']."'>".$pResult['PName']."</option>";
							}
							?>
                            
                        </select>
						<?php echo $err_pname;?>
                        
                       </td>
					   <td><button type="submit">Check</button></td>
                        
                        
				</tr>
				</table>
				
				<a href="Assistant_Home_Form.php">Back</a>

			
			
			
			
	
		</form>
		</fieldset>	
		</body>
</html>