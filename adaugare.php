<?php
   include('session.php');
   include('autologout.php');
?>
<html>
<head>
<title>Adaugare participanti </title>
<link rel="stylesheet" type="text/css" href="css/meniuphp.css">
<script type="text/Javascript">
function checkDec(el){
 var ex = /^[0-9]+\.?[0-9]*$/;
 if(ex.test(el.value)==false){
   el.value = el.value.substring(0,el.value.length - 1);
  }
}
</script>
</head>
<body bgcolor="" font-color="red">
<!--(?=.*\d)(?=.*([\w]).*)[ \w]*-->

<ul>
  <li><a href="welcome.php">Acasa</a></li>
  <li><a class="active" href="adaugare.php">Adaugare</a></li>
  <li><a href="modificare.php">Modificare</a></li>
  <li><a href="profesori.php">Adaugare profesori</a></li>
  <li><a href="modprof.php">Modificare profesori</a></li>
  <li><a href="contactadm.html">Contact</a></li>
  <li style="float:right"><a href="logout.php">Logout</a></li>
</ul>
<br><br>
<table border='0' width='480px' cellpadding='0' cellspacing='0' align='center'>
<center><tr>
   <td><h1 align="center">Adaugare participanti</h1></td>
</tr><center>
<form method="post" action="addelevi.php" autocomplete="off">
<table border='0' width='480px' cellpadding='0' cellspacing='0' align='center'>
<tr>
    <td align='center'>Nume:</td>
    <td><input type='text' name='nume' maxlength="50" style="text-transform: capitalize;" required></td>
</tr>
<tr> <td>&nbsp;</td> </tr>
<tr>
    <td align='center'>Prenume:</td>
    <td><input type='text' name='prenume' maxlength="50" style="text-transform: capitalize;" required></td>
</tr>
<tr> <td>&nbsp;</td> </tr>
<tr>
    <td align='center'>Initiala tatalui:</td>
    <td><input type='text' name='initatal' maxlength="1" style="text-transform: capitalize;" required></td>
</tr>
<tr> <td>&nbsp;</td> </tr>
<tr>
    <td align='center'>CNP</td>
    <td><input type='text' name='cnp' maxlength="13" pattern= "[0-9]{13}" title="Doar cifre" required></td>
</tr>
<tr> <td>&nbsp;</td> </tr>
<tr>
    <td align='center'>Sex:</td>
    <td>
		<select name="sex">
			<option value="M">M</option>
			<option value="F">F</option>
		</select>
	</td>
</tr>
<tr> <td>&nbsp;</td> </tr>
<tr>
    <td align='center'>Clasa:</td>
    <td>
		<select name="clasa">
			<option value="5">V</option>
			<option value="6">VI</option>
			<option value="7">VII</option>
			<option value="8">VIII</option>
			<option value="9">IX</option>
			<option value="10">X</option>
			<option value="11">XI</option>
			<option value="12">XII</option>
		</select>
	</td>
</tr>
<tr> <td>&nbsp;</td> </tr>
<tr>
    <td align='center'>Unitatea de invatamant:</td>
    <td><input type='text' name='unit_inv' maxlength="50" required></td>
</tr>
<tr> <td>&nbsp;</td> </tr>
<tr>
    <td align='center'>Localitatea</td>
    <td><input type='text' name='localitatea' maxlength="50" style="text-transform: capitalize;" required></td>
</tr>
<tr> <td>&nbsp;</td> </tr>
<tr>
    <td align='center'>Punctaj judeteana</td>
    <td><input type='text' name='pct_jud' maxlength="10" onkeyup="checkDec(this);" title="Zecimalele se pun cu ." required></td>
</tr>
<tr> <td>&nbsp;</td> </tr>
<tr>
    <td align='center'>Nr.telefon</td>
    <td><input type='text' name='telefon' maxlength="10" pattern= "[0-9]{10}" title="Doar cifre" placeholder="0757777777" required></td>
</tr>
<tr> <td>&nbsp;</td> </tr>
<tr>
    <td align='center'>Profesor	indrumator(coordonator pregatire)</td>
    <td><input type='text' name='prof_ind' maxlength="50" style="text-transform: capitalize;" required></td>
</tr>
<tr> <td>&nbsp;</td> </tr>
<tr>
    <td align='center'>Limba concurs:</td>
    <td>
		<select name="limbaconcurs">
			<option value="Romana">RO</option>
			<option value="Maghiara">MA</option>
			<option value="Germana">GE</option>
		</select>
	</td>
</tr>
<tr> <td>&nbsp;</td> </tr>
<tr>
    <td align='center'>Meniu de post:</td>
    <td>
		<select name="menpost">
			<option value="DA">DA</option>
			<option value="NU" selected="selected">NU</option>
		</select>
	</td>
</tr>
<tr> <td>&nbsp;</td> </tr>
<tr>
    <td align='center'>Cazare:</td>
    <td>
		<select name="cazare">
			<option value="DA">DA</option>
			<option value="NU">NU</option>
		</select>
	</td>
</tr>
<tr> <td>&nbsp;</td> </tr>
<tr>
    <td align='center'>Observatii</td>
    <td><textarea name="observatii" rows="10" cols="30" maxlength="100" placeholder="Observatii"></textarea></td>
</tr>
<tr> <td>&nbsp;</td> </tr>
<table border='0' cellpadding='0' cellspacing='0' width='480px' align='center'>
<tr>
    <td align='center'><input type='submit' name='REGISTER' value="Adaugare"></td>
</tr>
</table>
</table>
</form>
</table>
</body>
</html>