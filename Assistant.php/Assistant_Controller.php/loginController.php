<?php
session_start();
if(isset($_SESSION['logged_in']) && $_SESSION['logged_in']==true)
	header("Location:Assistant_Home_Form.php");

	require_once "Assistant_db_config.php";
    $uname="";
    $pass="";
    $err_pass="";
    $err_uname="";

    function authenticateUser()
    {
        global $uname,$pass,$err_pass,$err_uname;
		
        $query = "select * from assistantinfo where AUserName='$uname'";
        $result = get($query);
		
        if(count($result) > 0)
        {
            $user = $result[0];
            if($user["Apassword"] == $pass)
            {
				
                $_SESSION["id"] = $user["AID"];
				$_SESSION["logged_in"] = true;
				
                header("Location:Assistant_Home_Form.php");
                
            }
            else
            {
                $err_pass = "**password incorrect**";
                $pass="";
                
            }
        }
        else
        {
            $uname="";
            $pass="";
            $err_uname= "**username does not match!**";
        }
    }

    //check if user exists after login
    function checkUser()
    {
        $uname = $_SESSION["user"];
        $query = "select * from assistantinfo where AName='$uname'";
        $result = get($query);
        if(!count($result) > 0)
        {
            header("Location: logout.php");
        }
    }

    if(isset($_POST["login"]))
    {
		
		if(empty($_POST["uname"]))
		{
			$err_uname = "Username Required";
		}else if(strlen($_POST["uname"]) < 6)
		{
			$err_uname = "Username should be at least 6 characters.";
		}
		else if(strpos($_POST["uname"], " "))
		{
			$err_uname = "Username can not contain white space.";
		}
		else
		{
			$uname = $_POST["uname"];
		}
		
		if(empty($_POST["pass"]))
		 {
			 $err_pass="Password Required!!";
		 }
		 else if(strlen($_POST["pass"])<8) {
		 	$err_pass="Password must be 8 charachters long";
		 }
		 else
		 {
			 $pass=$_POST["pass"];
		 }
		 
        $uname = htmlspecialchars($_POST["uname"]);
        $pass = htmlspecialchars($_POST["pass"]);
		
        authenticateUser();
		
		echo "User Name: ". $_POST["uname"]."<br>";
		echo "Password: ". $_POST["pass"]."<br>";
        
    }
	
	
?>


