<?php
include('session.php');
include("config.php");
include('autologout.php');
$user=$login_session;
if($_SERVER["REQUEST_METHOD"] == "POST")
{
	if (isset($_POST['nume']) and isset($_POST['prenume']) and isset($_POST['unit_inv']) and isset($_POST['localitatea']))
	{
	$nume = $_POST['nume'];
	$prenume = $_POST['prenume'];
	$clasa=$_POST['clasa'];
	$unitinv=$_POST['unit_inv'];
	$localitate=$_POST['localitatea'];
	$id=$_POST['id'];
	$initiala=$_POST['initatal'];
	$cnp=$_POST['cnp'];
	$sex=$_POST['sex'];
	$lconcurs=$_POST['limbaconcurs'];
	$menpost=$_POST['menpost'];
	$cazare=$_POST['cazare'];
	$observatii=$_POST['observatii'];
	$pct_jud=$_POST['pct_jud'];
	$telefon=$_POST['telefon'];
	$prof_ind=$_POST['prof_ind'];

	$nume = mysqli_real_escape_string($db, $nume);
	$prenume = mysqli_real_escape_string($db, $prenume);
	$unitinv = mysqli_real_escape_string($db, $unitinv);
	$localitate = mysqli_real_escape_string($db, $localitate);
	$observatii=mysqli_real_escape_string($db, $observatii);
	$prof_ind=mysqli_real_escape_string($db, $prof_ind);

	$sql = "SELECT id FROM clase WHERE clasa = '$clasa'";
	$result = mysqli_query($db,$sql) or die(mysqli_error($db));
	$row = mysqli_fetch_array($result,MYSQLI_ASSOC);
	$count = mysqli_num_rows($result);


		if($count == 1)
		{
		$sql="DELETE FROM elevi  WHERE id='$id'";
		$result = mysqli_query($db,$sql) or die(mysqli_error($db));
		if($result!=null)
			{
			header("location:modificare.php");
			}
		else
			{
			echo "Eroare";
			header("refresh:1;url=modificare.php");
			}
		}
		else
		{
			echo "Clasa incorecta";
			header("refresh:1;url=modificare.php");
		}
	}
}
?>