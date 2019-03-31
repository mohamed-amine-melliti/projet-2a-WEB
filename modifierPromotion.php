<HTML>
<head>
</head>
<body>
<?PHP
include "../../entities/Promotion.php";
include "../../core/PromotionC.php";
if (isset($_GET['idpromo'])){
	$PromotionC=new PromotionC();
    $result=$PromotionC->recupererPromotion($_GET['idpromo']);
	foreach($result as $row){
		$idpromo=$row['idpromo'];
		$nompromo=$row['nompromo'];
		$datedebut=$row['datedebut'];
		$pourcentage=$row['pourcentage'];
		$datefin=$row['datefin'];
		$image=$row['image'];
		
?>
<form method="POST">
<table>
<caption>Modifier Promotion</caption>
<tr>
<td>idpromo</td>
<td><input type="number" name="idpromo" value="<?PHP echo $idpromo ?>"></td>
</tr>
<tr>
<td>nompromo</td>
<td><input type="text" name="nompromo" value="<?PHP echo $nompromo ?>"></td>
</tr>
<tr>
<td>datedebut</td>
<td><input type="text" name="datedebut" value="<?PHP echo $datedebut ?>"></td>
</tr>
<tr>
<td>pourcentage</td>
<td><input type="number" name="pourcentage" value="<?PHP echo $pourcentage ?>"></td>
</tr>
<tr>
<td>datefin</td>
<td><input type="text" name="datefin" value="<?PHP echo $datefin ?>"></td>
</tr> 
<tr>
<td>image</td>
<td><input type="text" name="image" value="<?PHP echo $image ?>"></td>
</tr>
<tr>
<td></td>
<td><input type="submit" name="modifier" value="modifier"></td>
</tr>
<tr>
<td></td>
<td><input type="hidden" name="idpromo_ini" value="<?PHP echo $_GET['idpromo'];?>"></td>
</tr>
</table>
</form>
<?PHP
	}
}
if (isset($_POST['modifier'])){
	$Promotion=new Promotion($_POST['idpromo'],$_POST['nompromo'],$_POST['datedebut'],$_POST['pourcentage'],$_POST['datefin'],$_POST['image']);
	$PromotionC->modifierPromotion($Promotion,$_POST['idpromo_ini']);
	echo $_POST['idpromo_ini'];
	header('Location: afficherPromotion.php');
}
?>
</body>
</HTMl>