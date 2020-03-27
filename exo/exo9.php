<a href=" ./index.php" title="index"> index</a>
<br>

<?php


$elements = array("Monsieur","Madame","Mademoiselle");

function alimenterListeDeroulante($param)
{
    $s="";
    $s.= "<form> <p>";

    foreach ($param as $value) {
        
        $s.= "<input type='radio' name='genre' value='$value' id='$value'/> <label for='$value'>$value</label><br />";
    }
    $s.="</p> </form>";
    return $s;
}
echo alimenterListeDeroulante($elements);
?>