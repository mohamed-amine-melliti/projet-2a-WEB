<?PHP
include "../entities/client.php";
include "../core/client.php";
include "../core/reclamation.php";
include "../entities/reclamation.php";

if (isset($_POST['cin'])  and isset($_POST['password'])and isset($_POST['username'])  and isset($_POST['adress']) and isset($_POST['email']) and isset($_POST['modifier']))
{
	 //session_destroy();

	      $username1=$_POST['username'];
	        $clientEC=new ClientC();
	         $cl=$clientEC->existence($username1);
	          if (!$cl)
	          {

	          	session_start();
	          	$h=$_SESSION['client']['username'];
                   $reclamation1C=new ReclamationC();
$reclamation=new reclamation($_POST['username'],"","","","","","");
                            $reclamation1C=new ReclamationC();
                            $reclamation1C->modifierusername($reclamation,$h);
				$_SESSION['client']['username']=$username1;
				        //$_SESSION['client']['username']=$username; 
                		   $a=$_SESSION['client']['username'];
                         //echo "$a";
					//$_SESSION['idUser'] = $idUser; 

					 $client1=new client("",$_POST['username'],$_POST['password'],"","","",$_POST['email'],$_POST['adress'],"","","","","");




							$client1C=new ClientC();
							$client1C->modifierClient($client1,$_POST['cin']);
							header('Location: home-6.php');
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



/****************************************************************/










	          }
	          else
	          {
	            echo "<script type='text/javascript'>
		                alert('username existe deja , essayer avec un autre username');
		                 window.location.replace(\"http://localhost/client11/views/home-6.php\"); 
		                      </script>";    
	          }


	
}

else
{
		            echo "<script type='text/javascript'>
		                alert('vérifier les champs');
		                 window.location.replace(\"http://localhost/client11/views/home-6.php\"); 
		                      </script>";
	




?>