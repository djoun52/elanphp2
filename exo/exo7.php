<a href=" ./index.php" title="index"> index</a>
<br>

<?php


$elements = array("choix 1","choix2","choix 3");

function genererCheckbox($param)
{
    echo "<form> ";

    foreach ($param as $value) {
        
        echo " <input type='checkbox' /> <label for='$value'>$value</label><br />";
    }
    echo "</form>";
    return;
}
genererCheckbox($elements);
?>