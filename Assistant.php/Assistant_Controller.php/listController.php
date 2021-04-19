<?php
session_start();
	$_SESSION['message'] = "";


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
   
   
	if(isset($_POST["proceed"]))
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
			$query = execute("INSERT INTO appointmentdetails VALUES(null, 1,1,1,'$day','$time','$number','$floor')");
			if($query){
				echo "Successfully Submitted!";
			}else{
				echo "Database Error. Failed to submit!".mysqli_error($conn);
			}
		}
		
		echo "Time: ". $time."<br>";
		echo "Room No: ". $_POST["room"]."<br>";
		echo "Floor: ". $floor."<br>";
		echo "Day: ". $day ."<br>";

		
		
		
	}
?>