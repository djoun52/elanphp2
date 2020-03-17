<a href=" ./index.php" title="index"> index</a>
<br>

<?php


$perso=[ "Mickaël" => "FRA", "Virgile" => "ESP", "Marie-Claire" => "ENG" ];
function salut($param){
$langue= [ "FRA"=>"bonjour","ENG"=>"hello", "ESP"=>"hola" ];
   foreach ($param as $key => $value) {
       foreach ($langue as $key1 => $value1) {
            if ($value == $key1) {
                echo "$value1 $key <br>";
            }
       }
   }
   return;
}

salut($perso)
?>