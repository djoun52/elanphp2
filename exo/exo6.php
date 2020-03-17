<a href=" ./index.php" title="index"> index</a>
<br>

<?php

function facture($prix,$quant,$tva){
    $prixt= $prix*$quant;
    $tax = $prixt + ($prixt*$tva) ;
    echo  "Prix unitaire de l’article : " . $prix  ."€ <br> Quantité : " . $quant . "<br> Taux de TVA : " . $tva . "<br> Le montant de la facture à régler est de : " . $tax . "€ <br>"; 
    return;
}

facture(10,5,0.2);
facture(100,4,0.2);
facture(9.99,5,0.2);


?>