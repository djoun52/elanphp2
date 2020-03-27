<a href=" ./index.php" title="index"> index</a>
<br>

<?php

$elements = array("Monsieur","Madame","Mademoiselle");

function alimenterListeDeroulante($param)
{
    $s="";

    $s.= "<form> <select> ";

    foreach ($param as $value) {
        
        $s.= "<option value='$value'>'$value'</option>";
    }
    $s.= "</select></form>";
    return $s;
}
echo alimenterListeDeroulante($elements);
?>