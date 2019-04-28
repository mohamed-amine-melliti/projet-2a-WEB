<?PHP
include "categorieC.php";
class ProduitC {
function afficherProduit ($Produit){
		echo "idproduit: ".$Produit->getidproduit()."<br>";
		echo "nomproduit: ".$Produit->getnomproduit()."<br>";
		echo "Description: ".$Produit->getdescription()."<br>";
		echo "Prix: ".$Produit->getprix()."<br>";
		echo "nb heures: ".$Produit->getprix()."<br>";
		echo "categorie: ".$Produit->getcategorie()."<br>";
		echo "image: ".$Produit->getimage()."<br>";

	}

	function ajouterProduit($Produit){
		$sql="insert into Produit (idproduit,nomproduit,description,prix,qt,categorie,image) values (:idproduit, :nomproduit,:description,:prix,:qt,:categorie,:image)";
		$db = config::getConnexion();
		try{
        $req=$db->prepare($sql);
		
        $idproduit=$Produit->getidproduit();
        $nomproduit=$Produit->getnomproduit();
        $description=$Produit->getdescription();
        $nb=$Produit->getprix();
		$qt=$Produit->getqt();
		$categorie=$Produit->getcategorie();
		$image=$Produit->getimage();

	
		$req->bindValue(':idproduit',$idproduit);
		$req->bindValue(':nomproduit',$nomproduit);
		$req->bindValue(':description',$description);
		$req->bindValue(':prix',$nb);
		$req->bindValue(':qt',$qt);
		$req->bindValue(':categorie',$categorie);
		$req->bindValue(':image',$image);
		
  
	
	


            $req->execute();
	
        }
        catch (Exception $e){
            echo 'Erreur: '.$e->getMessage();
        }
		
	}

	function afficherProduits(){
		//$sql="SElECT * From Produit e inner join formationphp.Produit a on e.idproduit= a.idproduit";
		$sql="SElECT * From Produit";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }	
	}
	



	function afficherProduits1($a,$b,$min,$max){
		//$sql="SElECT * From Produit e inner join formationphp.Produit a on e.idproduit= a.idproduit";
		
		$sql="SElECT * From Produit where categorie ='$a' and prix>$min and prix<$max order by prix  $b";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }	

		
	
		
		
		

	}

	function supprimerProduit($idproduit){
		$sql="DELETE FROM Produit where idproduit=:idproduit";
		$db = config::getConnexion();
        $req=$db->prepare($sql);
		$req->bindValue(':idproduit',$idproduit);
		try{
            $req->execute();
           // header('Location: index.php');
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}
	function modifierProduit($Produit,$idproduit){
		$sql="UPDATE Produit SET idproduit=:idproduitn, nomproduit=:nomproduit,description=:description,prix=:prix,qt=:qt,categorie=:categorie,image=:image WHERE idproduit=:idproduit";
		
		$db = config::getConnexion();
		//$db->setAttribute(PDO::ATTR_EMULATE_PREPARES,false);
try{		
        $req=$db->prepare($sql);
		$idproduitn=$Produit->getidproduit();
        $nomproduit=$Produit->getnomproduit();
        $description=$Produit->getdescription();
        $prix=$Produit->getprix();
		$qt=$Produit->getqt();
		$image=$Produit->getimage();
		$categorie=$Produit->getcategorie();
		$datas = array(':idproduitn'=>$idproduitn, ':idproduit'=>$idproduit, ':nomproduit'=>$nomproduit,':description'=>$description,':prix'=>$prix,':qt'=>$qt,':categorie'=>$categorie,':image'=>$image);
		$req->bindValue(':idproduitn',$idproduitn);
		$req->bindValue(':idproduit',$idproduit);
		$req->bindValue(':nomproduit',$nomproduit);
		$req->bindValue(':description',$description);
		$req->bindValue(':prix',$prix);
		$req->bindValue(':qt',$qt);
		$req->bindValue(':categorie',$categorie);

		$req->bindValue(':image',$image);

		
            $s=$req->execute();
			
           // header('Location: index.php');
        }
        catch (Exception $e){
            echo " Erreur ! ".$e->getMessage();

        }
		
	}
	function recupererProduit($idproduit){
		$sql="SELECT * from Produit where idproduit=$idproduit";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}
	
	function rechercherListeProduits($tarif){
		$sql="SELECT * from Produit where qtoraire=$tarif";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}
		function status(){
		//$sql="SElECT * From Produit e inner join formationphp.Produit a on e.idproduit= a.idproduit";
		$sql="SELECT categorie , COUNT(idproduit) as st FROM Produit group by categorie";
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