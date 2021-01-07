
<?php
include('session.php');
include("config.php");
include('autologout.php');
$user=$login_session;
if($_SERVER["REQUEST_METHOD"] == "POST")
{
	if (isset($_POST['nume']) and isset($_POST['prenume']))
	{
	$nume = $_POST['nume'];
	$prenume = $_POST['prenume'];
	$sex=$_POST['sex'];	
	$lot=$_POST['lot'];
	$email=$_POST['mail'];
	$telefon=$_POST['telefon'];
	$scoala=$_POST['scoala'];
	$localitate=$_POST['localitate'];
	$menpost=$_POST['menpost'];
	$id=$_POST['id'];

	$nume = mysqli_real_escape_string($db, $nume);
	$prenume = mysqli_real_escape_string($db, $prenume);
	
	//echo'$nume,$prenume,$sex,$lot,$email,$telefon,$scoala,$localitate,$menpost';
	
		$sql="UPDATE profesori SET nume='$nume', prenume='$prenume', sex='$sex', lot='$lot', email='$email', telefon='$telefon',scoala='$scoala',localitate='$localitate',menpost='$menpost' WHERE id='$id'";
		$result = mysqli_query($db,$sql) or die(mysqli_error($db));
		if($result!=null)
			{
			header("location:modprof.php");
			}
		else
			{
			echo "Eroare";
			header("refresh:1;url=modprof.php");
			}
		}
}
?>