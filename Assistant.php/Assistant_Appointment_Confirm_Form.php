<?php
require_once "Assistant_db_config.php";
   $time="";
   $err_time="";
   $zone="";
   $add="";
   $err_zone="";
   $err_add="";
   $room="";
   $err_room="";
   $floor="";
   $err_floor="";
   $no="";
   $err_no="";
   $hr="";
   $err_hr="";
   $min="";
   $err_min="";
   $day="";
   $err_day="";
   
      /* function insertInfo($AName,$AUsername,$APassword,$AEmail,$APhone,$ADocNname,$AHospitalName,$ABirthDate,$AGender)
    {
        $query = "insert into assistantinfo values(NULL,'$AName','$AUsername','$APassword','$AEmail',$APhone,'$ADocNname','$AHospitalName','$ABirthDate','$AGender')";
		//echo $query;
        $result = execute($query);
		return $result;
    }*/
   
   
   //if($_SERVER["REQUEST_METHOD"] == "POST")
    if(isset($_POST["confirm"]))

	{
		 
		if(!isset($_POST['hr']) || !isset($_POST['min']) || !isset($_POST['zone'])){
			$err_time = "Time Required!";
		}
		else{
			$time= $_POST['hr'].":".$_POST['min'].".".$_POST['zone'];
		}
		
		
		if(empty($_POST["room"]))
         {
             $err_room="[Room No. Required]";
         }
         elseif(!is_numeric($_POST["room"]))
         {
             $err_room="[Room number should only contain neumeric value]";
         }
		 elseif(strlen($_POST["room"])<3)
		 {
			 $err_uname="[Room number must be 3 digit long]";
		 }
         else
         {
             $number=htmlspecialchars($_POST["room"]);
         }
		
		
		if(!isset($_POST['add']))
		{
			$err_floor = "Floor No. Required!";
		}
		else{
			$floor = $_POST['add'];
		}
		
		if(!isset($_POST['day'])){
			$err_day = "Day Required!";
		}
		else{
			$day= $_POST['day'];
		}
		
		
		//$day = $_POST['day'];
		
		if(empty($err_time) && empty($err_room) && empty($err_floor) && empty($err_day)){
			$query = execute("INSERT INTO appointmentdetails VALUES(null, 1,1,1,'$day','$time','$number','$floor',2)");
			if($query){
				$_SESSION['message'] = "Successfully submited!";
				echo "Successfully Submitted!";
			}else{
				$_SESSION['message'] = "Failed to Submit!";
				echo "Database Error. Failed to submit!".mysqli_error($conn);
			}
			
        }else{
			$_SESSION['message'] = "There are one or many error!";
		}
		

		
		echo "Time: ". $time."<br>";
		echo "Room No: ". $_POST["room"]."<br>";
		echo "Floor: ". $floor."<br>";
		echo "Day: ". $day."<br>";

		
		
		
	}
   

?>
<html>
	<head></head>
	<body>
	    <fieldset style="width:1000px" align="center">
	    <legend align="center"><center><h1>Hospital Hub</h1></center></legend>
		<form action="" method="post">
		
			<center><h1>Apointment Request</h1></center>
			<h4 style="text-align:left;">Patient Name: Fahim Mahtab Ifsan</h4>
			<h4 style="text-align:left;">Patient ID: 3046</h4>
			<h4 style="text-align:left;">Doctor's Name: Dr. Farzana Sohael</h4>
			<h4 style="text-align:left;">Department: Gynocology</h4>
			<h4 style="text-align:left;">Day: Sunday</h4>
			<table>
				<tr>
					<td><span><b>Day</b>:</span></td>
                    <td>
                        <select name="day">
                            <option disabled selected>Day</option>
                            
							<option>Sun</option>
							<option>Mon</option>
							<option>Tue</option>
							<option>Wed</option>
							<option>Thu</option>
							<option>Fri</option>
							<option>Sat</option>
							</select>

                        <?php echo $err_day; ?>
				</tr>
				
				<tr>
					<td><span><b>Time</b>:</span></td>
                    <td>
                        <select name="hr">
                            <option disabled selected>Hour</option>
                            <?php 
                                for($i=1;$i<=12;$i++)
                                {
                                    echo "<option>$i<option>";
                                }
                            ?>
                        </select>
                        <select name="min">
                            <option disabled selected>Minute</option>
                            <?php 
                                for($i=01;$i<=60;$i++)
                                {
                                    echo "<option>$i<option>";
                                }
                                    
                                  
                            ?>
                        </select>
                        <select name="zone">
                        <option disabled selected>Zone</option>
                        <?php 
                                $zone=array("AM"=>".", "PM"=>".");
                                foreach($zone as $x => $x_value) {
                                    echo "<option>$x. $x_value<option>";
								}
                            ?>
                        </select>
                        <?php echo $err_time; ?>
				</tr>
				
				
				
				<tr>
				    <td><span><b>Room No</b>:</span></td>
					<td><input type="text" name="room" value = "<?php echo $room;?>"><br>
					<td><span><?php echo $err_room;?></span></td>
			    </tr>
					
					
					<tr>
					<td><span><b>Floor</b>:</span></td>
                    <td>
                        <select name="add">
                            <option disabled selected>Floor No</option>
                            <?php 
                                $add=array("1st"=>"1", "2nd"=>"2", "3rd"=>"3", "4th"=>"4", "5th"=>"5", "6th"=>"6","7th"=>"7", "8th"=>"8", "9th"=>"9", "10th"=>"10", "11th"=>"11", "Dec12th"=>"12");
                                foreach($add as $x => $x_value) {
                                    echo "<option>$x($x_value)<option>";
                                    
                                  }
                            ?>
							</select>

                        <?php echo $err_floor; ?>
				</tr>
			</table>
				
				
				
				
			<input type="submit" name="confirm" value="Confirm" style="height: 40px; width: 200px; float: center"><br> 

			
			<a href="Assistant_Home_Form.php"><!--<button align="center"  style="height: 60px; width: 250px";><b><h2>Confirm</h2></b></button>--></a>
	
		</form>
		</fieldset>	
		</body>
</html>