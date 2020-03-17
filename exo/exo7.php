<a href=" ./index.php" title="index"> index</a>
<br>

<?php

function cat_age($param){
    if ($param >= 12){
        echo "L’enfant qui a " . $param. " ans appartient à la catégorie « cadet »"; 
    }elseif ($param <= 11){
        echo "L’enfant qui a " . $param. " ans appartient à la catégorie « Minime »"; 
    }elseif ($param <=9) {
        echo "L’enfant qui a " . $param. " ans appartient à la catégorie « Pupille »"; 
    }elseif ($param >= 6 && $param<=7) {
        echo "L’enfant qui a " . $param. " ans appartient à la catégorie « poussin »"; 
    }else {
        echo "l'enfent est trop jeune pour rentrer dans une catégorie.";
    }
    echo "<br>";
    return;
}

cat_age(10);
cat_age(20);
cat_age(5);
cat_age(6);
cat_age(9);


?>