<a href=" ./index.php" title="index"> index</a>
<br>

<?php

$elements = array("Monsieur","Madame","Mademoiselle");

function alimenterListeDeroulante($param)
{
    echo "<form> <select> ";

    foreach ($param as $value) {
        
        echo "<option value='$value'>'$value'</option>";
    }
    echo "</select></form>";

}
alimenterListeDeroulante($elements);
?>