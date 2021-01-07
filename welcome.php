<?php
   include('session.php');
   include("config.php");
   include('autologout.php');
   $user=$login_session;
   session_start();
   $sql = "SELECT verificare FROM utilizatori WHERE username = '$user'";
      $result = mysqli_query($db,$sql) or die(mysqli_error($db));
	  $value = mysqli_fetch_object($result);
	  if($value->verificare==0)
	  {
		$message = "Parola trebuie schimbata";
		echo "<script type='text/javascript'>alert('$message');</script>";
		header("refresh:1;url=schpass.php");
	  }
		  
?>
<html">
   
   <head>
      <title>Welcome </title>
	  <link rel="stylesheet" type="text/css" href="css/meniuphp.css">
   </head>
   
   <body>
   <ul>
	<li><a class="active" href="welcome.php">Acasa</a></li>
	<li><a href="adaugare.php">Adaugare</a></li>
	<li><a href="modificare.php">Modificare</a></li>
	<li><a href="profesori.php">Adaugare profesori</a></li>
	<li><a href="modprof.php">Modificare profesori</a></li>
	<li><a href="contactadm.html">Contact</a></li>
	<li style="float:right"><a href="logout.php">Logout</a></li>
   </ul>
   <br><br><br>
      <h1 align="center">Welcome <?php echo $login_session; ?></h1> 
   </body>
   
</html>