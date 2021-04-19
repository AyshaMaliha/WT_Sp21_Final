<?php
	require_once "Assistant_db_config.php";
    require_once "Assistant_Controller.php/updateController.php";
	
    $userID = $_SESSION['id'];
	$sql1 = "SELECT * FROM assistantinfo WHERE AID='$userID'";
	$userData = get($sql1);
	$userData = $userData[0];
	
	
	

?>


<html>
	<head></head>
	<body>
	    <fieldset style="width:1000px" align="center">
	    <legend align="center"><center><h1>Profile</h1></center></legend>
		<br>
			<?php
				if(!empty($_SESSION['message'])){
					echo $_SESSION['message'];
					//$_SESSION['message']=""
				}
				
			?>
		<br>
		<form action="" method="post" enctype="multipart/form-data">
		
		<!--<img align="center" src="Profile_images.php/profileImage.jpg" alt="" height="300px" width="250px"><br>-->
		<br>
		
		<!--<input type="file" name="profileImage"><br>-->
		<br>
	
			<table>
			    <tr>
					<td><span><b>Name</b>:<b><?=$userData['AName']?></b></span></td>
					<td><input id="click" type="text" onclick="keyClick()" name="name" value = "<?php echo $name;?>"><br>
					<td><span><?php echo $err_name;?></span></td>
				</tr>
				<tr>
					<td><span><b>Username</b>:<b><?=$userData['AUserName']?></b></span></td>
					<td><input type="text" name="uname" value = "<?php echo $uname;?>"><br>
					<td><span><?php echo $err_uname;?></span></td>
				</tr>
				
				<tr>
					<td><span><b>Email</b>:<b><?=$userData['AEmail']?></b></span></td>
					<td><input type="text" name="email" value = "<?php echo $email;?>"><br>
					<td><span><?php echo $err_email;?></span></td>
				</tr>
				<tr>
				    <td><span><b>Phone</b>:<b><?=$userData['APhone']?></b></span></td>
					<td><input type="text" name="number" size="9"  value="<?php echo $number;?>"><br>
					<td><span><?php echo $err_number;?></span></td>
				</tr>
				
				
			</table>
			<br>
<!--<button align="center" onclick="document.location='Assistant_Account.php'" style="height: 60px; width: 250px";><b><h2>Update</h2></b></button>-->
		<input type="submit" name="updateDetails" value="Update" style="height: 40px; width: 200px; float: center"><br> 
					<a href="Assistant_Account.php">Back</a>

			
		</form>
		</fieldset>
	</body>
	<script>
	
    function get(id){
		return document.getElement(id);
	}
	
	var i=0;
	var click = get("click");
	function keyClick(){
		click.onclick = "clicked";
	}
	
	
	</script>
</html>