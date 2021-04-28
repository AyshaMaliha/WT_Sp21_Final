<?php
	require_once "controllers/SignupController.php";
?>	
	
<html>
    <head>
	    <link rel="stylesheet" type="text/css" href="styles/mystyle.css">
			<style>
				.btn-mine{
					background-color:tomato;
					color:white;
					border:none;
					width:40%;
					height:30%;
				}
				.btn-mine:hover{
					background-color:red;
				}
				.btn-mine:active{
					background-color:green;
				}
			</style>
	</head>
    <body>	      	 
		<div class="signupdiv">		 		  		
			<table align="center" >
				<tr>
					<td colspan="2" align="center"><span class="err-msg"><?php echo $err_message;?></span>
					</td>
				</tr>							   
			</table>
			
			<fieldset>
			<legend align="center">
				<tr>				
   <td><img src="n.jpg" width="150px" height="200px"></td>				
		            <td><h1 align="center" style="font-family:verdana;">Patient Signup</h1></td>					
				</tr>
			</legend>
			  
			<form action="" method="post" class="form-horizontal form-material" onsubmit="return validate()">
				<div class="form-group">			
				 <table align="center" style="border-collapse:collapse;">
				 <tr>
					<td><span> ID</span></td>
					<td>:
						<input type="text" placeholder="ID" id="id" name="id" value="<?php echo $id?>">
						<span id="err_id"><?php echo $err_id?></span></td>
				</tr>
				<tr>
					<td><span>Name</span></td>
					<td>:
						<input type="text" placeholder="Name" id="name" name="name" value="<?php echo $name?>">
						<span id="err_name"><?php echo $err_name?></span></td>
				</tr>
				<tr>
					<td><span> Username</span></td>
					<td>:
						<input type="text" placeholder="Username" id="uname" name="uname" onfocusout="checkUsername(this)" value="<?php echo $uname?>">
						<span id="err_uname"><?php echo $err_uname?></span></td>
				</tr>
					<tr>
					<td><span>Password</span></td>
					<td>:
						<input type="password" placeholder="Password" id="pass" name="pass" value="<?php echo $pass?>">
						<span id="err_pass"><?php echo $err_pass?></span></td>
				</tr>
					<tr>
						<td><span>Confirm Password </span></td>
						<td>:
				     <input type="password" placeholder="Confirm Password"  id="cpass" name="cpass" value="<?php echo $cpass?>">
					 <span id="err_cpass"><?php echo $err_cpass?></span></td>
			</tr>
				<tr>
					<td><span>Email</span></td>
					<td>:
						<input type="email" placeholder="Email" id="email" name="email" value="<?php echo $email?>">
						<span id="err_email"><?php echo $err_email?></span></td>
				</tr>
				<tr>					   					   
				<td><span>Phone Number </span></td>
                <td>:
				     <input type="num" placeholder="Phone Number" id="num" name="num" value="<?php echo $num?>">
					 <span id="err_num"><?php echo $err_num?></span></td>
			</tr> 
				
			<tr>						
				<td> <span>Gender</span></td>
				<td>:<input type="radio" id="male" value="Male" name="gender">Male
					<input type="radio" id="female" value="Female" name="gender">Female
					<span id="err_gender"><?php echo $err_gender;?></span></td>
			</tr>
						
				<tr>					   
				<td><span>Address </span></td>
                <td>:
				     <input type="add" placeholder="Address" id="add" name="add" value="<?php echo $add?>">
					 <span id="err_add"><?php echo $err_add?></span></td>
			</tr> 
			
				<tr>					   
				<td><span>Date Of Birth </span></td>
                <td>:
				     <input type="text" placeholder="dd/mm/yyyy" id="birth" name="birth" value="<?php echo $birth?>">
					 <span id="err_birth"><?php echo $err_birth?></span></td>
			</tr> 
					   <tr>
					   <td colspan="2" align="center">
						<p><span><input type="checkbox"></span>I agree to the terms of services</p>
						</td>
						</tr>
					    <tr>		

						   <td colspan="2" align="center"><input class="btn-mine my-font" type="submit"  value="Signup" name="signup">	</td>						   
					    </tr>
					
				  </table>
			  
			             <tr>		
						   <p class="message">Already registration? <a href="login.php">Signup</a>
						<tr>	

			  
			  
			  <<a href="Assistant.php/signup.php">Back</a>
			  
			  </form>
			  </fieldset>
		  </div>
		  </div>
	 </body>
	 <script>
		function get (id){
			return document.getElementById(id);
		}
	   function validate(){
		   
		   //cleanUp();
		   var hasError=false;
		   if(get("id").value == ""){
			   get ("err_id").innerHTML="*ID Required<br>";
			   get ("err_id").style.color="red";
			   hasError=true;			  
		   }
		   if(get("name").value == ""){
			   get ("err_name").innerHTML="*Name Required<br>";
			   get ("err_name").style.color="red";
			   hasError=true;			  
		   }
		   if(get("uname").value == ""){
			   get ("err_uname").innerHTML="*Username Required<br>";
			   get ("err_uname").style.color="red";
			   hasError=true;			   
		   }
		   if(get("pass").value == ""){
			   get ("err_pass").innerHTML="*Password Required<br>";
			   get ("err_pass").style.color="red";
			   hasError=true;			   
		   }
		   if(get("cpass").value == ""){
			   get ("err_cpass").innerHTML="*Confirm Password Required<br>";
			   get ("err_cpass").style.color="red";
			   hasError=true;			   
		   }
		   if(get("email").value == ""){
			   get ("err_email").innerHTML="*Email Required<br>";
			   get ("err_email").style.color="red";
			   hasError=true;
			  
		   }
		   if(get("num").value == ""){
			   get ("err_num").innerHTML="*Phone Number Required<br>";
			   get ("err_num").style.color="red";
			   hasError=true;
			   
		   }
		   if(get("add").value == ""){
			   get ("err_add").innerHTML="*Address Required<br>";
			   get ("err_add").style.color="red";
			   hasError=true;
		   }
		   if(!get("male").checked && !get("female").checked ){
				get("err_gender").innerHTML="* Select gender";
				get("err_gender").style.color="red";
				has_error=true;
			}
		   
		   if(get("birth").value == ""){
			   get ("err_birth").innerHTML="*Date Of Birth Required<br>";
			   get ("err_birth").style.color="red";
			   hasError=true;
			   
		   }
		   //alert (err_msg);
		   if(!hasError){
		   return true;
		   }		  
			   return false;
		   
	   }
		function cleanUp(){
			get ("err_id").innerHTML="";
			get ("err_name").innerHTML="";
			get ("err_uname").innerHTML="";
			get ("err_pass").innerHTML="";
			get ("err_cpass").innerHTML="";
			get ("err_email").innerHTML="";
			get ("err_num").innerHTML="";
			get ("err_add").innerHTML="";
			get ("err_gender").innerHTML="";
			get ("err_birth").innerHTML="";
		}
			
		function checkUsername(control){
		var username = control.value;
		//ajax
		var xhttp = new XMLHttpRequest();
		xhttp.onreadystatechange=function(){
			if(this.readyState == 4 && this.status == 200){
				//when server respond
				var rsp = this.responseText;
				if(rsp == "true"){
					document.getElementById("err_uname").innerHTML = "<br>Valid";
				}else{
					document.getElementById("err_uname").innerHTML = "<br>Not Valid";
				}
			}
		};
		xhttp.open("GET","checkusername.php?uname="+username,true);
		xhttp.send();
	}
			
	//alert("This is Add Employee");
	 
	 </script>
</html>
