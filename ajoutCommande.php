<?PHP
include "../../entities/commande.php";
include "../../core/commandec.php";

if (isset($_POST['idCmd']) and isset($_POST['dateCmd']) and isset($_POST['prixtot']) and isset($_POST['date_prev']) and isset($_POST['etatCmd'])){
$commande1=new commande($_POST['idCmd'],$_POST['dateCmd'],$_POST['prixtot'],$_POST['date_prev'],$_POST['etatCmd']);
//Partie2
/*
var_dump($commande1);
}
*/
//Partie3
$commande1C=new commandeC();
$commande1C->ajoutercommande($commande1);
header('Location: affichercommande1.php');
	
}else{
	echo "vérifier les champs";
}
//*/

?>