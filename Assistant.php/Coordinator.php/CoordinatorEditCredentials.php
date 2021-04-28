<?php

	$err_name = "";
	$uname = "";
	$err_uname="";
	$pass="";
	$err_pass="";
	$c_pass = "";
	$err_c_pass = "";
	
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
			 $uname=htmlspecialchars($_POST["uname"]);
		 }
		
		if(empty($_POST["pass"]))
		 {
			 $err_pass="Password Required";
		 }
		 
		 elseif (strlen($_POST["pass"])<8) {
		 	$err_pass="Password must be 8 charachters long";
		 }

		 elseif(strpos($_POST["pass"]," "))
		 {
			 $err_pass="Password should not contain white space";
		 }
		 elseif(!strpos($_POST["pass"],"#") && !strpos($_POST["pass"],"?"))
        {
                $err_pass="Password should contain at least one special character";
        }
   
		else
		{
            $u=0; $l=0; $d=0;
            for($i=0; $i<strlen($_POST["pass"]); $i++)
            {
                if(ctype_upper($_POST["pass"][$i]))
                {
                    $u=1;
                    break;
                }
            }
            for($i=0; $i<strlen($_POST["pass"]); $i++)
            {
                if(ctype_lower($_POST["pass"][$i]))
                {
                    $l=1;
                    break;
                }
            }
            for($i=0; $i<strlen($_POST["pass"]); $i++)
            {
                if(ctype_digit($_POST["pass"][$i]))
                {
                    $d=1;
                    break;
                }
            }
        if(!$u==1 || !$l==1 || !$d==1)
           {
               $err_pass="Must have at least one upper case, one lower case & one numeric value";
           }
		else
           {
               $pass=htmlspecialchars($_POST["pass"]);
               if($_POST["pass"]==$_POST["c_pass"])
               {
                   $c_pass=$_POST["pass"];
               }
               elseif(empty($_POST["c_pass"]))
               {
                   $err_c_pass="Please re-insert password";
               }
               else
               {
                   $err_c_pass="Password does not match";
               }
           }
		}
			
			
		
		
	
		echo "User Name: ". $_POST["uname"]."<br>";
		echo "Password: ". $_POST["pass"]."<br>";
		echo "Confirm Password: ". $_POST["c_pass"]."<br>";
		
		
			  
		
		
	}
	
	

?>



<html>
	<head></head>
	<body>
	<fieldset>
		<legend><h1><b>Edit Coordinator Credentials</b></h1></legend>
		<form action="" method="post">
		<table>
		
		<tr>
					<td><span><b>Username</b>:</span></td>
					<td>:<input type="text" name="uname" value = "<?php echo $uname;?>" ><br>
					<td><span><?php echo $err_uname;?></span></td>
				</tr>
				<tr>
					<td><span><b>Password</b>:</span></td>
					<td>:<input type="password" name="pass" value = "<?php echo $pass;?>"><br>
					<td><span><?php echo $err_pass;?></span></td>
				</tr>
				<tr>
					<td><span><b>Confirm Password</b>:</span></td>
					<td>:<input type="password" name="c_pass" value = "<?php echo $c_pass;?>"><br>
					<td><span><?php echo $err_c_pass;?></span></td>
				</tr>
		
		</form>
		</table>
		
		
		<button type="submit" >Save</button>
	
	
	</fieldset>
		
		
	</body>
</html>