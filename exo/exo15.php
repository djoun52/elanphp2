<a href=" ./index.php" title="index"> index</a>
<br>
<?php
$email1= "elan@elan-formation.fr";
$email2 ="contact@elan";

function verifEmail($param){
    if (filter_var($param, FILTER_VALIDATE_EMAIL)){
        echo "L’adresse $param est une adresse e-mail valide <br> ";
    }else {
        echo "L’adresse $param est une adresse e-mail invalide <br>";
    }
    return;
}
verifEmail($email1);
verifEmail($email2);

    ?>