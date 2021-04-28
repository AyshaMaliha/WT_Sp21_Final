<?php
     require_once "Assistant_Controller.php/loginController.php";

?>

<html>

	<head>
	     
	</head>
	<body>
	<center><h1><b>Welcome to Hospital Hub!</b></h1></center>
	<fieldset>
		<legend><h1><b>Log In</b></h1></legend>
	
	<form action="" onsubmit="return validate()" method="post"> 
	<center table>
	
		<tr>
					<td><span><b>Username</b>:</span></td>
					<td>:<input type="text" name="uname" id="uname" value = "<?php echo $uname;?>" ><br>
					<td><span id="err_uname" ><?php echo $err_uname;?></span></td>
		</tr>
		<br>
		<tr>
					<td><span><b>Password</b>:</span></td>
					<td>:<input type="password" name="pass" id="pass"  value = "<?php echo $pass;?>"><br>
					<td><span  id="err_pass" ><?php echo $err_pass;?></span></td>
		</tr>
	
	</table>
	
	<br>
	<!-- <button  type="submit" formaction="Assistant_Home_Form.php" style="height: 40px; width: 200px; float: center"><b><h3>Log In</h3></b> </button><br> -->
	
		<input type="submit" name="login" value="Log In" style="height: 40px; width: 200px; float: center"><br> 

	
	<a href="All_login.php">Back</a><br>
	<a href="Assistant_Sign_Up_Form.php">Sign Up</a>

	</form>
	</fieldset>
		
		
	</body>
	<script src="JS.php/Login_Validation.js"></script>
</html>