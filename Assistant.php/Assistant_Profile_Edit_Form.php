<?php
	$name="";
	$err_name="";
	$uname = "";
	$err_uname="";
	$email="";
	$err_email="";
	$number="";
	$err_number="";
	$bdate="";
	$day="";
	$err_day="";
	$month="";
	$err_month="";
	$year="";
	$err_year="";
	$gender="";
	$err_gender="";
	$birthday="";
	$err_birthday="";
	
	
	
	
	if($_SERVER["REQUEST_METHOD"] == "POST")
	{
		if(empty($_POST["name"]))
         {
             $err_name="[Name Requires]";
         }
         else
         {
             $name=htmlspecialchars($_POST["name"]);
         }
		 if(empty($_POST["uname"]))
		 {
			 $err_uname="[Username Required]";
		 }
		 elseif(strlen($_POST["uname"])<6)
		 {
			 $err_uname="[Username must be 6 charachters long]";
		 }
		 elseif(strpos($_POST["uname"]," "))
		 {
			 $err_uname="[Username should not contain white space]";
		 }
		 else
		 {
			 $uname=htmlspecialchars($_POST["uname"]);
		 }
		
		if(empty($_POST["email"]))
        {
            $err_email="[email required]";
        }
        elseif(!strpos($_POST["email"],"@"))
        {
            $err_email="[email must contain '@' sign]";
        }
        else
        {
            $pos_at  = strpos($_POST["email"],"@");
            if(!strpos($_POST["email"],".",$pos_at))
            {
                $err_email="[at least one dot needed after '@' sign]";
            }
            else
            {
                $email=htmlspecialchars($_POST["email"]);
            }
             
         }
		if(empty($_POST["number"]))
         {
             $err_number="[Number Requires]";
         }
         elseif(!is_numeric($_POST["number"]))
         {
             $err_number="[number should only contain neumeric value]";
         }
         else
         {
             $number=htmlspecialchars($_POST["number"]);
         }
		
		
		
		 
		if(!isset($_POST["gender"]))
		{ 
			$err_gender = "No buttons were checked."; 
		} 
		else
		{
			$gender = $_POST["gender"];
		}
		if(!isset($_POST["about"]))
		{ 
			$err_about = "No buttons were checked."; 
		} 
		else
		{
			$about = $_POST["about"];
		}
		if(!isset($_POST['day']) || !isset($_POST['month']) || !isset($_POST['year'])){
			$err_birthday = "Date of birth is required!";
		}else{
			$birthday = $_POST['day']."/".$_POST['month']."/".$_POST['year'];
		}
		
	
		echo "Name: ". $_POST["name"]."<br>";
		echo "User Name: ". $_POST["uname"]."<br>";
		echo "Email: ". $_POST["email"]."<br>";
		echo "Number: ". $_POST["number"]."<br>";
		echo "Gender: ". $gender."<br>";
		echo "Date of Birth: ". $birthday."<br>";
		
		
	}
	
	

?>


<html>
	<head></head>
	<body>
	    <fieldset style="width:1000px" align="center">
	    <legend align="center"><center><h1>Profile</h1></center></legend>
		<form action="" method="post" enctype="multipart/form-data">
		
		<!--<img align="center" src="Profile_images.php/profileImage.jpg" alt="" height="300px" width="250px"><br>-->
		<br>
		
		<!--<input type="file" name="profileImage"><br>-->
		<br>
	
			<table>
			    <tr>
					<td><span><b>Name</b>:<b>Noor A Aysha</b></span></td>
					<td><input type="text" name="name" value = "<?php echo $name;?>"><br>
					<td><span><?php echo $err_name;?></span></td>
				</tr>
				<tr>
					<td><span><b>Username</b>:<b>Aysha_Maliha</b></span></td>
					<td><input type="text" name="uname" value = "<?php echo $uname;?>"><br>
					<td><span><?php echo $err_uname;?></span></td>
				</tr>
				
				<tr>
					<td><span><b>Email</b>:<b>ayshamaliha15@gmail.com</b></span></td>
					<td><input type="text" name="email" value = "<?php echo $email;?>"><br>
					<td><span><?php echo $err_email;?></span></td>
				</tr>
				<tr>
				    <td><span><b>Phone</b>:<b>01992012220</b></span></td>
					<td><input type="text" name="number" size="9"  value="<?php echo $number;?>"><br>
					<td><span><?php echo $err_number;?></span></td>
				</tr>
				
				
					
				<tr>
					<td><span><b>Birth Date</b>:<b>15/Jan(1)/1997</b></span></td>
                    <td>
                        <select name="day" value="<?php echo $day;?>">
                            <option disabled selected>Day</option>
                            <?php 
						
                                for($i=1;$i<=31;$i++)
                                {
                                    echo "<option>$i<option>";
                                }
                            ?>
                        </select>
                        <select name="month" value="<?php echo $months;?>">
                            <option disabled selected>Month</option>
                            <?php 
                                $months=array("Jan"=>"1", "Feb"=>"2", "Mar"=>"3", "Apr"=>"4", "May"=>"5", "June"=>"6","Jul"=>"7", "Aug"=>"8", "Sep"=>"9", "Oct"=>"10", "Nov"=>"11", "Dec"=>"12");
                                foreach($months as $x => $x_value) {
                                    echo "<option>$x($x_value)<option>";
                                    
                                  }
                            ?>
                        </select>
                        <select name="year" value="<?php echo $year;?>">
                        <option disabled selected>Year</option>
                        <?php 
                                for($i=1985;$i<=2021;$i++)
                                {
                                    echo "<option>$i<option>";
                                }
                            ?>
                        </select>
                        <?php echo $err_birthday;?>
				</tr>
				<tr>
					<td><span><b>Gender</b>:<b> Female</b></span></td>
					<td><input type="radio" name="gender" value="Male"><span>Male</span>
					    <input type="radio" name="gender" value="Female"><span>Female</span></td>
					<td><span><?php echo $err_gender;?></span></td>
				</tr>
				
			</table>
			<br>
			<button align="center" onclick="document.location='Assistant_Account.php'" style="height: 60px; width: 250px";><b><h2>Update</h2></b></button>
			
		</form>
		</fieldset>
	</body>
</html>