<?PHP
include "../entities/reclamation.php";
include "../core/reclamation.php";





if (isset($_POST['reponse']))
{

				//$id_reclamation=$_SESSION['reclamation']['id_reclamation'];
							$id_reclamation=$_POST['id_reclamation'];
							$reclamation=new reclamation("","","","","","","",$_POST['reponse']);
							$reclamation1C=new ReclamationC();
							$reclamation1C->modifierReclamation($reclamation,$id_reclamation);
							//header('Location: forms-validation client.php');
							//session_destroy();
							
				 //session_start();
							/*
                $username=$_SESSION['client']['username'];
                $clientkC=new ClientC();
                $clientk =$clientkC->checkL($username);
                foreach ($clientk as $client):
                $username=$client->getUsername();
                endforeach;
                if (!$clientk)
                {          

                		$_SESSION['client']['username']=$username; 
                		   $a=$_SESSION['client']['username'];
                         echo "$a";

							//session_start();
							//header('Location: home-6.php');
				


	        	}
	        	*/


	
}

else
{
	echo "vérifier les champs";
}




?>