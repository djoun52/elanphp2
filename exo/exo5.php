<a href=" ./index.php" title="index"> index</a>
<br>

<?php


$txt1 = "Notre formation DL commence aujourd'hui";
$txt2 = "bonjour à tous";


function convert($param){
    $s= $param*0.1524;
    $form = number_format($s, 2, ',', ' ');
    echo "Montant en francs : $param <br> $param francs = $form € <br>";
    return ;
}

convert(100);
convert(1);
convert(50);

?>