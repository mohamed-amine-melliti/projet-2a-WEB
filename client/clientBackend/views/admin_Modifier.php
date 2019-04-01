<?PHP
include "../entities/admin.php";
include "../core/admin.php";

if (isset($_POST['password']) and isset($_POST['modifier']))
{
	 //session_destroy();

					 $admin1=new admin("",$_POST['password']);




							$admin1C=new AdminC();
							$admin1C->modifierAdmin($admin1);
							echo "uiininnni";
							header('Location: index.php');
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