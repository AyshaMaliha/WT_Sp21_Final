function get(id){
	return document.getElementById(id);
}


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


function validateEmail(email) {
  var pos_at = email.indexOf("@");
  var pos_dot = email.indexOf(".", pos_at + 1);
  if (pos_at < pos_dot) {
    return true;
  }
  return false;
}


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
		  
		  if(get("name").value==""){
			  get("err_name").innerHTML = "Name Required!";
			  hasError = true;
		  }
		  
		  
		  if(get("name").value==""){
			  get("err_uname").innerHTML = "Username Required!";
			  hasError = true;
		  }
		  else if (get("uname").value.length < 6) {
              get("err_uname").innerHTML = "Username must be at least 6 letters";
              hasError = true;
		  } 
		  else if (hasWhiteSpace(get("uname").value)) {
			  get("err_uname").innerHTML = "Username must not have whitespace";
			  hasError = true;
		  }
		  

		  if(get("pass").value ==""){
			  get("err_pass").innerHTML = "Password Required!";
			  hasError = true;
		  }
		  else if (get("pass").value.length < 8) {
			  get("err_pass").innerHTML = "Password must be more than 8 characters";
			  hasError = true;
		  } 
		  else if (hasWhiteSpace(get("pass").value)) {
			 get("err_pass").innerHTML = "Password cant contain whitespace";
             hasError = true;
		  } 
		  else if (!hasSpecialChar(get("pass").value)) {
			 get("err_pass").innerHTML = "Password must contain ? or #";
			 hasError = true;
		  } 
		  else if (!validatePass(get("pass").value)) {
			 get("err_pass").innerHTML = "Password must contain upper and lower characters";
			 hasError = true;
		  }
		  
		  
		  if(get("conpass").value ==""){
			  get("err_conpass").innerHTML = " Confirm Your Password!";
			  hasError = true;
		  }
		  
		  
		  if(get("email").value ==""){
			  get("err_email").innerHTML = "Email Required!";
			  hasError = true;
		  }
		  else if (!hasAttherate(get("email").value)) {
			get("err_email").innerHTML = "*Email must contain @";
			hasError = true;
		  } else if (!validateEmail(get("email").value)) {
			get("err_email").innerHTML = "*Email is invalid";
			hasError = true;
		  }
  
		  if(get("number").value ==""){
			  get("err_number").innerHTML = "Phone No. Required!";
			  hasError = true;
		  }
		  else if (hasWhiteSpace(get("number").value)) {
			get("err_number").innerHTML = "*Contact number can not contain whitespace";
			hasError = true;
		  } else if (get("number").value.length < 11) {
			get("err_number").innerHTML = "*Contact number must contain 11 digits";
			hasError = true;
		  }
		  
		  if(get("dname").value ==""){
			  get("err_dname").innerHTML = "Doctor's Name Required!";
			  hasError = true;
		  }
		  
		  
		  if(get("hname").value ==""){
			  get("err_hname").innerHTML = "Hospital's Name Required!";
			  hasError = true;
		  }
		  
		  
		  if (get("gender1").checked) {
            hasError = false;
		  }
		  else if (get("gender2").checked) {
			hasError = false;
		  }
		  else {
			get("err_gender").innerHTML = "*Gender is required";
			hasError = true;
		  }
		  
		  return !hasError;
	  }
}
	  



function refresh() 
{
		  get("err_name").innerHTML = "";
		  get("err_uname").innerHTML = "";
		  get("err_pass").innerHTML = "";
		  get("err_conpass").innerHTML = "";
		  get("err_email").innerHTML = "";
		  get("err_number").innerHTML = "";
		  get("err_dname").innerHTML = "";
		  get("err_hname").innerHTML = "";
		  get("err_gender").innerHTML = "";

}