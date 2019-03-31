<HTML>
<head>
</head>
<body>
<?PHP
include "../../entities/commande.php";
include "../../core/commandeC.php";
if (isset($_GET['idCmd'])){
	$commandeC=new commandeC();
    $result=$commandeC->recuperercommande($_GET['idCmd']);
	foreach($result as $row){
		$idCmd=$row['idCmd'];
		$dateCmd=$row['dateCmd'];
		$prixtot=$row['prixtot'];
		$date_prev=$row['date_prev'];
		$etatCmd=$row['etatCmd'];
?>
<form method="POST">
<table>
<caption>Modifier commande</caption>
<tr>
<td>idCmd</td>
<td><input type="number" name="idCmd" value="<?PHP echo $idCmd ?>"></td>
</tr>
<tr>
<td>dateCmd</td>
<td><input type="text" name="dateCmd" value="<?PHP echo $dateCmd ?>"></td>
</tr>
<tr>
<td>prixtot</td>
<td><input type="text" name="prixtot" value="<?PHP echo $prixtot ?>"></td>
</tr>
<tr>
<td>date_prev</td>
<td><input type="text" name="date_prev" value="<?PHP echo $date_prev ?>"></td>
</tr>
<tr>
<td>etatCmd</td>
<td><input type="text" name="etatCmd" value="<?PHP echo $etatCmd ?>"></td>
</tr>
<tr>
<td></td>
<td><input type="submit" name="modifier" value="modifier"></td>
</tr>
<tr>
<td></td>
<td><input type="hidden" name="idCmd_ini" value="<?PHP echo $_GET['idCmd'];?>"></td>
</tr>
</table>
</form>
<?PHP
	}
}
if (isset($_POST['modifier'])){
	$commande=new commande($_POST['idCmd'],$_POST['dateCmd'],$_POST['prixtot'],$_POST['date_prev'],$_POST['etatCmd']);
	$commandeC->modifiercommande($commande,$_POST['idCmd_ini']);
	echo $_POST['idCmd_ini'];
	header('Location: affichercommande1.php');
}
?>
</body>
</HTMl>