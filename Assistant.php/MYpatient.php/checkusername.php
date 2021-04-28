<?php
	require_once "controllers/SignupController.php";
	$username = $_GET["uname"];
	$res = checkUsernameValidity($username);
	echo $res;
?>