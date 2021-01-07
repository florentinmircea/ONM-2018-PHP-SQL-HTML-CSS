<?php
include('session.php');
include("config.php");
include('autologout.php');
$user=$login_session;
//session_start();
$query="SELECT judet FROM utilizatori WHERE username='$user'";
$rezultat= mysqli_query($db,$query) or die(mysqli_error($db));
$value = mysqli_fetch_object($rezultat);

$query = "SELECT id,nume,prenume,clasa,unit_inv,localitatea,initatal,cnp,sex,limbaconcurs,menpost,cazare,observatii,pct_jud,telefon,prof_ind FROM elevi WHERE judetul='$value->judet' ORDER BY LENGTH(clasa), clasa,nume,prenume"; //You don't need a ; like you do in SQL
$result = mysqli_query($db,$query) or die(mysqli_error($db));
echo "<br><br><br>";
echo "<form method='post' action='editare.php'>";
echo "<table border='1' align='center'>"; // start a table tag in the HTML
echo "<tr><td></td><td>Nume</td><td>Prenume</td><td>Initiala tatalui</td><td>CNP</td><td>Sex</td><td>Clasa</td><td>Unitate Invatamant</td><td>Punctaj judeteana</td><td>Nr telefon</td><td>Pprof. indrumator</td><td>Localitate</td><td>Limba concurs</td><td>Meniu post</td><td>Cazare</td><td>Observatii</td></tr>";
while($row = mysqli_fetch_array($result)){   //Creates a loop to loop through results
echo "<tr>
		<td><button  type='submit' value ='". $row['id'] ."' name='id'>Editeaza</button></td>
		<td>" . $row['nume'] . "</td>
		<td>" . $row['prenume'] . "</td>
		<td>" . $row['initatal'] . "</td>
		<td>" . $row['cnp'] . "</td>
		<td>" . $row['sex'] . "</td>
		<td>" . $row['clasa'] . "</td>
		<td>" . $row['unit_inv'] . "</td>
		<td>" . $row['pct_jud'] . "</td>
		<td>" . $row['telefon'] . "</td>
		<td>" . $row['prof_ind'] . "</td>
		<td>" . $row['localitatea'] . "</td>
		<td>" . $row['limbaconcurs'] . "</td>
		<td>" . $row['menpost'] . "</td>
		<td>" . $row['cazare'] . "</td>
		<td>" . $row['observatii'] . "</td>

	 </tr>";  //$row['index'] the index here is a field name
}

echo "</table>"; //Close the table in HTML
echo "</form>";
//mysql_close(); //Make sure to close out the database connection

?>
<html>
<head>
<title>Modificare elevi adaugati </title>
<link rel="stylesheet" type="text/css" href="css/meniuphp.css">
<link rel="stylesheet" type="text/css" href="css/tabel.css">
</head>
<body bgcolor="" font-color="red">

<ul>
  <li><a href="welcome.php">Acasa</a></li>
  <li><a href="adaugare.php">Adaugare</a></li>
  <li><a class="active" href="modificare.php">Modificare</a></li>
  <li><a href="profesori.php">Adaugare profesori</a></li>
  <li><a href="modprof.php">Modificare profesori</a></li>
	<li><a href="contactadm.html">Contact</a></li>
  <li style="float:right"><a href="logout.php">Logout</a></li>
</ul>
<br><br><br>
</html>