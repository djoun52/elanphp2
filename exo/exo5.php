<a href=" ./index.php" title="index"> index</a>
<br>

<?php


function convert($param){
    $s= $param*0.1524;
    $form = number_format($s, 2, ',', ' ');
    echo "Montant en francs : $param <br> $param francs = $form € <br>";
    return ;
}



?>