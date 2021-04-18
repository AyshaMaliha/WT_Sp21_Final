<?php
    require_once "Assistant_db_config.php";
	
	 function getAllInfo()
    {
        $query = "select * from assistantdetails";
        $result = get($query);
        return $result;
    }

    function getList($id)
    {
        $query = "select PID from appointmentdetails where APID=$id";
        $result = get($query);
        if(count($result) > 0)
        {
            return $result[0]; 
        }
        return false; 
    }
?>