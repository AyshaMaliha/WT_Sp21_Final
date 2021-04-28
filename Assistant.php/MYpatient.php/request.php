<?php
	require_once "models2/db_config.php";
	session_start();
	$uname = "";
	$err_uname="";
	$id = "";
	$err_id="";
	$from = "";
	$err_from="";
	$to = "";
	$err_to="";
	$date_of_journey = "";
	$err_date_of_journey = "";
	$return_date = "";
	$err_return_date="";
	$journey_time="";
	$err_journey_time="";	
	$return_time="";
	$err_return_time="";	
	$hasError=false;
	$err_message="";
	


	if ($_SERVER["REQUEST_METHOD"] == "POST") {
		if (empty($_POST["uname"])) {
			$err_uname = "* Patient Name required";
		} 
		else {
			$uname = $_POST["uname"];
		}

		if (empty($_POST["id"])) {
			$err_id = "* Patient ID required";
		} 
		else {
			$id = $_POST["id"];
		}

		if (empty($_POST["from"])) {
			$err_from = "*Leaving From required";
		} 
		else {
			$from = $_POST["from"];
		}

		if (empty($_POST["to"])) {
			$err_to = "*Going To required";
		} 
		else {
			$to = $_POST["to"];
		}

		if (empty($_POST["date_of_journey"])) {
			$err_date_of_journey = "*Date of Journey required";
		} 
		else {
			$date_of_journey = $_POST["date_of_journey"];
		}

		if (empty($_POST["return_date"])) {
			$err_return_date = "*Return Date required";
		} 
		else {
			$return_date = $_POST["return_date"];
		}
		
		if (empty($_POST["journey_time"])) {
			$err_journey_time = "*Journey time required";
		} 
		else {
			$journey_time = $_POST["journey_time"];
		}
		
		if (empty($_POST["return_time"])) {
			$err_return_time = "*Return time required";
		} 
		else {
			$return_time = $_POST["return_time"];
		}
		
		if(!$hasError){
			//$_SESSION["users"]=$name;
			$query = "insert into users values('$id','$uname','$from','$to','$date_of_journey','$return_date','$journey_time','$return_time')";
			execute($query);							  
		}
	}
?>
<html>
     <head>
	     <link rel="stylesheet" type="text/css" href="styles/mystyle.css">
	      <style>
				.btn-mine{
					background-color:tomato;
					color:white;
					border:none;
					width:40%;
					height:50%;
				}
				.btn-mine:hover{
					background-color:red;
				}
				.btn-mine:active{
					background-color:green;
				}		  
		  </style>
	 </head>
     <body>
	      
	 
	      <div class="signupdiv">
		 
		  			  			  
		      <table align="center">
				  <tr>
					<td colspan="2" align="center"><span class="err-msg"><?php echo $err_message;?></span>
					</td>
				  </tr>
			      
			  </table>
			  <fieldset>
			 <legend align="center">
			 <tr>
				  
				    <!--<td align="center"><img src="resources/user.png" width="150px" height="150px"></td>-->
		            <td><h1 align="center" style="font-family:verdana;">Patient Request</h1></td>
					
			      </tr>
				    </legend>
			  
		<form action="" method="post" onsubmit="return validate()">
			<table align="center">
				<tr>
					<td><span>Patient ID</span></td>
					<td>:
						<input type="number" placeholder="Patient ID" id="id" name="id" value="<?php echo $id?>">
						<span id="err_id"><?php echo $err_id?></span></td>
				</tr>
				
				<tr>
					<td><span>Patient Name</span></td>
					<td>:
						<input type="text" placeholder="Patient Name" id="uname" name="uname" value="<?php echo $uname?>">
						<span id="err_uname"><?php echo $err_uname?></span></td>
				</tr>
				
				<tr>
				   <td><span>Leaving From</td>
				   <td>:
				     <select id="from" name="from" value="<?php echo $from;?>">
					      <option value="">Choose One</option>					  
					      <option value="Saturday">Saturday</option>
				          <option value="Sunday">Sunday</option>
				          <option value="Monday>Monday</option>
						  <option value="tuesday">tuesday</option>
						  <option value="Wednesday">wednesday</option>
						  <option value="Thursday">Thursday</option>
						  								
		             </select>
					 <span id="err_from"><?php echo $err_from?></span></td>
					 </td>
				</tr> 
				
				<tr>
				   <td><span>Going To</td>
				   <td>:
				     <select id="to" name="to" value="<?php echo $to;?>">
					      <option value="">Choose One</option>					  
					      <option value="Saturday">Saturday</option>
				          <option value="Sunday">Sunday</option>
				          <option value="Monday">Monday</option>
						  <option value="tuesday">tuesday</option>
						  <option value="Wednesday">Wednesday</option>
						  <option value="Thursday">Thursday</option>
						  										
		             </select>
					 <span id="err_to"><?php echo $err_to?></span></td>
					 </td>
				</tr> 
				<tr>
				
				<tr>					   
				<td><span>Date Of go </span></td>
                <td>:
				     <input type="text" placeholder="dd/mm/yyyy" id="date_of_journey" name="date_of_journey" value="<?php echo $date_of_journey?>">
					 <span id="err_date_of_journey"><?php echo $err_date_of_journey?></span></td>
			</tr> 
				
				<tr>					   
				<td><span>Return Date </span></td>
                <td>:
				     <input type="text" placeholder="dd/mm/yyyy" id="return_date" name="return_date" value="<?php echo $return_date?>">
					 <span id="err_return_date"><?php echo $err_return_date?></span></td>
			</tr> 	
				<tr>
					<td><span>Journey Time</span></td>
					<td>:
						<input type="text" placeholder="hh:ii:ss" id="journey_time" name="journey_time" value="<?php echo $journey_time?>">
						<span id="err_journey_time"><?php echo $err_journey_time?></span></td>
				</tr>

				<tr>
					<td><span>Return Time</span></td>
					<td>:
						<input type="text" placeholder="hh:ii:ss" id="return_time" name="return_time" value="<?php echo $return_time?>">
						<span id="err_return_time"><?php echo $err_return_time?></span></td>
				</tr>
					<tr>
					   <td colspan="2" align="center">
						<p><span><input type="checkbox"></span>I agree to the terms of services</p>
						</td>
						</tr>
						
						
						
						
						
						
						
				<tr>
					<p id="p1">
					   <td colspan="2" align="center"><input class="btn-mine my-font" type="submit"  value="ADD" name="signup">	</td>
					   
					</p>   
					</tr>
			</table>	
			<a href="m.php" class="btn btn-primary">Home</a>	
		</form>
		</fieldset>
	</body>
	<script>
		function get (id){
			return document.getElementById(id);
		}
	   function validate(){
		   //alert("ADD Patient");
		   cleanUp();
		   var hasError=false;
		   if(get("id").value == ""){
			   get ("err_id").innerHTML="*Patient ID Required<br>";
			   get ("err_id").style.color="red";
			   hasError=true;
			   
		   }
		   if(get("uname").value == ""){
			   get ("err_uname").innerHTML="*Patient Name Required<br>";
			   get ("err_uname").style.color="red";
			   hasError=true;
			   
		   }
		   if(get("from").value == ""){
			   get ("err_from").innerHTML="*Day Required<br>";
			   get ("err_from").style.color="red";
			   hasError=true;
			   
		   }
		   if(get("to").value == ""){
			   get ("err_to").innerHTML="*Going To Required<br>";
			   get ("err_to").style.color="red";
			   hasError=true;
			   
		   }
		   if(get("date_of_journey").value == ""){
			   get ("err_date_of_journey").innerHTML="*Date Of go Required<br>";
			   get ("err_date_of_journey").style.color="red";
			   hasError=true;
			   
		   }
		   if(get("return_date").value == ""){
			   get ("err_return_date").innerHTML="*Return Date Required<br>";
			   get ("err_return_date").style.color="red";			   
			   hasError=true;   
		   }
		   if(get("journey_time").value == ""){
			   get ("err_journey_time").innerHTML="*Journey Time Required<br>";
			   get ("err_journey_time").style.color="red";
			   hasError=true;
			   
		   }
		   if(get("return_time").value == ""){
			   get ("err_return_time").innerHTML="*Return Time Required<br>";
			   get ("err_return_time").style.color="red";
			   hasError=true;
			   
		   }

			//alert (err_msg);
		   if(!hasError){
		   return true;
		   }		  
			   return false;
		   
	   }
		function cleanUp(){
			get ("err_id").innerHTML="";
			get ("err_uname").innerHTML="";
			get ("err_from").innerHTML="";
			get ("err_to").innerHTML="";
			get ("err_date_of_journey").innerHTML="";
			get ("err_return_date").innerHTML="";
			get ("err_journey_time").innerHTML="";
			get ("err_return_time").innerHTML="";
		}	 
	 </script>
</html>