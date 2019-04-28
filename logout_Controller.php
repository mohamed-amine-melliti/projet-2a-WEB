 
<?php 

include "../../entities/client.php";
include "../../core/client.php";
session_start();

                $username=$_SESSION['client']['username'];
                $clientkC=new ClientC();
                $clientk =$clientkC->checkL($username);
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
                {        $_SESSION['client']['id_client']=$id_client;
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
                   // session_start();
                   $_username = $_SESSION['client']['username'];
            ClientC::desactiver($_username);
            //$dated=date_create($_SESSION['client']['date_desactivation']);
           // echo $dated->format('Y-m-d H:i:s');
            //$dl=date_add($dated,date_interval_create_from_date_string("10 day"));
          // $dated = date('Y-m-d',strtotime('+10 day'));




            //$dl = $dl->format('Y-m-d');
            ClientC::dl($_username);
            session_destroy();
            header('Location: home-6.php');
            //echo $dated->format('Y-m-d H:i:s');

      }
            
 
      
 ?>