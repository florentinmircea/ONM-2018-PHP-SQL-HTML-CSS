<?php
   include('session.php');
   include("config.php");
   include('autologout.php');
   $user=$login_session;
?>
<html>
<head>
<title>Adaugare profesori coordonatori </title>
<link rel="stylesheet" type="text/css" href="css/meniuphp.css">
</head>
<body bgcolor="" font-color="red">
<!--(?=.*\d)(?=.*([\w]).*)[ \w]*-->

<ul>
  <li><a href="welcome.php">Acasa</a></li>
  <li><a href="adaugare.php">Adaugare</a></li>
  <li><a href="modificare.php">Modificare</a></li>
  <li><a class="active" href="profesori.php">Adaugare profesori</a></li>
  <li><a href="modprof.php">Modificare profesori</a></li>
	<li><a href="contactadm.html">Contact</a></li>
  <li style="float:right"><a href="logout.php">Logout</a></li>
</ul>
<br><br>
<table border='0' width='480px' cellpadding='0' cellspacing='0' align='center'>
<center><tr>
   <td><h1 align="center">Adaugare profesori</h1></td>
</tr><center>
<form method="post" action="adaugareprof.php" autocomplete="off">
<table border='0' width='480px' cellpadding='0' cellspacing='0' align='center'>
<tr>
    <td align='center'>Nume:</td>
    <td><input type='text' name='nume' maxlength="50" required></td>
</tr>
<tr> <td>&nbsp;</td> </tr>
<tr>
    <td align='center'>Prenume:</td>
    <td><input type='text' name='prenume' maxlength="50" required></td>
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
<tr> <td>&nbsp;</td> </tr>
<tr>
    <td align='center'>Lot:</td>
    <td>
		<select name="lot">
			<option value="S">S</option>
			<option value="J">J</option>
		</select>
	</td>
</tr>
<tr> <td>&nbsp;</td> </tr>
<tr>
    <td align='center'>Email:</td>
    <td><input type = "email" name = "mail" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$" placeholder="mail@exemplu.com" title="Introduceti o adresa de mail valida" class = "box" required /></td>
</tr>
<tr> <td>&nbsp;</td> </tr>
<tr>
    <td align='center'>Nr.telefon</td>
    <td><input type='text' name='telefon' maxlength="10" pattern= "[0-9]{10}" title="Doar cifre" placeholder="0757777777" required></td>
</tr>
<tr> <td>&nbsp;</td> </tr>
<tr>
    <td align='center'>Scoala:</td>
    <td><input type='text' name='scoala' maxlength="50" required></td>
</tr>
<tr> <td>&nbsp;</td> </tr>
<tr>
    <td align='center'>Localitate:</td>
    <td><input type='text' name='localitate' maxlength="50" required></td>
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