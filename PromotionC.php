<?PHP
include "../../config.php";
class PromotionC {
function afficherPromotion ($Promotion){
		echo "idpromo: ".$Promotion->getidpromo()."<br>";
		echo "nompromo: ".$Promotion->getnompromo()."<br>";
		echo "Prénompromo: ".$Promotion->getdatedebut()."<br>";
		echo "date fin: ".$Promotion->getdatefin()."<br>";
		echo "pourcentage: ".$Promotion->getpourcentage()."<br>";
		echo "image: ".$Promotion->getimage()."<br>";

	}

	function ajouterPromotion($Promotion){
		$sql="insert into Promotion (idpromo,nompromo,datedebut,pourcentage,datefin,image) values (:idpromo, :nompromo,:datedebut,:pourcentage,:datefin,:image)";
		$db = config::getConnexion();
		try{
        $req=$db->prepare($sql);
		
        $idpromo=$Promotion->getidpromo();
        $nompromo=$Promotion->getnompromo();
        $datedebut=$Promotion->getdatedebut();
        $pourcentage=$Promotion->getpourcentage();
		$datefin=$Promotion->getdatefin();
		$image=$Promotion->getimage();
		$req->bindValue(':idpromo',$idpromo);
		$req->bindValue(':nompromo',$nompromo);
		$req->bindValue(':datedebut',$datedebut);
		$req->bindValue(':pourcentage',$pourcentage);
		$req->bindValue(':datefin',$datefin);
		$req->bindValue(':image',$image);

            $req->execute();
           
        }
        catch (Exception $e){
            echo 'Erreur: '.$e->getMessage();
        }
		
	}
	
	function afficherPromotions(){
		//$sql="SElECT * From Promotion e inner join formationphp.Promotion a on e.idpromo= a.idpromo";
		$sql="SElECT * From Promotion";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }	
	}
	function supprimerPromotion($idpromo){
		$sql="DELETE FROM Promotion where idpromo= :idpromo";
		$db = config::getConnexion();
        $req=$db->prepare($sql);
		$req->bindValue(':idpromo',$idpromo);
		try{
            $req->execute();
           // header('Location: index.php');
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}
	function modifierPromotion($Promotion,$idpromo){
		$sql="UPDATE Promotion SET idpromo=:idpromon, nompromo=:nompromo,datedebut=:datedebut,pourcentage=:pourcentage,datefin=:datefin,image=:image WHERE idpromo=:idpromo";
		
		$db = config::getConnexion();
		//$db->setAttribute(PDO::ATTR_EMULATE_PREPARES,false);
try{		
        $req=$db->prepare($sql);
		$idpromon=$Promotion->getidpromo();
        $nompromo=$Promotion->getnompromo();
        $datedebut=$Promotion->getdatedebut();
        $pourcentage=$Promotion->getpourcentage();
		$datefin=$Promotion->getdatefin();
		$image=$Promotion->getimage();
		$datas = array(':idpromon'=>$idpromon, ':idpromo'=>$idpromo, ':nompromo'=>$nompromo,':datedebut'=>$datedebut,':pourcentage'=>$pourcentage,':datefin'=>$datefin ,':image'=>$image);
		$req->bindValue(':idpromon',$idpromon);
		$req->bindValue(':idpromo',$idpromo);
		$req->bindValue(':nompromo',$nompromo);
		$req->bindValue(':datedebut',$datedebut);
		$req->bindValue(':pourcentage',$pourcentage);
		$req->bindValue(':datefin',$datefin);
		$req->bindValue(':image',$image);
		
            $s=$req->execute();
			
           // header('Location: index.php');
        }
        catch (Exception $e){
            echo " Erreur ! ".$e->getMessage();
   echo " Les datas : " ;
  print_r($datas);
        }
		
	}
	function recupererPromotion($idpromo){
		$sql="SELECT * from Promotion where idpromo=$idpromo";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}
	
	function rechercherListePromotions($tarif){
		$sql="SELECT * from Promotion where datefin=$tarif";
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