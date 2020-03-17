<a href=" ./index.php" title="index"> index</a>
<br>

<?php

function impot($age, $sex){

    echo "Age : $age <br> Sex : $sex <br>" ;
    if (($sex == "F" && $age >=18 && $age <=35) || ($sex == "H" && $age >=20 )){
        echo "La personne est imposable. <br>"; 
    } else {
        echo "La personne est non imposable. <br>";
    }
    return;
}

impot(30, "F");
impot(48, "F");
impot(8, "H");
impot(15, "H");

?>