<?PHP
include "../../core/offreC.php";
$offreC=new offreC();
if (isset($_POST["codepromo"])){
	$offreC->supprimeroffre($_POST["codepromo"]);
	header('Location: afficheroffre.php');
}

?>