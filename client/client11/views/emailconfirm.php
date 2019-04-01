<?php
include "../config.php";

$confirm = $_GET['code'];
$db = config::getConnexion();
$sql = "UPDATE client SET code ='null' , active='1' WHERE code='$confirm'";
$result = $db->query($sql) or die(mysqli_error());
if($result)
{
echo '<div>Votre compte est maintenant actif. Vous pouvez maintenant revenir en arrière et avoir votre compte en B&B <a href="login.php">Log in</a></div>';
}
else
{
echo "Some error occur.";
}
?>