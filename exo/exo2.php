<a href=" ./index.php" title="index"> index</a>
<br>
<?php

$capitales = array ("France"=>"Paris","Allemagne"=>"Berlin","USA"=>"Washington","Italie"=>"Rome"); 


function majuscule_trie($param){
   
    foreach ($param as $key => $value) {
        $key= mb_strtoupper($key, 'UTF-8');;
        $a[$key] = $value ;

    }
    ksort($a);
    return $a;
}


function  afficherTableHTML($capitales){
    $b = majuscule_trie($capitales);
  
?>
<table >
     <tr>
    <th>pays</th>
    <th>capital</th> 
    </tr>
<?php
    foreach ($b as $key => $value) {
       
     echo "<tr>    <td> $key  </td>    <td> $value</td> </tr>";
    } 
?>
</table>
<style>
table,th,td{
    border: 1px solid black;
    border-collapse: collapse;
    text-align: left;
}
</style>
<?php 
}
afficherTableHTML($capitales);
?>