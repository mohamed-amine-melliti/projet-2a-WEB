<?PHP
include "../core/client.php";
$clientC=new ClientC();
if (isset($_POST["cin"])){
	$clientC->supprimerClient($_POST["cin"]);
	header('Location: tables-editable client.php');
}

?>