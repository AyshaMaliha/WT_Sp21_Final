<?php	
	$db_server="localhost";
	$db_user="root";
	$db_password="";
	$db_name="patient2";
		
	function execute($query){ //running insert,update,delete
		global $db_server,$db_user,$db_password,$db_name;
		$conn = mysqli_connect($db_server,$db_user,$db_password,$db_name);
		mysqli_query($conn,$query);
	}
	
	function get($query){ //running select
		global $db_server,$db_user,$db_password,$db_name;
		$conn = mysqli_connect($db_server,$db_user,$db_password,$db_name);
		$result = mysqli_query($conn,$query);
		$data = [];
		
		if(mysqli_num_rows($result) > 0){
			while($row = mysqli_fetch_assoc($result)){
				$data[] = $row;
			}
		}
		return $data;	
	}	
?>