<?php 

include "../config.php";
class ClientC {
function ajouterClient($client){




		$sql="insert into client (cin,username,password,nom,prenom,tel,email,adress,datelimite,code,active,etat,date_desactivation) values (:cin,:username,:password,:nom,:prenom,:tel,:email,:adress,:datelimite,:code,:active,:etat,:date_desactivation)";
		$db = config::getConnexion();
		try{
        $req=$db->prepare($sql);
		$datelimite = date('Y-m-d',strtotime('+1 year'));
        $cin=$client->getCin();
        $username=$client->getUsername();
        $password=$client->getPassword();
        $nom=$client->getNom();
        $prenom=$client->getPrenom();
        $tel=$client->getTel();
        $email=$client->getEmail();
        $adress=$client->getAdress();
		$code=$client->getCode();
		$etat=0;
		$date_desactivation='2019-01-01';
		$active=0;

$message ="clik this link to confim your code http://localhost/client11/views/emailconfirm.php?username=".$username."&code=". $code."";

		if (mail($email,"EMAIL confirmation",$message,"From: BandB.storeB@gmail.com"))
		{
		echo '"Registration Complete! Please confirm your email address"';
		}
	//"zeczeczc;
	else
	{  
		echo "check your mail";
			
        }




		$req->bindValue(':cin',$cin);
		$req->bindValue(':username',$username);
		$req->bindValue(':password',$password);
		$req->bindValue(':nom',$nom);
		$req->bindValue(':prenom',$prenom);
		$req->bindValue(':tel',$tel);
		$req->bindValue(':email',$email);
		$req->bindValue(':adress',$adress);
        $req->bindValue(':code',$code);
        $req->bindValue(':active',$active);
        $req->bindValue(':etat',$etat);
		$req->bindValue(':datelimite',$datelimite);
		$req->bindValue(':date_desactivation',$date_desactivation);
		
            $req->execute();
           
        }
        catch (Exception $e){
            echo 'Erreur: '.$e->getMessage();
        }
		
	}


		function modifierClient($client,$cin){
		$sql="UPDATE client SET  username=:username,password=:password,email=:email,adress=:adress WHERE cin=:cin";
		
		$db = config::getConnexion();
		//$db->setAttribute(PDO::ATTR_EMULATE_PREPARES,false);
try{		
        $req=$db->prepare($sql);
        $username=$client->getUsername();
        $password=$client->getPassword();
        $email=$client->getEmail();
        $adress=$client->getAdress();
		//$datas = array(':cin'=>$cin, ':email'=>$email,':username'=>$username,':password'=>$password,':tel'=>$tel,':adress'=>$adress);
		$req->bindValue(':cin',$cin);
		$req->bindValue(':username',$username);
		$req->bindValue(':password',$password);
		
		$req->bindValue(':email',$email);
		$req->bindValue(':adress',$adress);
		
		
            $s=$req->execute();
			
           // header('Location: index.php');
        }
        catch (Exception $e){
            echo " Erreur ! ".$e->getMessage();
  // echo " Les datas : " ;
  //print_r($datas);
        }
		
	}



	 function existence($username)
    {
		$db = config::getConnexion();
		
       $result = $db->query("SELECT * FROM client WHERE username='".$username."' ");
        $rows = $result->fetch();
        return $rows;
    }


     function check($username,$password)
	{
		$list=[];
		$db = config::getConnexion();
		$req=$db->query("SELECT * from client where username='".$username."'");
		$requete=$req->fetchAll();
		foreach ($requete as $table):
		if(($table['username']==$username) && ($table['password']==$password))
		{
			if(!isset($_SESSION))
			{
				session_start();
			}
			if(!isset($_SESSION['client']))
			{
				$_SESSION['client']=array();
			}
		$list[]=new client($table['cin'],$table['username'],$table['password'],$table['nom'],$table['prenom'],$table['tel'],$table['email'],$table['adress'],$table['etat'],$table['date_desactivation'],$table['active'],$table['code'],$table['datelimite']);

		}
		endforeach;
		return $list;
	}


	     function checkL($username)
	{
		$list=[];
		$db = config::getConnexion();
		$req=$db->query("SELECT * from client where username='".$username."'");
		$requete=$req->fetchAll();
		foreach ($requete as $table):
		if(($table['username']==$username))
		{
			if(!isset($_SESSION))
			{
				session_start();
			}
			if(!isset($_SESSION['client']))
			{
				$_SESSION['client']=array();
			}
		$list[]=new client($table['cin'],$table['username'],$table['password'],$table['nom'],$table['prenom'],$table['tel'],$table['email'],$table['adress'],$table['etat'],$table['date_desactivation'],$table['active'],$table['code'],$table['datelimite']);

		}
		endforeach;
		return $list;
	}

	     public static function updateEtat($username)
    {
      $db = config::getConnexion();
      $r = $db->query("UPDATE client set etat=1 WHERE username='".$username."'");
     
    }

     public static function etat2($u)
    {
      $db = config::getConnexion();
      $r = $db->query("UPDATE client set etat=2 WHERE username='".$u."'");
    }

    public static function dl($username)
    {
   	
        $db = config::getConnexion();
        $dated = date('Y-m-d',strtotime('+1 year'));
        $req= $db->prepare("UPDATE client set datelimite=:datedd WHERE  
          username=:username");
        $req->bindParam(':datedd',$dated); 
        $req->bindParam(':username',$username);
        $req->execute();
    }

        public static function desactiver($username)
      {
        
        $db = config::getConnexion();
        $dated = date('Y-m-d');
        $req= $db->prepare("UPDATE client set etat=0,date_desactivation=:datedd WHERE  
          username=:username");
        $req->bindParam(':datedd',$dated); 
        $req->bindParam(':username',$username);
        $req->execute();

    }





   

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