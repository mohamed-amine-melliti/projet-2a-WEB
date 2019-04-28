<?PHP
include "../../config.php";
class offreC {
function afficheroffre ($offre){
		echo "codepromo: ".$offre->getcodepromo()."<br>";
		echo "descripition: ".$offre->getdescripition()."<br>";
		echo "Prédescripition: ".$offre->getdatedebut()."<br>";
		echo "date fin: ".$offre->getdatefin()."<br>";
		echo "pourcentage: ".$offre->getpourcentage()."<br>";


	}

	function ajouteroffre($offre){
		$sql="insert into offres (codepromo,descripition,datedebut,pourcentage,datefin) values ('0', :descripition,:datedebut,:pourcentage,:datefin)";
		$db = config::getConnexion();
		try{
        $req=$db->prepare($sql);
		
       
        $descripition=$offre->getdescripition();
        $datedebut=$offre->getdatedebut();
        $pourcentage=$offre->getpourcentage();
		$datefin=$offre->getdatefin();

		$req->bindValue(':descripition',$descripition);
		$req->bindValue(':datedebut',$datedebut);
		$req->bindValue(':pourcentage',$pourcentage);
		$req->bindValue(':datefin',$datefin);


            $req->execute();
           
        }
        catch (Exception $e){
            echo 'Erreur: '.$e->getMessage();
        }
		
	}
	
	function afficheroffres(){
		//$sql="SElECT * From offre e inner join formationphp.offre a on e.codepromo= a.codepromo";
		$sql="SElECT * From offres";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }	
	}
	function supprimeroffre($codepromo){
		$sql="DELETE FROM offres where codepromo= :codepromo";
		$db = config::getConnexion();
        $req=$db->prepare($sql);
		$req->bindValue(':codepromo',$codepromo);
		try{
            $req->execute();
           // header('Location: index.php');
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}
	function modifieroffre($offre,$codepromo){
		$sql="UPDATE offres SET codepromo=:codepromon, descripition=:descripition,datedebut=:datedebut,pourcentage=:pourcentage,datefin=:datefin WHERE codepromo=:codepromo";
		
		$db = config::getConnexion();
		//$db->setAttribute(PDO::ATTR_EMULATE_PREPARES,false);
try{		
        $req=$db->prepare($sql);
		$codepromon=$offre->getcodepromo();
        $descripition=$offre->getdescripition();
        $datedebut=$offre->getdatedebut();
        $pourcentage=$offre->getpourcentage();
		$datefin=$offre->getdatefin();
		$datas = array(':codepromon'=>$codepromon, ':codepromo'=>$codepromo, ':descripition'=>$descripition,':datedebut'=>$datedebut,':pourcentage'=>$pourcentage,':datefin'=>$datefin );
		$req->bindValue(':codepromon',$codepromon);
		$req->bindValue(':codepromo',$codepromo);
		$req->bindValue(':descripition',$descripition);
		$req->bindValue(':datedebut',$datedebut);
		$req->bindValue(':pourcentage',$pourcentage);
		$req->bindValue(':datefin',$datefin);
		
            $s=$req->execute();
			
           // header('Location: index.php');
        }
        catch (Exception $e){
            echo " Erreur ! ".$e->getMessage();
   echo " Les datas : " ;
  print_r($datas);
        }
		
	}
	function recupereroffre($codepromo){
		$sql="SELECT * from offres where codepromo=$codepromo";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}
	
	function rechercherListeoffres($tarif){
		$sql="SELECT * from offres where datefin=$tarif";
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