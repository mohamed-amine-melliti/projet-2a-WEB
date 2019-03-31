<?PHP
include "../../core/PromotionC.php";
$PromotionC=new PromotionC();
if (isset($_POST["idpromo"])){
	$PromotionC->supprimerPromotion($_POST["idpromo"]);
	header('Location: afficherpromo.php');
}

?>