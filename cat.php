<?php
          				include "../../core/ProduitC.php";
                          $Produit1C=new ProduitC();

if (empty($_POST['myCheck']))
{
    $listeProduits=$Produit1C->afficherProduits1();

}
else
{
    $listeProduits=$Produit1C->afficherProduits1();

}
                            ?>