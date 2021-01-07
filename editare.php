<?php
include('session.php');
include("config.php");
include('autologout.php');
$user=$login_session;
if (isset($_POST['id'])){
$id=$_POST['id'];
$query = "SELECT nume,prenume,clasa,unit_inv,localitatea,initatal,cnp,sex,limbaconcurs,cazare,menpost,observatii,pct_jud,telefon,prof_ind FROM elevi WHERE id='$id'"; //You don't need a ; like you do in SQL
$result = mysqli_query($db,$query) or die(mysqli_error($db));
$value = mysqli_fetch_object($result);
}


?>
<html>
<head>
<title>Editare participanti </title>
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
<br><br>
<table border='0' width='480px' cellpadding='0' cellspacing='0' align='center'>
<center><tr>
   <td><h1 align="center">Editare participanti</h1></td>
</tr><center>
<form method="post" action="<?echo $SERVER[PHP_SELF];?>" autocomplete="off">
<input type="hidden" name="id" value="<?php echo ("$id");?>" />
<table border='0' width='480px' cellpadding='0' cellspacing='0' align='center'>
<tr>
    <td align='center'>Nume:</td>
    <td><input type='text' name='nume' maxlength="50" style="text-transform: capitalize;" required value="<?php echo ("$value->nume"); ?>" ></td>
</tr>
<tr> <td>&nbsp;</td> </tr>
<tr>
    <td align='center'>Prenume:</td>
    <td><input type='text' name='prenume' maxlength="50" style="text-transform: capitalize;" required value="<?php echo ("$value->prenume"); ?>"></td>
</tr>
<tr> <td>&nbsp;</td> </tr>
<tr>
    <td align='center'>Initiala tatalui:</td>
    <td><input type='text' name='initatal' maxlength="1" style="text-transform: capitalize;" required value="<?php echo ("$value->initatal"); ?>"></td>
</tr>
<tr> <td>&nbsp;</td> </tr>
<tr>
    <td align='center'>CNP</td>
    <td><input type='text' name='cnp' maxlength="13" pattern= "[0-9]{13}" title="Doar cifre" required value="<?php echo ("$value->cnp"); ?>"></td>
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
<tr>
    <td align='center'>Clasa:</td>
    <td>
		<!--<select name="clasa">-->
			<?php 
			echo "<select name='clasa'>";
			if($value->clasa==5)
			{
				echo "<option value='5' selected='selected'>V</option>";
				echo "<option value='6'>VI</option>";
				echo "<option value='7'>VII</option>";
				echo "<option value='8'>VIII</option>";
				echo "<option value='9'>IX</option>";
				echo "<option value='10'>X</option>";
				echo "<option value='11'>XI</option>";
				echo "<option value='12'>XII</option>";
			}
			if($value->clasa==6)
			{
				echo "<option value='5'>V</option>";
				echo "<option value='6' selected='selected'>VI</option>";
				echo "<option value='7'>VII</option>";
				echo "<option value='8'>VIII</option>";
				echo "<option value='9'>IX</option>";
				echo "<option value='10'>X</option>";
				echo "<option value='11'>XI</option>";
				echo "<option value='12'>XII</option>";
			}
			if($value->clasa==7)
			{
				echo "<option value='5'>V</option>";
				echo "<option value='6'>VI</option>";
				echo "<option value='7' selected='selected'>VII</option>";
				echo "<option value='8'>VIII</option>";
				echo "<option value='9'>IX</option>";
				echo "<option value='10'>X</option>";
				echo "<option value='11'>XI</option>";
				echo "<option value='12'>XII</option>";
			}
			if($value->clasa==8)
			{
				echo "<option value='5'>V</option>";
				echo "<option value='6'>VI</option>";
				echo "<option value='7'>VII</option>";
				echo "<option value='8' selected='selected'>VIII</option>";
				echo "<option value='9'>IX</option>";
				echo "<option value='10'>X</option>";
				echo "<option value='11'>XI</option>";
				echo "<option value='12'>XII</option>";
			}
			if($value->clasa==9)
			{
				echo "<option value='5'>V</option>";
				echo "<option value='6'>VI</option>";
				echo "<option value='7'>VII</option>";
				echo "<option value='8'>VIII</option>";
				echo "<option value='9' selected='selected'>IX</option>";
				echo "<option value='10'>X</option>";
				echo "<option value='11'>XI</option>";
				echo "<option value='12'>XII</option>";
			}
			if($value->clasa==10)
			{
				echo "<option value='5'>V</option>";
				echo "<option value='6'>VI</option>";
				echo "<option value='7'>VII</option>";
				echo "<option value='8'>VIII</option>";
				echo "<option value='9'>IX</option>";
				echo "<option value='10' selected='selected'>X</option>";
				echo "<option value='11'>XI</option>";
				echo "<option value='12'>XII</option>";
			}
			if($value->clasa==11)
			{
				echo "<option value='5'>V</option>";
				echo "<option value='6'>VI</option>";
				echo "<option value='7'>VII</option>";
				echo "<option value='8'>VIII</option>";
				echo "<option value='9'>IX</option>";
				echo "<option value='10'>X</option>";
				echo "<option value='11' selected='selected'>XI</option>";
				echo "<option value='12'>XII</option>";
			}if($value->clasa==12)
			{
				echo "<option value='5'>V</option>";
				echo "<option value='6'>VI</option>";
				echo "<option value='7'>VII</option>";
				echo "<option value='8'>VIII</option>";
				echo "<option value='9'>IX</option>";
				echo "<option value='10'>X</option>";
				echo "<option value='11'>XI</option>";
				echo "<option value='12' selected='selected'>XII</option>";
			}
			echo "</select>";
			?>
	</td>
</tr>
<tr> <td>&nbsp;</td> </tr>
<tr>
    <td align='center'>Unitatea de invatamant:</td>
    <td><input type='text' name='unit_inv' maxlength="50" style="text-transform: capitalize;" required value="<?php echo ("$value->unit_inv"); ?>"></td>
</tr>
<tr> <td>&nbsp;</td> </tr>
<tr>
    <td align='center'>Localitatea</td>
    <td><input type='text' name='localitatea' maxlength="50" required value="<?php echo ("$value->localitatea"); ?>"></td>
</tr>
<tr> <td>&nbsp;</td> </tr>
<tr>
    <td align='center'>Punctaj judeteana</td>
    <td><input type='text' name='pct_jud' maxlength="10" onkeyup="checkDec(this);" title="Zecimalele se pun cu ." required value="<?php echo ("$value->pct_jud"); ?>"></td>
</tr>
<tr> <td>&nbsp;</td> </tr>
<tr>
    <td align='center'>Nr.telefon</td>
    <td><input type='text' name='telefon' maxlength="10" pattern= "[0-9]{10}" title="Doar cifre" placeholder="0757777777" required value="<?php echo ("$value->telefon"); ?>"></td>
</tr>
<tr> <td>&nbsp;</td> </tr>
<tr>
    <td align='center'>Profesor	indrumator(coordonator pregatire)</td>
    <td><input type='text' name='prof_ind' maxlength="50" style="text-transform: capitalize;" required value="<?php echo ("$value->prof_ind"); ?>"></td>
</tr>
<tr> <td>&nbsp;</td> </tr>
<tr>
    <td align='center'>Limba concurs:</td>
    <td>
		<?php 
			echo "<select name='limbaconcurs'>";
			if($value->limbaconcurs==Romana)
			{
				echo "<option value='Romana' selected='selected'>RO</option>";
				echo "<option value='Maghiara'>MA</option>";
				echo "<option value='Germana'>GE</option>";

			}
			if($value->limbaconcurs==Maghiara)
			{
				echo "<option value='Romana'>RO</option>";
				echo "<option value='Maghiara' selected='selected'>MA</option>";
				echo "<option value='Germana'>GE</option>";
			}
			if($value->limbaconcurs==Germana)
			{
				echo "<option value='Romana'>RO</option>";
				echo "<option value='Maghiara'>MA</option>";
				echo "<option value='Germana' selected='selected'>GE</option>";
			}
			echo "</select>";
		?>
	</td>
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
<tr>
    <td align='center'>Cazare:</td>
    <td>
		<?php 
			echo "<select name='cazare'>";
			if($value->cazare==DA)
			{
				echo "<option value='DA' selected='selected'>DA</option>";
				echo "<option value='NU'>NU</option>";
			}
			if($value->cazare==NU)
			{
				echo "<option value='DA'>DA</option>";
				echo "<option value='NU' selected='selected'>NU</option>";
			}
			echo "</select>";
		?>
	</td>
</tr>
<tr> <td>&nbsp;</td> </tr>
<tr>
    <td align='center'>Observatii</td>
    <td><textarea name="observatii" rows="10" cols="30" maxlength="100" placeholder="Observatii"><?php echo ("$value->observatii"); ?></textarea></td>
</tr>
<tr> <td>&nbsp;</td> </tr>
<table border='0' cellpadding='0' cellspacing='0' width='480px' align='center'>
<tr>
    <td align='center'><input type='submit' name='Update' value="Actualizeaza"></td>
    	<td align='center'><input type='submit' name='stergere' value="Sterge"></td>
	<td align='center'><a href="modificare.php"><input type="button" value="Renunta"/></a></td>
</tr>
<tr>
</tr>
<tr>
</tr>
</table>
</table>
</form>
</table>
</body>
</html>
<?
if (isset($_POST['Update'])) include("update.php");
if (isset($_POST['stergere'])) include("sterge.php");
?>