<a href=" ./index.php" title="index"> index</a>
<br>

<?php


$nomsInput = array("Nom","Prénom","Ville");

function afficherInput($param)
{
    echo "<form>";
    foreach ($param as $value) {
        echo "<label for='$value'>$value:</label><br>";
        echo "<input type='text' id='$value' name='$value'><br>";
    }
    echo "</form>";
    return;
}
afficherInput($nomsInput);

?>