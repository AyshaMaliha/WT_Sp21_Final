<?php
     require_once "Assistant_db_config.php";
     setcookie("test_cookie", "test", time() + 3600, '/');

	$uname = "";
	$err_uname="";
	$pass="";
	$err_pass="";
	
	//$db_UserName = "Aysha_Maliha";
	//$db_Password = "Blood#Rider40";
	
	//$login_err="";
	
	
	if($_SERVER["REQUEST_METHOD"] == "POST")
	{
		
		if(empty($_POST["uname"]))
		{
			$err_uname = "Username Required";
		}
		
		elseif(strlen($_POST["uname"]) < 6)
		{
			$err_uname = "Username should be at least 6 characters.";
		}
		elseif(strpos($_POST["uname"], " "))
		{
			$err_uname = "Username can not contain white space.";
		}
		else
		{
			$uname = $_POST["uname"];
		}
		if(empty($_POST["pass"]))
		 {
			 $err_pass="Password Required";
		 }
		 elseif (strlen($_POST["pass"])<8) {
		 	$err_pass="Password must be 8 charachters long";
		 }
		 else
		 {
			 $pass=$_POST["pass"];
		 }
		
			
		
		echo "User Name: ". $_POST["uname"]."<br>";
		echo "Password: ". $_POST["pass"]."<br>";
		
		
		  if($uname == $AUsername && $pass == $APassword && count($_COOKIE) > 0){
		   $query ="select * from assistantinfo where AUsername='$uname' and APassword='$pass'";
		   header("Location: Assistant_Home_Form.php");
        } 
		else {
           echo "Cookies are disabled.";
		  
	   }
		
		
		
	}
	
	

?>

<html>
	<head></head>
	<body>
	<center><h1><b>Welcome to Hospital Hub!</b></h1></center>
	<fieldset>
		<legend><h1><b>Log In</b></h1></legend>
	
	<form action = "" method = "post"> 
	<center table>
	
		<tr>
					<td><span><b>Username</b>:</span></td>
					<td>:<input type="text" name="uname" value = "<?php echo $uname;?>" ><br>
					<td><span><?php echo $err_uname;?></span></td>
		</tr>
		<br>
		<tr>
					<td><span><b>Password</b>:</span></td>
					<td>:<input type="password" name="pass" value = "<?php echo $pass;?>"><br>
					<td><span><?php echo $err_pass;?><?php echo $login_err;?></span></td>
		</tr>
	
	</table>
	
	<br>
	<!-- <button  type="submit" formaction="Assistant_Home_Form.php" style="height: 40px; width: 200px; float: center"><b><h3>Log In</h3></b> </button><br> -->
	
		<button  type="submit"  style="height: 40px; width: 200px; float: center"><b><h3>Log In</h3></b> </button><br> 

	
	<a href="ForgotPassword.php">Forgot Password?</a>
	</form>
	</fieldset>
		
		
	</body>
</html>