var name=document.getElementById("name");
var user_name=document.getElementById("uname");
var email=document.getElementById("email");
var contact=document.getElementById("number");


//function hasWhiteSpace(s) {
  //return s.indexOf(" ") >= 0;
//}



function validateType(){
    refresh();
    var hasError=false;
    
	if(name.value==""){
        document.getElementById("err_name").innerHTML="*Assistany Name Required!";
        hasError=true;
        
    }
    if(user_name.value==""){
        document.getElementById("err_uname").innerHTML="*Username Required";
        hasError=true;
        
    }
	else if (user_name.value.length < 6) {
              document.getElementById("err_uname").innerHTML = "Username must be at least 6 letters";
              hasError = true;
		  } 
		  //else if (hasWhiteSpace(user_name.value)) {
			 // document.getElementById("err_uname").innerHTML = "Username must not have whitespace";
			 // hasError = true;
		 // }
   

     if(email.value==""){
        document.getElementById("err_email").innerHTML="*Email Required!";
        hasError=true;
        
    }	
     if(contact.value==""){
        document.getElementById("err_number").innerHTML="*Contact Info Required!";
        hasError=true;
        
    }	
		  
    return !hasError;
}

function refresh(){
    document.getElementById("err_name").innerHTML="";
    document.getElementById("err_uname").innerHTML="";
	document.getElementById("err_email").innerHTML="";
    document.getElementById("err_number").innerHTML="";
}