<?php
   session_start();
   $uname="";
   $pass="";
   if($_SERVER["REQUEST_METHOD"]=="POST"){
	   $uname=$_POST["uname"];
	   $pass=$_POST["pass"];
	   if($uname == "Aysha" && $pass == "123456"){
		   header("Location: dashboard.php");
	   }
   }

?>
<html>
    <head></head>
	<body>
		<h1>Welcome<?php echo $SESSION["user"];?></h1>
	     <form method="post">
			<input type="text" name="uname" placeholder="username"><br>
			<input type="password" name="pass" placeholder="password"><br>
			<input type="submit" value="Log In"><br>
		</form>
	</body>		


			



</html>