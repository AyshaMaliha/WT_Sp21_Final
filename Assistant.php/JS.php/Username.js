function checkUsername(uname){
			//alert(user_name.value);
		  var uname=uname.value;
		  var xHttp= new XMLHttpRequest();
		  xHttp.onreadystatechange=function(){
			  if(xHttp.readyState==4 && xHttp.status==200){
				var rs= xHttp.responseText;
				if(rs==="true"){
					document.getElementById("err_uname").innerHTML="";
				}
				else{
					document.getElementById("err_uname").innerHTML="Username Already taken";
				}
			  }
		  };
		  xHttp.open("get","Assistant_check.UserNameL.php?uname="+uname,true);
		  xHttp.send();
}