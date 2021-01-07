<?php
   include('session.php');
   include("config.php");
   include('autologout.php');
   $user=$login_session;
   session_start();
   if($_SERVER["REQUEST_METHOD"] == "POST") {
	 if (isset($_POST['nume']) and isset($_POST['prenume']) and isset($_POST['mail']) and isset($_POST['telefon']) and isset($_POST['scoala'])){	
		$nume = $_POST['nume'];
		$prenume = $_POST['prenume'];
		$sex=$_POST['sex'];
		$lot=$_POST['lot'];
		$email=$_POST['mail'];
		$telefon=$_POST['telefon'];
		$scoala=$_POST['scoala'];
		$localitate=$_POST['localitate'];
		$menpost=$_POST['menpost'];
		
		$nume = mysqli_real_escape_string($db, $nume);
		$prenume = mysqli_real_escape_string($db, $prenume);
		$email = mysqli_real_escape_string($db, $email);
		$scoala = mysqli_real_escape_string($db, $scoala);
		$localitate= mysqli_real_escape_string($db, $localitate);
		
		$query="SELECT judet FROM utilizatori WHERE username='$user'";
		$rezultat= mysqli_query($db,$query) or die(mysqli_error($db));
		$value = mysqli_fetch_object($rezultat);
		
		
		$sql = "INSERT INTO profesori (nume, prenume, sex, lot, email, telefon,scoala,judet,localitate,menpost) VALUES ('$nume','$prenume','$sex','$lot','$email','$telefon','$scoala','$value->judet','$localitate','$menpost');";
		$result = mysqli_query($db,$sql) or die(mysqli_error($db));

		if($result!=NULL)
		{
			echo "Profesor introdus cu succes";
			header("refresh:1;url=profesori.php");
		}
		else
		{
			echo "Eroare";
			header("refresh:2;url=adaugare.php");
		}
		
	 }
   }
?>