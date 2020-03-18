<a href=" ./index.php" title="index"> index</a>
<br>

<?php


$tableauValeurs=array(true,"texte",10,25.369,array("valeur1","valeur2")); 

function salut($param){
    

   foreach ($param as $value) {
     var_dump($value);     
       }
   
   return;
}

salut($tableauValeurs);
?>