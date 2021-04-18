<?php
  session_start();
  if(!isset($_SESSION['logged_in']) && $_SESSION['logged_in']!=true)
	header("Location:Login.php");

	require_once "Assistant_db_config.php"; 
    $name="";
	$err_name="";
	$uname = "";
	$err_uname="";
	$email="";
	$err_email="";
	$number="";
	$err_number="";
	$id=$_SESSION['id'];
	$hasError = true;


//Update User Function
    function updateUser($AID,$AName,$AUserName,$AEmail,$APhone)
    {
        $query = "update assistantinfo set AName='$AName', AUserName='$AUserName', AEmail='$AEmail', APhone='$APhone' where AID=$AID";
		$result = execute($query);
		return $result;
	}
		
	if(isset($_POST["updateDetails"]))
	{
	 if(empty($_POST["name"]))
     {
	 $err_name="[Name Requires]";
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
	
	
      if(empty($err_number) && empty($err_email) && empty($err_uname) && empty($err_name) )
        {
            
            if(isset($_POST["updateDetails"]))
            {
                $result = updateUser($id,$name,$uname,$email,$number);

				
				if($result){
					$_SESSION['message'] = "Successfully Updated!";
				}else{
					$_SESSION['message'] = "Failed to Update!".mysqli_error($conn);
				}
                //header("Location: Assistant_Sign_Up_Form.php");
            }
        }else{
			$_SESSION['message'] = "There are one or many error!";
		}
		


        echo "Name: ". $_POST["name"]."<br>";
		echo "User Name: ". $_POST["uname"]."<br>";
		echo "Email: ". $_POST["email"]."<br>";
		echo "Number: ". $_POST["number"]."<br>";
	}




?>