<a href=" ./index.php" title="index"> index</a>
<br>

<?php


$elements = array("choix 1" => "checked","choix2" => "","choix 3" => "");

function genererCheckbox($param)
{
    $s="";
    $s.= "<form> ";

 
    foreach ($param as $key => $value) {
   
        $s.= " <input type='checkbox' $value/> <label for='$key'>$key</label><br />";
    }
        
       
        
    
    $s.= "</form>";
    return $s;
}
echo genererCheckbox($elements);
?>