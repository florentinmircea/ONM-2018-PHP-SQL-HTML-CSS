<?php
include("config.php");
$user=$login_session;
if(time() - $_SESSION['timestamp'] > 300) { //subtract new timestamp from the old one
    $_SESSION['logged_in'] = false;
	session_destroy();
    session_unset();
	header("location: login.php"); //redirect to index.php
    exit;
	} 
	else 
	{
    $_SESSION['timestamp'] = time(); //set new timestamp
	}
?>