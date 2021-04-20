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

function hasWhiteSpace(s) {
  return s.indexOf(" ") >= 0;
}
function hasAttherate(s) {
  return s.indexOf("@") >= 0;
}

function hasSpecialChar(s) {
  if (s.indexOf("#") >= 0 || s.indexOf("?") >= 0) {
    return true;
  } else {
    return false;
  }
}

//validate email check
function validateEmail(email) {
  var pos_at = email.indexOf("@");
  var pos_dot = email.indexOf(".", pos_at + 1);
  if (pos_at < pos_dot) {
    return true;
  }
  return false;
}

// checking lower and upper characters
function validatePass(s) {
  hasUpper = false;
  hasLower = false;
  for (var i = 0; i < s.length; i++) {
    if (s[i] == s[i].toUpperCase()) {
      hasUpper = true;
    } else {
      hasUpper = hasUpper;
    }
    if (s[i] == s[i].toLowerCase()) {
      hasLower = true;
    } else {
      hasLower = hasLower;
    }
  }
  if (hasLower == false || hasUpper == false) {
    return false;
  } else {
    return true;
  }
}


function validate(){
	      refresh();
		  var hasError=false;
		  //var name= get("name");
		  
		  if(name.value==""){
			  document.getElementById("err_name").innerHTML = "Name Required!";
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
		  else if (hasWhiteSpace(uame.value)) {
			  document.getElementById("err_uname").innerHTML = "Username must not have whitespace";
			  hasError = true;
		  }
		  

		  if(get(pass.value ==""){
			  document.getElementById("err_pass").innerHTML = "Password Required!";
			  hasError = true;
		  }
		  else if (pass.value.length < 8) {
			  document.getElementById("err_pass").innerHTML = "Password must be more than 8 characters";
			  hasError = true;
		  } 
		  else if (hasWhiteSpace(pass.value)) {
			 document.getElementById("err_pass").innerHTML = "Password cant contain whitespace";
             hasError = true;
		  } 
		  else if (!hasSpecialChar(pass.value)) {
			 document.getElementById("err_pass").innerHTML = "Password must contain ? or #";
			 hasError = true;
		  } 
		  else if (!validatePass(pass.value)) {
			 document.getElementById("err_pass").innerHTML = "Password must contain upper and lower characters";
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
		  else if (!hasAttherate(email.value)) {
			document.getElementById("err_email").innerHTML = "*Email must contain @";
			hasError = true;
		  } else if (!validateEmail(email.value)) {
			document.getElementById("err_email").innerHTML = "*Email is invalid";
			hasError = true;
		  }
  
		  if(number.value ==""){
			  document.getElementById("err_number").innerHTML = "Phone No. Required!";
			  hasError = true;
		  }
		  else if (hasWhiteSpace(number.value)) {
			document.getElementById("err_number").innerHTML = "*Contact number can not contain whitespace";
			hasError = true;
		  } else if (number.value.length < 11) {
			document.getElementById("err_number").innerHTML = "*Contact number must contain 11 digits";
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

}
