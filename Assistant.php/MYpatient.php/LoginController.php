<?php
	require_once 'db_config.php';
	session_start();
	$id="";
	$err_id="";	
    $uname="";
	$err_uname="";
	$pass="";
	$err_pass="";
	$cpass="";
	$err_cpass="";	
	$email="";
	$err_email="";	
	$num="";
	$err_num="";
	$add="";
	$err_add="";
	$gender="";
	$err_gender="";
	$birth="";
	$err_birth="";
	$hasError=false;
	$err_message="";
	
	if(isset($_POST["sign_up"]) ){
		if(empty($_POST["id"])){
		   $err_id="*ID Required";
		   $hasError = true;
		}	 
		else{
		   $id = htmlspecialchars($_POST["id"]);
		}
		
		if(empty($_POST["uname"])){
		   $err_uname="*Username Required";
		   $hasError = true;
		}
		else if(strlen($_POST["uname"])>0 && strlen($_POST["uname"])<5)
		{
			$err_uname="*Username should contain atleast 5 character";
			$has_error=true;
		}
		else
		{
			$uname=htmlspecialchars($_POST["uname"]);
		}
	   
		if(empty($_POST["pass"])){
		   $err_pass="*Password Required";
		   $hasError = true;
		}
		else if(strlen($_POST["pass"])>0 && strlen($_POST["pass"])<8 )
		{
			$err_pass="*Password should contain atleast 8 character";
			$has_error=true;
		}
		else
		{
			$pass=htmlspecialchars($_POST["pass"]);
		}
		
		if(empty($_POST["cpass"])){
			$err_cpass="*Confirm your password.";
			$has_error=true;
		}
		else if(($_POST["pass"])!=($_POST["cpass"]))
		{
			$err_cpass="*Password doesn't match";
			$has_error=true;
		}
		else
		{
			$cpass=htmlspecialchars($_POST["cpass"]);
		}
	   
		if(empty($_POST["num"])){
		   $err_num="*Phone Number";
		   $hasError = true;
		}
		else if(is_numeric($_POST["num"])==false)
		{
			$err_num="*Invalid number format";
			$has_error=true;
		}
		else if(strlen($_POST["num"])>0 && strlen($_POST["num"])<11)
		{
			$err_num="*Invalid number format";
			$has_error=true;
		}
		else{
		   $num = htmlspecialchars($_POST["num"]);
		}
		
		if(empty($_POST["add"])){
		   $err_add="*Please give address";
		   $hasError = true;
		}	 
		else{
		   $add = htmlspecialchars($_POST["add"]);
		}
		
		if(isset($_POST["gender"])==false){
			$err_gender="*Select gender";
			$has_error=true;
		}
		else
		{
			$gender=$_POST["gender"];					
		}
								
		if (empty($_POST["email"]))
		{
			$err_email = "*Email is required";
			$hasError = true;
  	    }	

		else if(strpos($_POST["email"],"@")=="" || strpos($_POST["email"],".")=="")
		{
			$err_email="*Invalid Email Format";
			$has_error=true;
		}
		else
		{
			$email=htmlspecialchars($_POST["email"]);
		}
	 
		if(empty($_POST["birth"])){
		   $err_birth="*Date Of Birth Required";
		   $hasError = true;
		}
		else if(strlen($_POST["birth"])>0 && strlen($_POST["birth"])<10)
		{
			$err_birth="*Invalid date format";
			$has_error=true;
		}		
		else{
		   $birth = htmlspecialchars($_POST["birth"]);
		}
		//other validation
		if(!$hasError){
			$_SESSION["user"]=$name;
			Addpatient('$id','$uname','$pass','$email','$num','$add','$gender','$birth');
			
		}
		/*if(!$hasError){
			interUser($_POST["name"],$_POST["username"],$_POST["password"],$_POST["email"]);
		}*/		
	}

	/*if(isset($_POST["login"])){
	
	   if(empty($_POST["uname"])){
		   $err_uname="Username Required";
		   $hasError = true;
	   }
	   else{
		   $uname = htmlspecialchars($_POST["uname"]);
	   }
	   if(empty($_POST["pass"])){
		   $err_pass="Password Required";
		   $hasError = true;
	   }
	   else{
		   $pass = htmlspecialchars($_POST["pass"]);
	   }
	   
	   if(!$hasEerror){
			$_SESSION["user"]=authenticateManager($uname,$pass);
			if(authenticateManager($uname,$pass)){
				
				header("Location:dashboard.php");
			}
			echo "Invalid username or password";
		}
	}*/
	
	function addsignup($ID,$username,$password,$email,$num,$add,$gender,$birth){
		$query = "insert into user values('$ID','$uname','$pass','$email','$num','$add','$gender','$birth')";		
		execute($query);
		header("Location:dashboard.php");
	}

	function authenticateManager($username,$password){
		$query = "select * from user where username='$username' and password='$password'";
		$result = get($query);
		
		if(count($result) > 0){
			return $result[0];
		}
		return false;
	}
	
	function checkUsernameValidity($username){
		$query = "select * from user where username='$username'";
		$result = get($query);
		
		if(count($result) > 0){
			return "false";
		}
		return "true";
	}
?>