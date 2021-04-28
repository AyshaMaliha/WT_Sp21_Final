<?php
	
	$subject="";
	$err_subject="";
	$details="";
	$err_details="";
	
	
	if($_SERVER["REQUEST_METHOD"] == "POST")
	{
		
		if(empty($_POST["subject"]))
		{
			$err_subject = "Subject Required";
		}
		else
		{
			$subject = $_POST["subject"];
		}
		
		 
		if(empty($_POST["details"]))
		{ 
			$err_details = "Details Required."; 
		} 
		else
		{
			$details = $_POST["details"];
		}
		
		
		
		echo "Subject: ". $_POST["subject"]."<br>";
		
		echo "Details: ". $_POST["details"]."<br>";
		
			  
		
		
	}
	
	

?>

<html>
	<head></head>
	<body>
	<fieldset>
		<legend><h1><b>Admin Support</b></h1></legend>
		
		
		<h1>Thank you for contacting "Hospital Hub" Admin Team. Please state your query along with a subject and submit it to us. We will get back to you as soon as possible.</h1>
		<form action="" method="post">
		<table>
		<tr>
					<td><span><b>Subject:</b></span></td>
					<td>:<textarea cols = "100"  name="subject" size = "50" value = "<?php echo $subject;?>" placeholder= "Subject"></textarea><br>
					<td><span><?php echo $err_subject;?></span></td>
				</tr>
				
		<tr>
					<td><span><b>Details:</b></span></td>
					<td>:<textarea cols = "100" rows = "25" name="details" size = "250" value = "<?php echo $details;?>" placeholder= "Details"></textarea><br>
					<td><span><?php echo $err_details;?></span></td>
				</tr>
				
				
		</table>
		
		<input type="submit" name="Submit"></center>
		</form>
	</fieldset>
		
		
	</body>
</html>