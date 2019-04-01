<?php 
include "../config_admin.php";
class AdminC {

	  function check($username,$password)
	{
		$list=[];
		$db = config::getConnexion();
		$req=$db->query("SELECT * from admin where username='".$username."'");
		$requete=$req->fetchAll();
		foreach ($requete as $table):
		if(($table['username']==$username) && ($table['password']==$password))
		{
			if(!isset($_SESSION))
			{
				session_start();
			}
			if(!isset($_SESSION['admin']))
			{
				$_SESSION['admin']=array();
			}
		$list[]=new admin($table['username'],$table['password']);

		}
		endforeach;
		return $list;
	}
		function modifierAdmin($admin){
		$sql="UPDATE admin SET password=:password WHERE id_admin=1";
		
		$db = config::getConnexion();
try{		
        $req=$db->prepare($sql);
        $password=$admin->getPassword();
		$req->bindValue(':password',$password);	
		
            $s=$req->execute();
			
           // header('Location: index.php');
        }
        catch (Exception $e){
            echo " Erreur ! ".$e->getMessage();
        }
		
	}


	public static function nombreclient(){
		$db = config::getConnexion();
		
      $result = $db->query("SELECT COUNT(*) as clientA FROM client where etat=1");
       $donnees = $result->fetch();
        return $donnees;
    }
    	public static function nombreclientO(){
		$db = config::getConnexion();
		
      $result = $db->query("SELECT COUNT(*) as clientO FROM client where etat=0");
       $donnees = $result->fetch();
        return $donnees;
    }

	public static function nombreclientD(){
		$db = config::getConnexion();
		
      $result = $db->query("SELECT COUNT(*) as clientD FROM client where etat=2");
       $donnees = $result->fetch();
        return $donnees;
    }


	public static function deconnecter()
    {  
            session_unset();
            session_destroy();
    }















}
?>