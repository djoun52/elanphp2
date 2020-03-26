<a href=" ./index.php" title="index"> index</a>
<br>

<?php


$elements = array("choix 1" => 1,"choix2" => 0,"choix 3" => 0);

function genererCheckbox($param)
{
    echo "<form> ";

    foreach ($param as $key => $value) {
        if ( $value == 1){
            echo " <input type='checkbox' checked/> <label for='$key'>$key</label><br />";
        }elseif ($value == 0) {
            echo " <input type='checkbox' /> <label for='$key'>$key</label><br />";
          
        }
        
    }
    echo "</form>";
    return;
}
genererCheckbox($elements);
?>