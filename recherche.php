<?PHP
include "../../core/commandeC.php";
include "../../entities/commande.php";
$db = config::getConnexion();
 if(isset($_POST["submit"])){
  if(!empty($_POST["srch"])){
//declaration variable
  $recherche=$_POST['srch'];
//Querry DB
  $sql="SELECT * FROM employe WHERE etatCmd='$recherche' ";
//run query
  $result = $db->query($sql); 
//loop through results

  if($result)
  {
    echo '<ul>';
    while ($data = $result->fetch()) {
	

           
echo '<li>' . $data['idCmd'] . ' /' . $data['dateCmd'] . '/'.$data['prixtot'] . '/' .$data['date_prev'] . '/' .$data['etatCmd'] .'</li>';
     

       
      

                    
	
}
echo '</ul>';

}


}
}

	
	
?>
	
	


	




	


      
       
		
	




