var user_name=document.getElementById("uname");
var pass=document.getElementById("pass");
function validate(){
    refresh();
    var hasError=false;
    
    if(user_name.value==""){
        document.getElementById("err_uname").innerHTML="*Username Required";
        hasError=true;
        
    }
	else if (user_name.value.length < 6) {
              document.getElementById("err_uname").innerHTML = "Username must be at least 6 letters";
              hasError = true;
		  } 
		  else if (hasWhiteSpace(user_name.value)) {
			  document.getElementById("err_uname").innerHTML = "Username must not have whitespace";
			  hasError = true;
		  }
    if(pass.value==""){
        document.getElementById("err_pass").innerHTML="*Password Required";
        hasError=true;
    }
	else if (pass.value.length < 8) {
			  document.getElementById("err_pass").innerHTML = "Password must be more than 8 characters";
			  hasError = true;
		  } 
		  
    return !hasError;
}

function refresh(){
    document.getElementById("err_uname").innerHTML="";
    document.getElementById("err_pass").innerHTML="";
}