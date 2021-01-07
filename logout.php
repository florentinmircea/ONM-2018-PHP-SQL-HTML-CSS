<?php
include("config.php");
include('session.php');
$user=$login_session;
$sql="UPDATE utilizatori SET status='0' WHERE username='$user'";
$result = mysqli_query($db,$sql) or die(mysqli_error($db));
   
   if(session_destroy()) {
      header("Location: login.php");
   }
?>