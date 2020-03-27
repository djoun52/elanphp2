
<a href=" ./index.php" title="index"> index</a>
<br>

<?php

$url= "http://my.mobirise.com/data/userpic/764.jpg" ;


function repeterImage($param1, $param2)
{
       $s= str_repeat ("<img src='$param1'> ", $param2);
        return $s;
}
echo repeterImage($url,4);
?>