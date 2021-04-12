<?php
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
	    <legend align="center"><center><h1>Appointment Request List</h1></center></legend>
		<form action="AppointmentRequestInfo.php" method="post">
		
			
			<table>
				 <tr>
				 <td><span><b>Requested Appointments</b></span></td>
                    <td>
                        <select name="requests" style="height: 50px; width: 250px">
                            <option disabled selected>Requests</option>
							<option>Request 1</option>
							<option>Request 2</option>
							<option>Request 3</option>
							<?php 
                                echo "<b>Fahim Mahtab Ifsan</b>"
                                
                            ?>
                            
                        </select>
						<?php echo $err_pname;?>
                        
                       </td>
					   <td><button type="submit">Check</button></td>
                        
                        
				</tr>
				</table>
			
			
			
			
	
		</form>
		</fieldset>	
		</body>
</html>