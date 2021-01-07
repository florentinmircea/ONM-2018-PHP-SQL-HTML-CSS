<?php
include('session.php');
include("config.php");
include('autologout.php');
$user=$login_session;
$query="SELECT judet FROM utilizatori WHERE username='$user'";
$rezultat= mysqli_query($db,$query) or die(mysqli_error($db));
$value = mysqli_fetch_object($rezultat);

$query = "SELECT id,nume,prenume,sex,lot,email,telefon,scoala,localitate,menpost FROM profesori WHERE judet='$value->judet' ORDER BY nume,prenume"; //You don't need a ; like you do in SQL
$result = mysqli_query($db,$query) or die(mysqli_error($db));
echo "<br><br><br>";
echo "<form method='post' action='editareprof.php'>";
echo "<table border='1' align='center'>"; // start a table tag in the HTML
echo "<tr><td></td><td>Nume</td><td>Prenume</td><td>Sex</td><td>Lot</td><td>Email</td><td>Telefon</td><td>Scoala</td><td>Localitate</td><td>Meniu post</td></tr>";
while($row = mysqli_fetch_array($result)){   //Creates a loop to loop through results
echo "<tr>
		<td><button  type='submit' value ='". $row['id'] ."' name='id'>Editeaza</button></td>
		<td>" . $row['nume'] . "</td>
		<td>" . $row['prenume'] . "</td>
		<td>" . $row['sex'] . "</td>
		<td>" . $row['lot'] . "</td>
		<td>" . $row['email'] . "</td>
		<td>" . $row['telefon'] . "</td>
		<td>" . $row['scoala'] . "</td>
		<td>" . $row['localitate'] . "</td>
		<td>" . $row['menpost'] . "</td>

	 </tr>";  //$row['index'] the index here is a field name
}

echo "</table>"; //Close the table in HTML
echo "</form>";
?>
<html>
<head>
<title>Modificare profesori</title>
<link rel="stylesheet" type="text/css" href="css/meniuphp.css">
<link rel="stylesheet" type="text/css" href="css/tabel.css">
</head>
<body bgcolor="" font-color="red">

<ul>
  <li><a href="welcome.php">Acasa</a></li>
  <li><a href="adaugare.php">Adaugare</a></li>
  <li><a href="modificare.php">Modificare</a></li>
  <li><a href="profesori.php">Adaugare profesori</a></li>
  <li><a class="active" href="modprof.php">Modificare profesori</a></li>
	<li><a href="contactadm.html">Contact</a></li>
  <li style="float:right"><a href="logout.php">Logout</a></li>
</ul>
<br><br><br>
</html>