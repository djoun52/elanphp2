<a href=" ./index.php" title="index"> index</a>
    <br>

    <?php
    
    $nomsInput = array("Nom","Prénom","e-mail","ville","sexe");
    $elements = array(" Développeur Logiciel ","Designer web "," Intégrateur » ou « Chef de projet ");

    function afficherInput($param){
        $s="";
        foreach ($param as $value) {
            $s.= "<label for='$value'>$value:</label><br>";
            $s.= "<input type='text' id='$value' name='$value'><br>";
        }
        return $s;
    }
    function afficherChoix($param){
               $s="";
        foreach ($param as $value) {
            $s.= "<input type='radio' name='formation' value='$value' id='$value'/> <label for='$value'>$value</label><br />";
        }
       
        return $s;
    }
    function afficherFormulaire($param1 , $param2)
    {
        $s="";
        $s.= "<form>";
        $s.=afficherInput($param1);
        $s.=afficherChoix($param2);
        $s.= "<input type='submit' value='Submit'> </form>";
        return $s;
    }
    echo afficherFormulaire($nomsInput ,$elements);

    ?>