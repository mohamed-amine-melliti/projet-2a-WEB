<?PHP
include "../../core/commandeC.php";
$commandeC=new commandeC();
if (isset($_POST["idCmd"])){
	$commandeC->supprimercommande($_POST["idCmd"]);
	header('Location: affichercommande1.php');
}

?>