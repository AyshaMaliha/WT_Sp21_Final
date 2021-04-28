var name = document.getElementById("name");
var uname = document.getElementById("uname");
var pass = document.getElementById("pass");
var conpass=document.getElementById("conpass")
var email = document.getElementById("email");
var number = document.getElementById("number");
var dname = document.getElementById("dname");
var hname = document.getElementById("hname");
var gender1 = document.getElementById("gender1");
var gender2 = document.getElementById("gender2");
var day = document.getElementById("day");
var month = document.getElementById("month");
var year = document.getElementById("year");




function validate(){
	      refresh();
		  var hasError=false;
		  //var name= get("name");
		  
		  if(name.value==""){
			  document.getElementById("err_name").innerHTML = "Name Required!";
			  hasError = true;
		  }
		  
		  if(day.value=="Day" || month.value=="Month" || year.value=="Year" || day.value.length<=0 || month.value.length<=0 || year.value.length<=0){
			  document.getElementById("err_birthday").innerHTML = "Birthday Required!";
			  //alert("bday err");
			  hasError = true;
		  }
		  
		  
		  if(uname.value==""){
			  document.getElementById("err_uname").innerHTML = "Username Required!";
			  hasError = true;
		  }
		  else if (uname.value.length < 6) {
              document.getElementById("err_uname").innerHTML = "Username must be at least 6 letters";
              hasError = true;
		  } 
		 
		  

		  if(pass.value ==""){
			  document.getElementById("err_pass").innerHTML = "Password Required!";
			  hasError = true;
		  }
		  else if (pass.value.length < 8) {
			  document.getElementById("err_pass").innerHTML = "Password must be more than 8 characters";
			  hasError = true;
		  } 
		 
		  
		  
		  if(conpass.value ==""){
			  document.getElementById("err_conpass").innerHTML = " Confirm Your Password!";
			  hasError = true;
		  }
		  
		  
		  if(email.value ==""){
			  document.getElementById("err_email").innerHTML = "Email Required!";
			  hasError = true;
		  }
		 
		  
		  if(dname.value ==""){
			  document.getElementById("err_dname").innerHTML = "Doctor's Name Required!";
			  hasError = true;
		  }
		  
		  
		  if(hname.value ==""){
			  document.getElementById("err_hname").innerHTML = "Hospital's Name Required!";
			  hasError = true;
		  }
		  
		  
		  if (gender1.checked) {
            hasError = false;
		  }
		  else if (gender2.checked) {
			hasError = false;
		  }
		  else {
			document.getElementById("err_gender").innerHTML = "*Gender is required";
			hasError = true;
		  }
		  
		  return !hasError;
	  }

	  



function refresh() 
{
		  document.getElementById("err_name").innerHTML = "";
		  document.getElementById("err_uname").innerHTML = "";
		  document.getElementById("err_pass").innerHTML = "";
		  document.getElementById("err_conpass").innerHTML = "";
		  document.getElementById("err_email").innerHTML = "";
		  document.getElementById("err_number").innerHTML = "";
		  document.getElementById("err_dname").innerHTML = "";
		  document.getElementById("err_hname").innerHTML = "";
		  document.getElementById("err_gender").innerHTML = "";
		  document.getElementById("err_birthday").innerHTML = "";


}
