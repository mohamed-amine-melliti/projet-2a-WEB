<?PHP
include "../../core/PromotionC.php";
$Promotion1C=new PromotionC();
$listePromotions=$Promotion1C->afficherPromotions();

//var_dump($listePromotions->fetchAll());
?>
<table border="1">
<tr>
<td>idpromo</td>
<td>nompromo</td>
<td>datedebut</td>
<td>pourcentage</td>
<td>datefin</td>
<td>image</td>
<td>supprimer</td>
<td>modifier</td>
</tr>

<?PHP
foreach($listePromotions as $row){
	?>
	<tr>
	<td><?PHP echo $row['idpromo']; ?></td>
	<td><?PHP echo $row['nompromo']; ?></td>
	<td><?PHP echo $row['datedebut']; ?></td>
	<td><?PHP echo $row['pourcentage']; ?></td>
	<td><?PHP echo $row['datefin']; ?></td>
	<td ><?PHP echo "<img src='images/".$row['image']."' >"; ?></td>

	<td><form method="POST" action="supprimerPromotion.php">
	<input type="submit" name="supprimer" value="supprimer">
	<input type="hidden" value="<?PHP echo $row['idpromo']; ?>" name="idpromo">
	</form>
	</td>
	<td><a href="modifierPromotion.php?idpromo=<?PHP echo $row['idpromo']; ?>">
	Modifier</a></td>
	</tr>
	<?PHP
}
?>
</table>


