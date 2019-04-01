<?PHP
include "../core/reclamation.php";
$reclamationC=new ReclamationC();
if (isset($_POST["id_reclamation"])){
	$reclamationC->supprimerReclamation($_POST["id_reclamation"]);
	header('Location: tables-editable reclamations.php');
}

?>