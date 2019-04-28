<?php

include "../../entities/client.php";
include "../../core/client.php"; 


                $username=$_POST['username'];
				$password=$_POST['password'];
				$clientkC=new ClientC();
				$clientk =$clientkC->check($username,$password);
				foreach ($clientk as $client):
		        $id_client=$client->getid_client();
		        $username=$client->getUsername();
		        $password=$client->getPassword();
		        $nom=$client->getNom();
		        $prenom=$client->getPrenom();
		        $tel=$client->getTel();
		        $email=$client->getEmail();
		        $adress=$client->getAdress();
				$code=$client->getCode();
				$active=$client->getActive();
				$datelimite=$client->datelimite;
				$date_desactivation=$client->date_desactivation;
				$etat=$client->etat;
				endforeach;
				if ($clientk)
	        	{          
		         switch ($etat)
		            {
		              case 1 :
		              if ($active) {
		              	 $_SESSION['client']['id_client']=$id_client;
		                 $_SESSION['client']['username']=$username;    
		                 $_SESSION['client']['email']=$email;
		                 $_SESSION['client']['nom']=$nom;
		                 $_SESSION['client']['active']=$active;
		                 $_SESSION['client']['prenom']=$prenom;
		                 $_SESSION['client']['adress']=$adress;
		                 $_SESSION['client']['tel']=$tel;
		                 $_SESSION['client']['code'] = $code;
		                 $_SESSION['client']['datelimite'] = $datelimite;
		                  $_SESSION['client']['date_desactivation'] = $date_desactivation;
		                 header('Location: home-6.php');
		                   }
		                   else
		                   {
		                   
		                       echo "<script type='text/javascript'>
		                alert('Registration Complete! Please confirm your email address');
		                 window.location.replace(\"home-6.php\"); 
		                      </script>";
		                      
		                   }


		                break;
		                case 0:
		                  if(date('Y-m-d')<$client->datelimite)
		                    {
		                       if ($active) {
		                  $_SESSION['client']['id_client']=$id_client;
		                 $_SESSION['client']['username']=$username;    
		                 $_SESSION['client']['email']=$email;
		                 $_SESSION['client']['nom']=$nom;
		                 $_SESSION['client']['active']=$active;
		                 $_SESSION['client']['prenom']=$prenom;
		                 $_SESSION['client']['adress']=$adress;
		                 $_SESSION['client']['tel']=$tel;
		                 $_SESSION['client']['code'] = $code;
		                 $_SESSION['client']['datelimite'] = $datelimite;
				         $_SESSION['client']['date_desactivation'] =$date_desactivation;
		                      ClientC::updateEtat($_SESSION['client']['username']);
		                       echo "<script type='text/javascript'>
		                 window.location.replace(\"home-6.php\"); 
		                      </script>";
		                      //header('Location: home-6.php');
		                       }
		                       else {
		                    echo "<script type='text/javascript'>
		                alert('Registration Complete! Please confirm your email address');
		                 window.location.replace(\"home-6.php\"); 
		                      </script>";
		                       }

		                    }
		                    else 
		                    {

		                   ClientC::etat2($username);
		              echo "<script type='text/javascript'>
		              alert('vous avez depassé la date limite , veuillez s inscrire de nouveau ');
		              window.location.replace(\"home-6.php\");
		              </script>";


		            


		                    
		                    }
		                    break;
		                case 2:
		                       echo "<script type='text/javascript'>
		                alert('ce compte a été supprimé,inscrivez vous de nouveau ');
		                window.location.replace(\"home-6.php\"); 
		                      </script>";
		                      
		            }

	     		 }
		         	else
		          	{
		            echo "<script type='text/javascript'>
		             alert('veuillez verifier votre mdp et username ');
		                       window.location.replace(\"../views/login.php\"); 
		                      
		                      </script>"; 
		           
		         	}














 ?>