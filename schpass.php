<?php
include('session.php');
include("config.php");
include('autologout.php');
$user=$login_session;
session_start();
if($_SERVER["REQUEST_METHOD"] == "POST") {

      if (isset($_POST['pass']) and isset($_POST['password']) and isset($_POST['mail'])){
      $pass = $_POST['pass'];
      $password =$_POST['password']; 
	  $email=$_POST['mail'];
	  $sql = "SELECT id FROM utilizatori WHERE username = '$user' and password = '$pass'";
	  $result = mysqli_query($db,$sql) or die(mysqli_error($db));
      $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
	  $count = mysqli_num_rows($result);
      
      if($count == 1)
	  {
      if($pass!=$password)
	  {
      $sql = "UPDATE utilizatori SET password='$password', email='$email', verificare='1' WHERE username='$user'";
      $result = mysqli_query($db,$sql) or die(mysqli_error($db));
	  if($result!=null)
	  {
		  echo("Date actualizate");
		  header("refresh:1;url=welcome.php");
	  }	
	  }
	  else
	  {
		  echo("Eroare");
		  header("refresh:1;url=schpass.php");
	  }
	  }
	  else
	  {
		  echo("Eroare");
		  header("refresh:1;url=schpass.php");
	  }
   }
}
?>
<html>  
   <body bgcolor = "#FFFFFF">
	
      <div align = "center">
         <div style = "width:300px; border: solid 1px #333333; " align = "left">
            <div style = "background-color:#333333; color:#FFFFFF; padding:3px;"><b>Actualizare date</b></div>
				
            <div style = "margin:30px">
               
               <form action = "" method = "post">
                  <label>Parola curenta  :</label><input type = "text" name = "pass" class = "box" required /><br /><br />
                  <label>Parola noua :</label><input type = "password" name = "password" class = "box" required pattern=".{6,}" title="Cel putin 6 caractere" /><br/><br />
				  <label>Email :</label><br><input type = "email" name = "mail" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$" placeholder="mail@exemplu.com" class = "box" required /><br/><br />
                  <input type = "submit" value = " Submit "/><br />
               </form>
               
               <div style = "font-size:11px; color:#cc0000; margin-top:10px"><?php echo $error; ?></div>
					
            </div>
				
         </div>
			
      </div>

   </body>
</html>