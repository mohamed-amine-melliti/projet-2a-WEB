<?PHP
include "../../core/ProduitC.php";
$ProduitC=new ProduitC();
if (isset($_POST["idproduit"])){
	$ProduitC->supprimerProduit($_POST["idproduit"]);
	header('Location: afficherProduit.php');
}

?>