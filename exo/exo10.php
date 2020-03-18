<a href=" ./index.php" title="index"> index</a>
    <br>

    <?php
    
    $nomsInput = array("Nom","Prénom","e-mail","ville","sexe");
    $elements = array(" Développeur Logiciel ","Designer web "," Intégrateur » ou « Chef de projet ");

    function afficherInput($param1 , $param2)
    {
        echo "<form>";
        foreach ($param1 as $value) {
            echo "<label for='$value'>$value:</label><br>";
            echo "<input type='text' id='$value' name='$value'><br>";
        }
        foreach ($param2 as $value) {
            echo "<input type='radio' name='formation' value='$value' id='$value'/> <label for='$value'>$value</label><br />";
        }
        echo "<input type='submit' value='Submit'> </form>";
        return;
    }
    afficherInput($nomsInput ,$elements);

    ?>