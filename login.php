<?php
   include("config.php");
   session_start();
   
   if($_SERVER["REQUEST_METHOD"] == "POST") {
      // username and password sent from form 
      
      $myusername = mysqli_real_escape_string($db,$_POST['username']);
      $mypassword = mysqli_real_escape_string($db,$_POST['password']); 
      
      $sql = "SELECT id FROM utilizatori WHERE username = '$myusername' and password = '$mypassword'";
      $result = mysqli_query($db,$sql) or die(mysqli_error($db));
      $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
      $active = $row['active'];
	  
      $count = mysqli_num_rows($result);
      
      // If result matched $myusername and $mypassword, table row must be 1 row
	  
	  $sql = "SELECT status FROM utilizatori WHERE username = '$myusername'";
      $result = mysqli_query($db,$sql) or die(mysqli_error($db));
	  $value = mysqli_fetch_object($result);
	
		
      if($count == 1) {
         //session_register("myusername");
         $_SESSION['login_user'] = $myusername;
		 $_SESSION['timestamp'] = time();
		 $_SESSION['logged_in'] = true;
         header("location: welcome.php");
      }else {
         $error = "Date incorecte sau utilizator autentificat";
      }
   }
?>
<html>
   
   <head>
      <title>Login Page</title>
      
      <style type = "text/css">
         body {
            font-family:Arial, Helvetica, sans-serif;
            font-size:14px;
         }
         label {
            font-weight:bold;
            width:100px;
            font-size:14px;
         }
         .box {
            border:#666666 solid 1px;
         }
      </style>
      
   </head>
   
   <body bgcolor = "#FFFFFF">
	
      <div align = "center">
         <div style = "width:300px; border: solid 1px #333333; " align = "left">
            <div style = "background-color:#333333; color:#FFFFFF; padding:3px;"><b>Login</b></div>
				
            <div style = "margin:30px">
               
               <form action = "" method = "post" autocomplete="off">
                  <label>UserName  :</label><input type = "text" name = "username" class = "box" required /><br /><br />
                  <label>Password  :</label><input type = "password" name = "password" class = "box" required /><br/><br />
                  <input type = "submit" value = " Submit "/><br />
               </form>
               
               <div style = "font-size:11px; color:#cc0000; margin-top:10px"><?php echo $error; ?></div>
					
            </div>
				
         </div>
			
      </div>

   </body>
</html>