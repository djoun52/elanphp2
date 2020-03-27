<a href=" ./index.php" title="index"> index</a>
    <br>

    <?php
    
    $nomsInput = array("Nom","Prénom","e-mail","ville","sexe");
    $elements = array(" Développeur Logiciel ","Designer web "," Intégrateur » ou « Chef de projet ");

    function afficherInput($param){
        foreach ($param as $value) {
            echo "<label for='$value'>$value:</label><br>";
            echo "<input type='text' id='$value' name='$value'><br>";
        }
    }
    function afficherChoix($param){
        foreach ($param as $value) {
            echo "<input type='radio' name='formation' value='$value' id='$value'/> <label for='$value'>$value</label><br />";
        }
       
    }
    function afficherFormulaire($param1 , $param2)
    {

        echo "<form>";
        afficherInput($param1);
        afficherChoix($param2);
        echo "<input type='submit' value='Submit'> </form>";
        
    }
    afficherFormulaire($nomsInput ,$elements);

    ?>