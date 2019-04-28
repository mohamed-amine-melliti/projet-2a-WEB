<?PHP
include "../../entities/offre.php";
include "../../core/offreC.php";

if ( isset($_POST['descripition']) and isset($_POST['datedebut']) and isset($_POST['pourcentage']) and isset($_POST['datefin']))
{ 
	if( $_POST['pourcentage']>=0 and $_POST['pourcentage']<=100)
	{
		if(strtotime($_POST['datefin']) >= strtotime($_POST['datedebut']))
		{

		
$offre1=new offre("",$_POST['descripition'],$_POST['datedebut'],$_POST['pourcentage'],$_POST['datefin']);
//Partie2
/*
var_dump($offre1);
}
*/
//Partie3
$offre1C=new offreC();
$offre1C->ajouteroffre($offre1);
header('Location: afficheroffre.php');
}
else "vérifier les champs";
}	
}else{
	echo "vérifier les champs";
}
//*/

?>