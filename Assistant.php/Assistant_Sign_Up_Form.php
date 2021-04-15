<?php 
require_once "Assistant_Controller.php/registrationController.php";

?>


<html>
	<head></head>
	<body>
	    <fieldset style="width:1000px" align="center">
	    <legend align="center"><center><h1>Sign Up As Assistant</h1></center></legend>
		<br>
			<?php
				if(!empty($_SESSION['message'])){
					echo $_SESSION['message'];
					//$_SESSION['message']=""
				}
				
			?>
		<br>
		<form action="" method="post">
			<table>
			     <tr>
					<td><span><b>Name</b>:</span></td>
					<td><input type="text" name="name" value = "<?php echo $name;?>"><br>
					<td><span><font color="red"> <?php echo $err_name;?> </font></span></td>
				</tr>
				<tr>
					<td><span><b>Username</b>:</span></td>
					<td><input type="text" name="uname" value = "<?php echo $uname;?>"><br>
					<td><span><?php echo $err_uname;?></span></td>
				</tr>
				<tr>
					<td><span><b>Password</b>:</span></td>
					<td><input type="password" name="pass" value = "<?php echo $pass;?>"><br>
					<td><span><?php echo $err_pass;?></span></td>
				</tr>
				<tr>
					<td><span><b>Confirm Password</b>:</span></td>
					<td><input type="password" name="conpass" value = "<?php echo $conpass;?>"><br>
					<td><span><?php echo $err_conpass;?></span></td>
				</tr>
				<tr>
					<td><span><b>Email</b>:</span></td>
					<td><input type="text" name="email" value = "<?php echo $email;?>"><br>
					<td><span><?php echo $err_email;?></span></td>
				</tr>
				<tr>
				    <td><span><b>Phone</b>:</span></td>
					<td><input type="text" name="number" size="9"  value="<?php echo $number;?>"><br>
					<td><span><?php echo $err_number;?></span></td>
				</tr>
				<tr>
					<td><span><b>Doctor's Name</b>:</span></td>
					<td><input type="text" name="dname" value = "<?php echo $dname;?>"><br>
					<td><span><?php echo $err_dname;?></span></td>
				</tr>
				<tr>
					<td><span><b>Hospital Name</b>:</span></td>
					<td><input type="text" name="hname" value = "<?php echo $hname;?>"><br>
					<td><span><?php echo $err_hname;?></span></td>
				</tr>
					
				<tr>
					<td><span><b>Birth Date</b>:</span></td>
                    <td>
                        <select name="day">
                            <option disabled selected>Day</option>
                            <?php 
                                for($i=1;$i<=31;$i++)
                                {
                                    echo "<option>$i<option>";
                                }
                            ?>
                        </select>
                        <select name="month">
                            <option disabled selected>Month</option>
                            <?php 
                                $months=array("Jan"=>"1", "Feb"=>"2", "Mar"=>"3", "Apr"=>"4", "May"=>"5", "June"=>"6","Jul"=>"7", "Aug"=>"8", "Sep"=>"9", "Oct"=>"10", "Nov"=>"11", "Dec"=>"12");
                                foreach($months as $x => $x_value) {
                                    echo "<option>$x($x_value)<option>";
                                    
                                  }
                            ?>
                        </select>
                        <select name="year">
                        <option disabled selected>Year</option>
                        <?php 
                                for($i=1985;$i<=2021;$i++)
                                {
                                    echo "<option>$i<option>";
                                }
                            ?>
                        </select>
                        <?php echo $err_birthday; ?>
				</tr>
				<tr>
					<td><span><b>Gender</b>:</span></td>
					<td><input type="radio" name="gender" value="Male"><span>Male</span>
					    <input type="radio" name="gender" value="Female"><span>Female</span></td>
					<td><span><?php echo $err_gender;?></span></td>
				</tr>
				
			</table>
			<br>
			<input type="submit" name="Register">
			<br>
			<h5 style="text-align:left;">Already have an account? <a href="Login.php">Log-In</a></h5>
			<a href="index.php">Go To HOME</a>
			
		</form>
		</fieldset>
	</body>
</html>