<a href=" ./index.php" title="index"> index</a>
<br>

<?php


$elements = array("Monsieur","Madame","Mademoiselle");

function alimenterListeDeroulante($param)
{
    echo "<form> <p>";

    foreach ($param as $value) {
        
        echo "<input type='radio' name='genre' value='$value' id='$value'/> <label for='$value'>$value</label><br />";
    }
    echo "</p> </form>";
}
alimenterListeDeroulante($elements);
?>