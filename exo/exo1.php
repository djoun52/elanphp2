<a href=" ./index.php" title="index"> index</a>
<br>
<?php


$txt1 = "Mon texte en paramètre";


function convertirMajRouge($texte){
   if ($texte == "Mon texte en paramètre"){
        $a =  mb_strtoupper($texte, 'UTF-8');
        $s = "<font color='#FF0000'> $a </font>";
    }
   return $s;
}
echo convertirMajRouge($txt1);


?>