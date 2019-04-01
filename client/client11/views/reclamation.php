<?PHP
include "../entities/reclamation.php";
include "../core/reclamation.php";

if (isset($_POST['username'])  and isset($_POST['sujet']) and isset($_POST['message'])and isset($_POST['email']))
{
	     session_start();
if ($_POST['username']==$_SESSION['client']['username']) {

					 $reclamation=new reclamation($_POST['username'],$_POST['email'],$_POST['sujet'],$_POST['message'],"","","");




							$reclamationC=new ReclamationC();
							$reclamationC->ajouterReclamation($reclamation);
		                    header('Location: home-6.php');


	}
	else{		          

	

	  echo "<script type='text/javascript'>
		             alert('veuillez verifier votre username ');
		                      window.location.replace(\"http://localhost/client11/views/home-6.php\")
		                      </script>";}
}

else
{
	
		  echo "<script type='text/javascript'>
		             alert('vérifier les champs ');
		                      window.location.replace(\"http://localhost/client11/views/home-6.php\")
		                      </script>";
}




?>