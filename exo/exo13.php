<a href=" ./index.php" title="index"> index</a>
<br>

<?php
$arr= [ 10, 12, 8, 19, 3 ,16, 11, 13, 9];

function moy_note($param){
    $a=0;
    $i=0;
    foreach ($param as $key => $value) {
        $a = $a+$value;
        $i++;
    }
    $s= $a/$i;
    $form = number_format($s, 2, ',', ' ');
    echo "Les notes obtenues par l’élève sont : " ;
    foreach ($param as $key => $value) {
        echo "$value ";
        ;
    }  
    echo "<br> Sa moyenne générale est donc de : $form";
    return ;
}

moy_note($arr)
?>