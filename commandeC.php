<?PHP
include "../../config.php";
class commandeC {
function affichercommande ($commande){
		echo "idCmd: ".$commande->getidCmd()."<br>";
		echo "dateCmd: ".$commande->getdateCmd()."<br>";
		echo "prixtot: ".$commande->getprixtot()."<br>";
		echo "date_prev: ".$commande->getdate_prev()."<br>";
		echo "etatCmd : ".$commande->getetatCmd()."<br>";
	}
	function calculerSalaire($commande){
		echo $commande->getdate_prev() * $commande->getetatCmd();
	}
	function ajoutercommande($commande){
		$sql="insert into employe (idCmd,dateCmd,prixtot,date_prev,etatCmd) values (:idCmd, :dateCmd,:prixtot,:date_prev,:etatCmd)";
		$db = config::getConnexion();
		try{
        $req=$db->prepare($sql);
		
        $idCmd=$commande->getidCmd();
        $dateCmd=$commande->getdateCmd();
        $prixtot=$commande->getprixtot();
        $date_prev=$commande->getdate_prev();
        $etatCmd=$commande->getetatCmd();
        if($etatCmd == "envoye" or $etatCmd =="non envoye" )
        {
        	if(strtotime($date_prev) >= strtotime($dateCmd)) 
{ 

		$req->bindValue(':idCmd',$idCmd);
		$req->bindValue(':dateCmd',$dateCmd);
		$req->bindValue(':prixtot',$prixtot);
		$req->bindValue(':date_prev',$date_prev);
		$req->bindValue(':etatCmd',$etatCmd);
		
            $req->execute();
        }
        }else
        {
        	echo "impossible d'enregistrer";
        }
           
        }
        catch (Exception $e){
            echo 'Erreur: '.$e->getMessage();
        }
		
	}
	
	function affichercommandes(){
		//$sql="SElECT * From commande e inner join formationphp.commande a on e.idCmd= a.idCmd";
		$sql="SElECT * From employe";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }	
	}
	function supprimercommande($idCmd){
		$sql="DELETE FROM employe where idCmd= :idCmd";
		$db = config::getConnexion();
        $req=$db->prepare($sql);
		$req->bindValue(':idCmd',$idCmd);
		try{
            $req->execute();
           // header('Location: index.php');
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}
	function modifiercommande($commande,$idCmd){
		$sql="UPDATE employe SET idCmd=:idCmdn, dateCmd=:dateCmd,prixtot=:prixtot,date_prev=:date_prev,etatCmd=:etatCmd WHERE idCmd=:idCmd";
		
		$db = config::getConnexion();
		//$db->setAttribute(PDO::ATTR_EMULATE_PREPARES,false);
try{		
        $req=$db->prepare($sql);
		$idCmdn=$commande->getidCmd();
        $dateCmd=$commande->getdateCmd();
        $prixtot=$commande->getprixtot();
        $date_prev=$commande->getdate_prev();
        $etatCmd=$commande->getetatCmd();
		$datas = array(':idCmdn'=>$idCmdn, ':idCmd'=>$idCmd, ':dateCmd'=>$dateCmd,':prixtot'=>$prixtot,':date_prev'=>$date_prev,':etatCmd'=>$etatCmd);
		$req->bindValue(':idCmdn',$idCmdn);
		$req->bindValue(':idCmd',$idCmd);
		$req->bindValue(':dateCmd',$dateCmd);
		$req->bindValue(':prixtot',$prixtot);
		$req->bindValue(':date_prev',$date_prev);
		$req->bindValue(':etatCmd',$etatCmd);
		
		
            $s=$req->execute();
			
           // header('Location: index.php');
        }
        catch (Exception $e){
            echo " Erreur ! ".$e->getMessage();
   echo " Les datas : " ;
  print_r($datas);
        }
		
	}
	function recuperercommande($idCmd){
		$sql="SELECT * from employe where idCmd=$idCmd";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}
	
	function rechercherListecommandes($etatCmd){
		$sql="SELECT * from employe where etatCmd=$etatCmd";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}
}


?>