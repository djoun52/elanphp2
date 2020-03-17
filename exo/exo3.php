<a href=" ./index.php" title="index"> index</a>
<br>
<?php


$txt1 = "Notre formation DL commence aujourd'hui";



function text_remplece($param){
    $x=str_replace("aujourd'hui","demain" ,$param);
    echo  $param . "<br>" . $x;
    return;
}

text_remplece($txt1);

?>