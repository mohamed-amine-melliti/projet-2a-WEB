<?php
include "../config1.php";

class ReclamationC
{
	

	function ajouterReclamation($reclamation){

$sql="insert into reclamation (username,email,sujet,message,etat,vu,reponse) values (:username,:email,:sujet,:message,etat,vu,reponse)";
		$db = config::getConnexion();
		try{
        $req=$db->prepare($sql);

        $username=$reclamation->username;
        $sujet=$reclamation->getSujet();
        $message=$reclamation->getMessage();
        $email=$reclamation->email;
		

		$req->bindValue(':username',$username);
		$req->bindValue(':sujet',$sujet);
		$req->bindValue(':message',$message);
		$req->bindValue(':email',$email);
		

            $req->execute();    
        }
        catch (Exception $e){
            echo 'Erreur: '.$e->getMessage();
        }
		
	}

function afficherReclamation($username){
		//$sql="SElECT * From employe e inner join formationphp.employe a on e.cin= a.cin";
		$sql="SElECT * From reclamation where username='".$username."' AND (etat=1 or vu=0 or vu=1) ";
		$db = config1::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }	
	}
function modifierusername($reclamation,$username){
		$sql="UPDATE reclamation SET username=:usernamee WHERE username=:username";
	
		$db = config1::getConnexion();
		//$db->setAttribute(PDO::ATTR_EMULATE_PREPARES,false);
try{		
        $req=$db->prepare($sql);
		$usernamee=$reclamation->username;
		$datas = array(':usernamee'=>$usernamee, ':username'=>$username);
		$req->bindValue(':usernamee',$usernamee);
		$req->bindValue(':username',$username);
		
		
            $s=$req->execute();
			
           // header('Location: index.php');
        }
        catch (Exception $e){
            echo " Erreur ! ".$e->getMessage();
   echo " Les datas : " ;
  print_r($datas);
        }
		
	}
		function recupererReclamation1($username){
		$sql="SELECT * from reclamation where username=$username";
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



