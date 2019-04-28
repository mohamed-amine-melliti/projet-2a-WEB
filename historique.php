<?PHP
include "../../core/commandeC.php";
include "../../entities/commande.php";
$db = config::getConnexion();
	
if (isset($_POST['idCmd']) and isset($_POST['dateCmd']) and isset($_POST['prixtot']) and isset($_POST['date_prev']) and isset($_POST['etatCmd'])){
	
$commande1=new commande($_POST['idCmd'],$_POST['dateCmd'],$_POST['prixtot'],$_POST['date_prev'],$_POST['etatCmd']);

	 $commande1C=new commandeC();
$commande1C->historique($commande1);
//header('Location: afficherhistorique.php');
$commande1C->supprimercommande($_POST["idCmd"]) ;
}


	
           // header('Location: index.php');
      
?>

      
    

           
      


  
	

        
    

           
      


  
	

