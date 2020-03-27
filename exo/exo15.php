<a href=" ./index.php" title="index"> index</a>
<br>
<?php
$email1= "elan@elan-formation.fr";
$email2 ="contact@elan";

function verifEmail($param){
    if (filter_var($param, FILTER_VALIDATE_EMAIL)){
        $s= "L’adresse $param est une adresse e-mail valide <br> ";
    }else {
        $s= "L’adresse $param est une adresse e-mail invalide <br>";
    }
    return $s;
}

echo verifEmail($email1);
echo verifEmail($email2);

    ?>