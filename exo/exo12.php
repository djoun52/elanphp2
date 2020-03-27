<a href=" ./index.php" title="index"> index</a>
<br>

<?php


$tableauValeurs=array(true,"texte",10,25.369,array("valeur1","valeur2")); 

function salut($param){
    
  $s="";
   foreach ($param as $value) {
    $s.=var_dump($value);     
       }
return  $s;
}

echo salut($tableauValeurs);
?>