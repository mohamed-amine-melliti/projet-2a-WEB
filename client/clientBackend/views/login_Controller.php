<?php

include "../entities/admin.php";
include "../core/admin.php"; 


                $username=$_POST['username'];
				$password=$_POST['password'];
				$adminkC=new AdminC();
				$admink =$adminkC->check($username,$password);
				foreach ($admink as $admin):
		        $username=$admin->getUsername();
		        $password=$admin->getPassword();
				endforeach;
				if ($admink)
	        	{          
		                 $_SESSION['admin']['username']=$username;    
		                 header('Location: index.php');

	     		 }
		         	else
		          	{
		            echo "<script type='text/javascript'>
		             alert('veuillez verifier votre mdp et username ');
		                       
		                      </script>"; 
		           
		         	}














 ?>