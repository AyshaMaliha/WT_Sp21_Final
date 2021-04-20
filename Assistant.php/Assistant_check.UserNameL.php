<?php

    include "Assistant_Controller.php/registrationController.php";
    $user_name=$_GET["uname"];
    $check=checkUsername($user_name);
    if($check){
        echo "true";
    }else {echo "false";}

?>