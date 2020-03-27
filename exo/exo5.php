<a href=" ./index.php" title="index"> index</a>
<br>

<?php


$nomsInput = ["Nom","Prénom","Ville"];

function afficherInput($param)
{
    $s="";
$s.="<form>";
    foreach ($param as $value) {
        $s.="<label for='$value'>$value:</label><br>";
        $s.="<input type='text' id='$value' name='$value'><br>";
    }
    $s.="</form>";
    return $s;
}
echo afficherInput($nomsInput);

?>