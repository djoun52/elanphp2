<a href=" ./index.php" title="index"> index</a>
<br>

<?php


$nomsInput = ["Nom","Prénom","Ville"];

function afficherInput($param)
{
    echo "<form>";
    foreach ($param as $value) {
        // echo "<label for='$value'>$value:</label><br>";
        // echo "<input type='text' id='$value' name='$value'><br>";
        ?> 
        <label for=' <?php echo $value ?>'> <?php echo $value ?>:</label><br>
        <input type='text' id='<?php echo $value ?>' name='<?php echo $value ?>'><br>
        <?php
    }
    echo "</form>";
}
afficherInput($nomsInput);

?>