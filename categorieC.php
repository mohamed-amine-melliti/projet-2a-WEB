<?PHP
include "../../config.php";
class categorieC {
function affichercat ($compte){
		echo "cat: ".$compte->getcat()."<br>";
		echo "id: ".$compte->getid()."<br>";
		
	}

	function ajoutercat($cat){
		$sql="insert into categorie (id,cat) values (:id,:cat)";
		$db = config::getConnexion();
		try{
        $req=$db->prepare($sql);
		
        $id=$cat->getid();
		$cat=$cat->getcat();


		$req->bindValue(':id',$id);
		$req->bindValue(':cat',$cat);

		
            $req->execute();
           
        }
        catch (Exception $e){
            echo 'Erreur: '.$e->getMessage();
        }
		
	}
	
	function affichercats(){
		//$sql="SElECT * From compte e inner join formationphp.compte a on e.num= a.num";
		$sql="SElECT * From categorie";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }	
	}
	function supprimercat($id){
		$sql="DELETE FROM categorie where id= :id";
		$db = config::getConnexion();
        $req=$db->prepare($sql);
		$req->bindValue(':id',$id);
		try{
            $req->execute();
           // header('Location: index.php');
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}
	function modifiercat($cat,$id){
		$sql="UPDATE categorie SET id=:idn,cat=:cat WHERE id=:id";
		
		$db = config::getConnexion();
		//$db->setAttribute(PDO::ATTR_EMULATE_PREPARES,false);
try{		
        $req=$db->prepare($sql);
	
        $id=$compte->getid();
        $solde=$compte->getcat();
       
		$datas = array(':idn'=>$idn, ':id'=>$id,':cat'=>$cat);
		$req->bindValue(':idn',$idn);
		$req->bindValue(':id',$id);
		$req->bindValue(':cat',$cat);
		
		
            $s=$req->execute();
			
           // header('Location: index.php');
        }
        catch (Exception $e){
            echo " Erreur ! ".$e->getMessage();
   echo " Les datas : " ;
  print_r($datas);
        }
		
	}
	function recuperercat($num){
		$sql="SELECT * from categorie where id=$id";
		$db = config::getConnexion();
		try{
		$lidte=$db->query($sql);
		return $lidte;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}
}
?>