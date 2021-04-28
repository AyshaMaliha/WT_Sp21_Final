<?php
require_once "Controller/UpdateController.php";
	
	require_once "coordinatorDBconfig.php";
    $userID = $_SESSION['id'];
	$sql1 = "SELECT * FROM coordinatorinfo WHERE c_id='$userID'";
	$userData = get($sql1);
	$userData = $userData[0];
	
	
	


?>


<html>
	<head></head>
	<body>
	<fieldset>
		<legend><h1><b>Edit Coordinator Profile</b></h1></legend>
		
		<br>
			<?php
				if(!empty($_SESSION['message'])){
					echo $_SESSION['message'];
					
				}
				
			?>
		<br>
		<form action="" method="post" enctype="multipart/form-data">
		
		
		<br>
		
		<table>
			    <tr>
					<td><span><b>Name</b> : <b><?=$userData['c_name']?></b></span></td>
					<td><input type="text" name="name" value = "<?php echo $name;?>"><br>
					<td><span><?php echo $err_name;?></span></td>
				</tr>
				<tr>
					<td><span><b>Username</b> : <b><?=$userData['c_uname']?></b></span></td>
					<td><input type="text" name="uname" value = "<?php echo $uname;?>"><br>
					<td><span><?php echo $err_uname;?></span></td>
				</tr>
				
				<tr>
					<td><span><b>Email</b> : <b><?=$userData['c_email']?></b></span></td>
					<td><input type="text" name="email" value = "<?php echo $email;?>"><br>
					<td><span><?php echo $err_email;?></span></td>
				</tr>
				<tr>
				    <td><span><b>Phone</b> : <b><?=$userData['c_phone']?></b></span></td>
					<td><input type="text" name="number" size="9"  value="<?php echo $number;?>"><br>
					<td><span><?php echo $err_number;?></span></td>
				</tr>
				<tr>
					<td><span><b>Hospital</b> : <b><?=$userData['c_hospital']?></b></span></td>
					<td><input type="text" name="hospital" value = "<?php echo $hospital;?>"><br>
					<td><span><?php echo $err_hospital;?></span></td>
				</tr>
				
				
			</table>
		
		
		
		
		<input type="submit" name="updateDetails" value="Update" style="height: 40px; width: 200px; float: center"><br>
	
	</form>
	</fieldset>
		
		
	</body>
</html>