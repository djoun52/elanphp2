<a href=" ./index.php" title="index"> index</a>
<br>

<?php


$txt1 = "engage le jeu que je le gagne";


function text_pallin($param){
    $a= strtr($param,"ÀÁÂÃÄÅàáâãäåÒÓÔÕÖØòóôõöøÈÉÊËèéêëÇçÌÍÎÏìíîïÙÚÛÜùúûüÿÑñ"
    ,"aaaaaaaaaaaaooooooooooooeeeeeeeecciiiiiiiiuuuuuuuuynn");
    $special = array(" ", "!", ":", "?", ".", "/", "$", "&", "%", "'", ",");
    $a = strtolower(str_replace($special,"",$a));
  
    $inverse = strrev($a);
    if($a == $inverse){
        echo 'La phrase "' . $param . ' " est un palindrome';
    }else {
        echo "La phrase :  $param  n'est pas un palindrome";
}
    return;
}

text_pallin($txt1)
?>