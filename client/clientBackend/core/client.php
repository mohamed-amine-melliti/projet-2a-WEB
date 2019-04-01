<?php 

include "../config.php";
class ClientC {

function ajouterClient($client){
		$sql="insert into client (cin,username,password,nom,prenom,tel,email,adress) values (:cin,:username,:password,:nom,:prenom,:tel,:email,:adress)";
		$db = config::getConnexion();
		try{
        $req=$db->prepare($sql);
		
        $cin=$client->getCin();
        $username=$client->getUsername();
        $password=$client->getPassword();
        $nom=$client->getNom();
        $prenom=$client->getPrenom();
        $tel=$client->getTel();
        $email=$client->getEmail();
        $adress=$client->getAdress();
        //$date_l= date('Y-m-d',strtotime('+5 year'));
        //$date_limite=$client->setDate_limite($date_l);
		$req->bindValue(':cin',$cin);
		$req->bindValue(':username',$username);
		$req->bindValue(':password',$password);
		$req->bindValue(':nom',$nom);
		$req->bindValue(':prenom',$prenom);
		$req->bindValue(':tel',$tel);
		$req->bindValue(':email',$email);
		$req->bindValue(':adress',$adress);
		//$req->bindValue(':date_limite',$date_limite);
		
            $req->execute();
           
        }
        catch (Exception $e){
            echo 'Erreur: '.$e->getMessage();
        }
		
	}


	function afficherClient(){
		//$sql="SElECT * From employe e inner join formationphp.employe a on e.cin= a.cin";
		$sql="SElECT * From client";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }	
	}

		function supprimerClient($cin){
		$sql="DELETE FROM client where cin= :cin";
		$db = config::getConnexion();
        $req=$db->prepare($sql);
		$req->bindValue(':cin',$cin);
		try{
            $req->execute();
           // header('Location: index.php');
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}
	public static function notificationsReclamation(){
		$db = config::getConnexion();
		
       $result = $db->query("SELECT COUNT(*) as NbNews FROM reclamation where vu=0");
       $donnees = $result->fetch();
        return $donnees;
    }
       public static function updateEtatN()
    {
      $db = config::getConnexion();
      $r = $db->query("UPDATE reclamation set vu=1 ");
     
    }


/**
 * 
 */


/*
	function modifierEmploye($employe,$cin){
		$sql="UPDATE employe SET cin=:cinn, nom=:nom,prenom=:prenom,nbHeures=:nbH,tarifHoraire=:tarifH WHERE cin=:cin";
		
		$db = config::getConnexion();
		//$db->setAttribute(PDO::ATTR_EMULATE_PREPARES,false);
try{		
        $req=$db->prepare($sql);
		$cinn=$employe->getCin();
        $nom=$employe->getNom();
        $prenom=$employe->getPrenom();
        $nb=$employe->getNbHeures();
        $tarif=$employe->getTarifHoraire();
		$datas = array(':cinn'=>$cinn, ':cin'=>$cin, ':nom'=>$nom,':prenom'=>$prenom,':nbH'=>$nb,':tarifH'=>$tarif);
		$req->bindValue(':cinn',$cinn);
		$req->bindValue(':cin',$cin);
		$req->bindValue(':nom',$nom);
		$req->bindValue(':prenom',$prenom);
		$req->bindValue(':nbH',$nb);
		$req->bindValue(':tarifH',$tarif);
		
		
            $s=$req->execute();
			
           // header('Location: index.php');
        }
        catch (Exception $e){
            echo " Erreur ! ".$e->getMessage();
   echo " Les datas : " ;
  print_r($datas);
        }
		
	}



	function afficherEmploye ($employe){
		echo "Cin: ".$employe->getCin()."<br>";
		echo "Nom: ".$employe->getNom()."<br>";
		echo "Prénom: ".$employe->getPrenom()."<br>";
		echo "tarif heure: ".$employe->getTarifHoraire()."<br>";
		echo "nb heures: ".$employe->getNbHeures()."<br>";
	}
	function calculerSalaire($employe){
		echo $employe->getNbHeures() * $employe->getTarifHoraire();
	}
*/
}
 ?>