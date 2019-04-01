<?PHP
include "../entities/client.php";
include "../core/client.php";

if (isset($_POST['cin'])  and isset($_POST['password']) and isset($_POST['nom']) and isset($_POST['prenom']) and isset($_POST['tel']) and isset($_POST['adress']) and isset($_POST['email']))
{
	      $username=$_POST['username'];
	        $clientEC=new ClientC();
	         $cl=$clientEC->existence($username);
	          if (!$cl)
	          {
	          	session_start();
	          	$code=$_SESSION['cap_code'];
				$user=$_POST['cp'];
				if($code==$user)
				{
					//$_SESSION['idUser'] = $idUser; 

					 $client1=new client($_POST['cin'],$_POST['username'],$_POST['password'],$_POST['nom'],$_POST['prenom'],$_POST['tel'],$_POST['email'],$_POST['adress'],"","","","","");




							$client1C=new ClientC();
							$client1C->ajouterClient($client1);
				}


 

				else if($code!=$user)
				{echo " 
							<script type='text/javascript'>
		             		alert('veuillez verifier code ');
		                       window.location.replace(\"http://localhost/client11/views/login.php\"); 
		                      
		                      </script>"

			;}


	         
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
	
}




?>