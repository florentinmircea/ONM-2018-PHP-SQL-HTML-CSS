<?php
include("config.php");
if($_SERVER["REQUEST_METHOD"] == "POST") {
if (isset($_POST['sortare'])){
$sortare=$_POST['sortare'];
if($sortare==1)
	header("location:participanti.php");
if($sortare==2)
{
$query="SELECT nume,prenume,clasa,unit_inv,localitatea,judetul FROM elevi WHERE clasa='5' ORDER BY nume,prenume";
$result= mysqli_query($db,$query) or die(mysqli_error($db));
}
if($sortare==3)
{
$query="SELECT nume,prenume,clasa,unit_inv,localitatea,judetul FROM elevi WHERE clasa='6' ORDER BY nume,prenume";
$result= mysqli_query($db,$query) or die(mysqli_error($db));
}
if($sortare==4)
{
$query="SELECT nume,prenume,clasa,unit_inv,localitatea,judetul FROM elevi WHERE clasa='7' ORDER BY nume,prenume";
$result= mysqli_query($db,$query) or die(mysqli_error($db));
}
if($sortare==5)
{
$query="SELECT nume,prenume,clasa,unit_inv,localitatea,judetul FROM elevi WHERE clasa='8' ORDER BY nume,prenume";
$result= mysqli_query($db,$query) or die(mysqli_error($db));
}
if($sortare==6)
{
$query="SELECT nume,prenume,clasa,unit_inv,localitatea,judetul FROM elevi WHERE clasa='9' ORDER BY nume,prenume";
$result= mysqli_query($db,$query) or die(mysqli_error($db));
}
if($sortare==7)
{
$query="SELECT nume,prenume,clasa,unit_inv,localitatea,judetul FROM elevi WHERE clasa='10' ORDER BY nume,prenume";
$result= mysqli_query($db,$query) or die(mysqli_error($db));
}
if($sortare==8)
{
$query="SELECT nume,prenume,clasa,unit_inv,localitatea,judetul FROM elevi WHERE clasa='11' ORDER BY nume,prenume";
$result= mysqli_query($db,$query) or die(mysqli_error($db));
}
if($sortare==9)
{
$query="SELECT nume,prenume,clasa,unit_inv,localitatea,judetul FROM elevi WHERE clasa='12' ORDER BY nume,prenume";
$result= mysqli_query($db,$query) or die(mysqli_error($db));
}
echo "<br><br><br>";
echo "<input align='center' type='text' id='myInput' onkeyup='myFunction()' placeholder='Cautare participanti ...' title='Selectati un criteriu si cautati'>";
echo "<form action='' method = 'post' id='selectie'>
  <input type='radio' name='criteriu' value='0' onclick='check(this.value)'>Nume
  <input type='radio' name='criteriu' value='1' onclick='check(this.value)'>Prenume
  <input type='radio' name='criteriu' value='2' onclick='check(this.value)'>Clasa
  <input type='radio' name='criteriu' value='5' onclick='check(this.value)'>Judetul
  </form>";
echo "<form method='post' action='sortare.php'>";
echo "<table border='1' align='center' id='myTable'>"; // start a table tag in the HTML
echo "<tr class='header'><th>Nume</th><th>Prenume</th><th>Clasa</th><th>Unitate Invatamant</th><th>Localitate</th><th>Judetul</th><th><select name='sortare' id='mySelect'><option value='1'>alfabetic</option><option value='2'>Clasa V</option><option value='3'>Clasa VI</option><option value='4'>Clasa VII</option><option value='5'>Clasa VIII</option><option value='6'>Clasa IX</option><option value='7'>Clasa X</option><option value='8'>Clasa XI</option><option value='9'>Clasa XII</option></select></th><th><input type='submit' id='submit' name='Update' value='Actualizeaza'></th></tr>";
while($row = mysqli_fetch_array($result)){   //Creates a loop to loop through results
echo "<tr>
		<td>" . $row['nume'] . "</td>
		<td>" . $row['prenume'] . "</td>
		<td>" . $row['clasa'] . "</td>
		<td>" . $row['unit_inv'] . "</td>
		<td>" . $row['localitatea'] . "</td>
		<td>" . $row['judetul'] . "</td>

	 </tr>";  //$row['index'] the index here is a field name
}

echo "</table>"; //Close the table in HTML
//echo "<input type='submit' name='Update' value='Actualizeaza'>";
echo "</form>";	
	}
}
?>
<html>
<head>
<style>
* {
  box-sizing: border-box;
}

#myInput {
  background-image: url('/css/search.png');
  background-position: 10px 10px;
  background-repeat: no-repeat;
  width: 100%;
  font-size: 16px;
  padding: 12px 20px 12px 40px;
  border: 1px solid #ddd;
  margin-bottom: 12px;
}

#myTable {
  border-collapse: collapse;
  width: 100%;
  border: 1px solid #ddd;
  font-size: 18px;
}

#myTable th, #myTable td {
  text-align: left;
  padding: 12px;
}

#myTable tr {
  border-bottom: 1px solid #ddd;
}

#myTable tr.header, #myTable tr:hover {
  background-color: #f1f1f1;
}
</style>
</head>
<body>
<p id="demo"></p>
<script>
function myFunction() {
  var input, filter, table, tr, td, i;
  input = document.getElementById("myInput");
  filter = input.value.toUpperCase();
  table = document.getElementById("myTable");
  tr = table.getElementsByTagName("tr");
  for (i = 0; i < tr.length; i++) {
    td = tr[i].getElementsByTagName("td")[0];
	td1 = tr[i].getElementsByTagName("td")[1];
    if (td) {
      if (td.innerHTML.toUpperCase().indexOf(filter) > -1) {
        tr[i].style.display = "";
      } else {
        if (td1.innerHTML.toUpperCase().indexOf(filter) > -1) {
        tr[i].style.display = "";
      } else {
        tr[i].style.display = "none";
      }
		//tr[i].style.display = "none";
      }
    }
  }
}
function select() {
    document.getElementById("selectie").submit();
}
function check(criteriu) {
    x=criteriu;
}
</script>
</body>
</html>