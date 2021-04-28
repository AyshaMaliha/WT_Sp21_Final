<?php
	require_once "controllers/LoginController.php";
	
?>
<html>
     <head>
	     <link rel="stylesheet" type="text/css" href="styles/mystyle.css">
	      <style>
						  
		  </style>
	 </head>
     <body>
	      
		  <!--<div class="header my-font"  class="my-font" >Header</div>-->	  
	      <div class="logindiv">
		  			  			  
		      <table align="center">
				  <tr>
					<td colspan="2" align="center"><span class="err-msg"><?php echo $err_message;?></span>
					</td>
				  </tr>
			      <tr>
				    <td><img src="n.jpg" width="150px" height="200px"></td>
		            <td><h1 align="center" style="font-family:verdana;">Patient Login</h1></td>
			      </tr>
			  </table>
			  <form action="" method="post">
				  <table align="center">
						<tr>
						   <td><span class="my-font">Username: </span></td>
						   <td><input class="my-font my-text-field" type="text" value="<?php echo $uname;?>" placeholder="username" name="uname">
						   <br><span class="err-msg"><?php echo $err_uname;?></span>
						</td>
					    </tr>
					    <tr>
						   <td><span class="my-font">Password: </span></td>
						   <td><input class="my-font my-text-field" type="password" placeholder="password"  name="pass">
						   <br><span class="err-msg"><?php echo $err_pass;?></span></td>
					    </tr>
					    <tr>
                           <td colspan="2" align="right"><input class="btn-mine my-font" type="submit"  value="Login" name="login">    </td>      
                        </tr>
                  </table>
                  
                        </p>                   
                	  <a href="Home.php">Home</a>
					     </table>
				
                        </p>
		
		</div>
				  </table>
			  </form>
		  </div>
	 </body>
	 <script>
	 function get (id){
			return document.getElementById(id);
		}
	   function validate(){
		   //alert("Login");
		   cleanUp();
		   var hasError=false;		   
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
		   
		   //alert (err_msg);
		   if(!hasError){
		   return true;
		   }		  
			   return false;
		   
	   }
		function cleanUp(){			
			get ("err_uname").innerHTML="";
			get ("err_pass").innerHTML="";			
		}
									
	//alert("This is patient Login");
	 
	 </script>
</html>