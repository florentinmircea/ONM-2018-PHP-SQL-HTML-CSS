<?php
include('session.php');
include("config.php");
include('autologout.php');
$user=$login_session;
   session_start();
if (isset($_POST['nume']) and isset($_POST['prenume']) and isset($_POST['unit_inv']) and isset($_POST['localitatea'])){
$nume = $_POST['nume'];
$prenume = $_POST['prenume'];
$clasa=$_POST['clasa'];
$unitinv=$_POST['unit_inv'];
$localitate=$_POST['localitatea'];
$initiala=$_POST['initatal'];
$cnp=$_POST['cnp'];
$sex=$_POST['sex'];
$pct_jud=$_POST['pct_jud'];
$lconcurs=$_POST['limbaconcurs'];
$menpost=$_POST['menpost'];
$cazare=$_POST['cazare'];
$observatii=$_POST['observatii'];
$telefon=$_POST['telefon'];
$prof_ind=$_POST['prof_ind'];
$query="SELECT judet FROM utilizatori WHERE username='$user'";
$rezultat= mysqli_query($db,$query) or die(mysqli_error($db));
$value = mysqli_fetch_object($rezultat);

$nume = mysqli_real_escape_string($db, $nume);
$prenume = mysqli_real_escape_string($db, $prenume);
$unitinv = mysqli_real_escape_string($db, $unitinv);
$localitate = mysqli_real_escape_string($db, $localitate);
$observatii=mysqli_real_escape_string($db, $observatii);

$sql = "SELECT id FROM clase WHERE clasa = '$clasa'";
$result = mysqli_query($db,$sql) or die(mysqli_error($db));
$row = mysqli_fetch_array($result,MYSQLI_ASSOC);
$count = mysqli_num_rows($result);

if($count == 1)
{
$sql = "INSERT INTO elevi (nume, prenume, clasa, unit_inv, localitatea,judetul,initatal,cnp,sex,limbaconcurs,menpost,cazare,observatii,pct_jud,telefon,prof_ind) VALUES ('$nume','$prenume','$clasa','$unitinv','$localitate','$value->judet','$initiala','$cnp','$sex','$lconcurs','$menpost','$cazare','$observatii','$pct_jud','$telefon','$prof_ind');";
$result = mysqli_query($db,$sql) or die(mysqli_error($db));

if($result!=NULL)
{
echo "Elev introdus cu succes";
header("refresh:1;url=adaugare.php");
}
else
{
	echo "Eroare";
	header("refresh:1;url=adaugare.php");
}

}
else
{
	echo "Clasa incorecta";
	header("refresh:1;url=adaugare.php");
}
}

?>