<?php
  session_start();
  if(isset($_SESSION['updated']) && $_SESSION['updated']==true)
	header("Location:CoordinatorEditProfile.php");

	require_once "coordinatorDBconfig.php";
    $name="";
	$err_name="";
	$uname = "";
	$err_uname="";
	$email="";
	$err_email="";
	$number="";
	$err_number="";
	$id=$_SESSION['id'];
	$hospital="";
	$err_hospital="";
	$hasError = true;


//Update User Function
    function updateUser($c_id,$c_name,$c_uname,$c_email,$c_phone,$c_hospital)
    {
        $query = "update coordinatorinfo set c_name='$c_name', c_uname='$c_uname', c_email='$c_email', c_phone='$c_phone', c_hospital='$c_hospital' where c_id=$c_id";
        $result = execute($query);
		return $result;
	}
		
	if(isset($_POST["updateDetails"]))
	{
	 if(empty($_POST["name"]))
     {
	 $err_name="[Name Required]";
	 $hasError=false;
	 }
	 else
	 {
	 $name=htmlspecialchars($_POST["name"]);
	 }
	
     if(empty($_POST["uname"]))
	 {
	 $err_uname="[Username Required]";
	 $hasError=false;
	 }
	 elseif(strlen($_POST["uname"])<6)
	 {
	 $err_uname="[Username must be 6 charachters long]";
	 $hasError=false;
	 }
	 elseif(strpos($_POST["uname"]," "))
	 {
	 $err_uname="[Username should not contain white space]";
	 $hasError=false;
	 }
	 else
	 {
	 $uname=htmlspecialchars($_POST["uname"]);
	 }
	
	 if(empty($_POST["email"]))
     {
     $err_email="[email required]";
	 $hasError=false;

     }
     elseif(!strpos($_POST["email"],"@"))
     {
      $err_email="[email must contain '@' sign]";
      $hasError=false;
     }
     else
     {
      $pos_at  = strpos($_POST["email"],"@");
      if(!strpos($_POST["email"],".",$pos_at))
        {
         $err_email="[at least one dot needed after '@' sign]";
	     $hasError=false;
        }
        else
        {
         $email=htmlspecialchars($_POST["email"]);
        }
     }
		 
     if(empty($_POST["number"]))
     {
      $err_number="[Number Requires]";
	   $hasError=false;
     }
     elseif(!is_numeric($_POST["number"]))
     {
      $err_number="[number should only contain neumeric value]";
	  $hasError=false;
     }
      else
     {
       $number=htmlspecialchars($_POST["number"]);
     }
	 
	 if(empty($_POST["hospital"]))
     {
	 $err_hospital="[Hospital Required]";
	 $hasError=false;
	 }
	 else
	 {
	 $hospital=htmlspecialchars($_POST["hospital"]);
	 }
	
	
      if(empty($err_number) && empty($err_email) && empty($err_uname) && empty($err_name) && empty($err_hospital) )
        {
            
            if(isset($_POST["updateDetails"]))
            {
                $result = updateUser($id,$name,$uname,$email,$number,$hospital);

				
				if($result){
					$_SESSION['message'] = "Successfully Updated!";
				}else{
					$_SESSION['message'] = "Failed to Update!";
				}
                
            }
        }else{
			$_SESSION['message'] = "There are one or many error!";
		}
		


        echo "Name: ". $_POST["name"]."<br>";
		echo "User Name: ". $_POST["uname"]."<br>";
		echo "Email: ". $_POST["email"]."<br>";
		echo "Number: ". $_POST["number"]."<br>";
		echo "Hospital: ". $_POST["hospital"]."<br>";
	}




?>