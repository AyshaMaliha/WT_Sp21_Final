var hour = document.getElementById("hr");
var min = document.getElementById("min");
var zone = document.getElementById("zone");
var day = document.getElementById("day")
var floors = document.getElementById("floor");
var room = document.getElementById("room");




function validate(){
	      refresh();
		  var hasError=false;
		  
		  if(day.value=="Day" || day.value.length<=0){
			  document.getElementById("err_day").innerHTML = "*Day Required!";
			  hasError = true;
		  }
		  
		  
		  if(hour.value=="Hour" || min.value=="Min" || zone.value=="Zone" || hour.value.length<=0 || min.value.length<=0 || zone.value.length<=0){
			  document.getElementById("err_time").innerHTML = "*Time Required!";
			  hasError = true;
		  }
		  
		  
		  
		  
		 
		  if(room.value ==""){
			  document.getElementById("err_room").innerHTML = "*Room no Required!";
			  hasError = true;
		  }
		 
		  
		  
		  if(floors.value =="Floor" || floors.value.length<=0){
			  document.getElementById("err_floor").innerHTML = "*Floor required!";
			  hasError = true;
		  }
		  
		  
		  
		  
		  return !hasError;
	  }

	  



function refresh() 
{
		  document.getElementById("err_day").innerHTML = "";
		  document.getElementById("err_time").innerHTML = "";
		  document.getElementById("err_room").innerHTML = "";
		  document.getElementById("err_floor").innerHTML = "";


}