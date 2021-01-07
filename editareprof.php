<?php
include('session.php');
include("config.php");
include('autologout.php');
$user=$login_session;
if (isset($_POST['id'])){
$id=$_POST['id'];
$query = "SELECT nume,prenume,sex,lot,email,telefon,scoala,localitate,menpost FROM profesori WHERE id='$id'"; //You don't need a ; like you do in SQL
$result = mysqli_query($db,$query) or die(mysqli_error($db));
$value = mysqli_fetch_object($result);
}


?>
<html>
<head>
<title>Modificare profesori coordonatori </title>
<link rel="stylesheet" type="text/css" href="css/meniuphp.css">
</head>
<body bgcolor="" font-color="red">
<br><br>
<table border='0' width='480px' cellpadding='0' cellspacing='0' align='center'>
<center><tr>
   <td><h1 align="center">Modificare profesori</h1></td>
</tr><center>
<form method="post" action="<?echo $SERVER[PHP_SELF];?>" autocomplete="off">
<input type="hidden" name="id" value="<?php echo ("$id");?>" />
<table border='0' width='480px' cellpadding='0' cellspacing='0' align='center'>
<tr>
    <td align='center'>Nume:</td>
    <td><input type='text' name='nume' maxlength="50" required value="<?php echo ("$value->nume"); ?>"></td>
</tr>
<tr> <td>&nbsp;</td> </tr>
<tr>
    <td align='center'>Prenume:</td>
    <td><input type='text' name='prenume' maxlength="50" required value="<?php echo ("$value->prenume"); ?>"></td>
</tr>
<tr> <td>&nbsp;</td> </tr>
<tr>
    <td align='center'>Sex:</td>
    <td>
		<?php 
			echo "<select name='sex'>";
			if($value->sex==M)
			{
				echo "<option value='M' selected='selected'>M</option>";
				echo "<option value='F'>F</option>";
			}
			if($value->sex==F)
			{
				echo "<option value='M'>M</option>";
				echo "<option value='F' selected='selected'>F</option>";
			}
			echo "</select>";
		?>
	</td>
</tr>
<tr> <td>&nbsp;</td> </tr>
<tr> <td>&nbsp;</td> </tr>
<tr>
    <td align='center'>Lot:</td>
    <td>
		<?php 
			echo "<select name='lot'>";
			if($value->lot==S)
			{
				echo "<option value='S' selected='selected'>S</option>";
				echo "<option value='J'>J</option>";
			}
			if($value->lot==J)
			{
				echo "<option value='S'>S</option>";
				echo "<option value='J' selected='selected'>J</option>";
			}
			echo "</select>";
		?>
	</td>
</tr>
<tr> <td>&nbsp;</td> </tr>
<tr>
    <td align='center'>Email:</td>
    <td><input type = "email" name = "mail" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$" placeholder="mail@exemplu.com" title="Introduceti o adresa de mail valida" class = "box" required value="<?php echo ("$value->email"); ?>" /></td>
</tr>
<tr> <td>&nbsp;</td> </tr>
<tr>
    <td align='center'>Nr.telefon</td>
    <td><input type='text' name='telefon' maxlength="10" pattern= "[0-9]{10}" title="Doar cifre" placeholder="0757777777" required value="<?php echo ("$value->telefon"); ?>"></td>
</tr>
<tr> <td>&nbsp;</td> </tr>
<tr>
    <td align='center'>Scoala:</td>
    <td><input type='text' name='scoala' maxlength="50" required value="<?php echo ("$value->scoala"); ?>"></td>
</tr>
<tr> <td>&nbsp;</td> </tr>
<tr>
    <td align='center'>Localitate:</td>
    <td><input type='text' name='localitate' maxlength="50" required value="<?php echo ("$value->localitate"); ?>"></td>
</tr>
<tr> <td>&nbsp;</td> </tr>
<tr>
    <td align='center'>Meniu de post:</td>
    <td>
		<?php 
			echo "<select name='menpost'>";
			if($value->menpost==DA)
			{
				echo "<option value='DA' selected='selected'>DA</option>";
				echo "<option value='NU'>NU</option>";
			}
			if($value->menpost==NU)
			{
				echo "<option value='DA'>DA</option>";
				echo "<option value='NU' selected='selected'>NU</option>";
			}
			echo "</select>";
		?>
	</td>
</tr>
<tr> <td>&nbsp;</td> </tr>
<table border='0' cellpadding='0' cellspacing='0' width='480px' align='center'>
<tr>
    	<td align='center'><input type='submit' name='REGISTER' value="Actualizare"></td>
    	<td align='center'><input type='submit' name='stergere' value="Sterge"></td>
	<td align='center'><a href="modprof.php"><input type="button" value="Renunta"/></a></td>
</tr>
</table>
</table>
</form>
</table>
</body>
</html>
<?
if (isset($_POST['REGISTER'])) include("updateprof.php");
if (isset($_POST['stergere'])) include("stergeprof.php");
?>