<a href=" ./index.php" title="index"> index</a>
<br>

<?php
class voiture
{
    // Properties
    private $etat = "arreter";
    private $vitesse = 0;
    
    private $marque;
    private $modele;
    private $nbPortes ;
  

    function __construct($c_marque, $c_modele, $c_nbPortes)
    {
        $this->marque = $c_marque;
        $this->modele = $c_modele;
        $this->date = $c_nbPortes ;
    }
    // Methods
    function get_marque()
    {
        return $this->marque;
    }
    function set_marque($p_marque)
    {
        $this->marque = $p_marque;
    }
    function get_modele()
    {
        return $this->modele;
    }
    function set_modele($p_modele)
    {
        $this->modele = $p_modele;
    }
    function get_nbPortes ()
    {
        return $this->nbPortes ;
    }
    function set_nbPortes ($p_nbPortes )
    {
        $this->nbPortes  = $p_nbPortes ;
    }

    function get_etat()
    {
        return $this->etat;
    }
    function set_etat($p_etat)
    {
        $this->etat = $p_etat;
    }
    function get_vitesse()
    {
        return $this->vitesse;
    }
    function set_vitesse($p_vitesse)
    {
        $this->vitesse = $p_vitesse;
    }
    function add_vitesse($p_vitesse)
    {
        $this->vitesse +=$p_vitesse;
    }
    function less_vitesse($p_vitesse)
    {
        $this->vitesse -=$p_vitesse;
    }


    public function id()//récupérer les info d'une voiture 
    {
         echo "<br> info <br> ************** <br>";
         echo "nom et modéle de la voiture : " . $this->get_marque() . " " .$this->get_modele() ."<br>";
         echo "Nombre de porte" . $this->get_nbPortes() ."<br>" ;
         echo "Le véhicule " .$this->get_marque() . " est " . $this->get_etat() . "<br>";
         echo "Sa vitesse actuel est actuellement de " . $this->get_vitesse() . "km/h <br>";
        
    }

    public function demarrer()// démarrer la voiture 
    {
        if ($this->etat == "arreter") {
            $this->etat = "demarrer";
            echo $this->get_marque() . " " . $this->get_modele() . " demarre";
            echo "<br>";
            return;
        } else {
            echo $this->get_marque() . " " . $this->get_modele() . " ne peux pas démarrer elle est déjà entrain de faire autre chose.";
            echo "<br>";
            return;
        }
    }

    public function accelerer() // accelerer la voiture 
    {
        if ($this->etat == "demarrer") {
            if ($this->vitesse < 100) {
                $this->add_vitesse(50);
                echo  $this->marque . " " . $this->get_modele() . " accelere, ";
                echo $this->get_marque() . " " . $this->get_modele() .  " est maintenant a " . $this->get_vitesse() . "km/h";
                echo "<br>";
                return;
            } else {
                echo $this->modele . " ne peux pas acélerer, elle est déjà a fond ";
                echo "<br>";
                return;
            }
        } else {
            echo "Allume déjà le moteur !";
            echo "<br>";
            return;
        }
    }

    public function decelerer()// fréner la voiture 
    {
        if ($this->etat == "demarrer") {
            if ($this->vitesse > 0) {
                $this->less_vitesse(50);
                echo  $this->marque . " " . $this->get_modele() . " decelere";
                echo $this->get_modele() .  " est maintenant a " . $this->get_vitesse() . "km/h";
                echo "<br>";
                return;
            } else {
                echo $this->modele . " ne peux pas decelerer, elle est a arret ";
                echo "<br>";
                return;
            }
        } else {
            echo "Allume déjà le moteur !";
            echo "<br>";
            return;
        }
    }

    public function arreter()// arreter la voiture 
    {
        if ($this->vitesse === 0) {
            if ($this->etat == "demarrer") {
                $this->set_etat("arreter");
                echo $this->get_marque() . " " . $this->get_modele() . "eteint son moteur.";
                echo "<br>";
                return;
            } else {
                echo $this->get_marque() . " " . $this->get_modele() . "est déja éteint";
                echo "<br>";
                return;
            }
        } else {
            echo $this->get_marque() . " " . $this->get_modele() . "roule encore";
            echo "<br>";
            return;
        }
    }
}
echo '<br>';
$a = new voiture('Peugeot', '308', 5);
$b = new voiture("Citroën","C4",3 );

$a->demarrer();
$a->arreter();
$a->demarrer();
$a->decelerer();
$a->arreter();
$a->decelerer();
$a->demarrer();
$a->accelerer();
$a->accelerer();
$a->accelerer();
$a->decelerer();
$a->decelerer();
$a->decelerer();


$b->id();
$b->demarrer();
$b->id();
$b->accelerer();
$b->id();
?>