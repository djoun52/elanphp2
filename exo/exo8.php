
<a href=" ./index.php" title="index"> index</a>
<br>

<?php

$url= "http://my.mobirise.com/data/userpic/764.jpg" ;


function repeterImage($param1, $param2)
{
    for ($i=0; $i < $param2 ; $i++) { 
        echo "<img src='http://my.mobirise.com/data/userpic/764.jpg'> ";
    }
return ;
}
repeterImage($url,4);
?>