<a href=" ./index.php" title="index"> index</a>
<br>

<?php
class Voiture
{
    // Properties
    private $etat = FALSE;
    private $vitesse = 0;
    
    private $marque;
    private $modele;

  

    public function __construct($c_marque, $c_modele)
    {
        $this->marque = $c_marque;
        $this->modele = $c_modele;

    }
    // Methods
    function getMarque()
    {
        return $this->marque;
    }
    function setMarque($p_marque)
    {
        $this->marque = $p_marque;
    }

    function getModele()
    {
        return $this->modele;
    }
    function setModele($p_modele)
    {
        $this->modele = $p_modele;
    }

  
    
    function getEtat()
    {
        return $this->etat;
    }
    function setEtat($p_etat)
    {
        $this->etat = $p_etat;
    }
    function getVitesse()
    {
        return $this->vitesse;
    }
    function setVitesse($p_vitesse)
    {
        $this->vitesse = $p_vitesse;
    }
    function addVitesse($p_vitesse)
    {
        $this->vitesse +=$p_vitesse;
    }
    function lessVitesse($p_vitesse)
    {
        $this->vitesse -=$p_vitesse;
    }


    public function id()//récupérer les info d'une voiture 
    {
         echo "<br> info <br> ************** <br>";
         echo "nom et modéle de la voiture : " . $this->getMarque() . " " .$this->getModele() ."<br>";
         echo "Nombre de porte" . $this->getNbPortes() ."<br>" ;
         echo "Le véhicule " .$this->getMarque() . " est " . $this->getEtat() . "<br>";
         echo "Sa vitesse actuel est actuellement de " . $this->getVitesse() . "km/h <br>";
        
    }

    public function demarrer()// démarrer la voiture 
    {
        if ($this->etat == FALSE) {
            $this->etat = TRUE;
            echo $this->getMarque() . " " . $this->getModele() . " demarre";
            echo "<br>";
        } else {
            echo $this->getMarque() . " " . $this->getModele() . " ne peux pas démarrer elle est déjà entrain de faire autre chose.";
            echo "<br>";
        }
    }

    public function accelerer() // accelerer la voiture 
    {
        if ($this->etat == TRUE) {
            if ($this->vitesse < 100) {
                $this->addVitesse(50);
                echo  $this->marque . " " . $this->getModele() . " accelere, ";
                echo $this->getMarque() . " " . $this->getModele() .  " est maintenant a " . $this->getVitesse() . "km/h";
                echo "<br>";
            } else {
                echo $this->modele . " ne peux pas acélerer, elle est déjà a fond ";
                echo "<br>";
            }
        } else {
            echo "Allume déjà le moteur !";
            echo "<br>";
        }
    }

    public function decelerer()// fréner la voiture 
    {
        if ($this->etat == TRUE) {
            if ($this->vitesse > 0) {
                $this->lessVitesse(50);
                echo  $this->marque . " " . $this->getModele() . " decelere";
                echo $this->getModele() .  " est maintenant a " . $this->getVitesse() . "km/h";
                echo "<br>";
            } else {
                echo $this->modele . " ne peux pas decelerer, elle est a arret ";
                echo "<br>";
            }
        } else {
            echo "Allume déjà le moteur !";
            echo "<br>";
        }
    }

    public function arreter()// arreter la voiture 
    {
        if ($this->vitesse === 0) {
            if ($this->etat == TRUE) {
                $this->setEtat(FALSE);
                echo $this->getMarque() . " " . $this->getModele() . "eteint son moteur.";
                echo "<br>";
            } else {
                echo $this->getMarque() . " " . $this->getModele() . "est déja éteint";
                echo "<br>";
            }
        } else {
            echo $this->getMarque() . " " . $this->getModele() . "roule encore";
            echo "<br>";
        }
    }
}


class VoitureElec extends Voiture 
{
    // Properties
    private $autonomie;

    public function __construct($c_marque, $c_modele, $c_autonomie )
    {
        $this->marque = $c_marque;
        $this->modele = $c_modele;
        $this->autonomie = $c_autonomie ;
    }

    function getAutonomie()
    {
        return $this->autonomie;
    }
    function setAutonomie($p_autonomie)
    {
        $this->autonomie = $p_autonomie;
    }

}

echo '<br>';
$v1 = new Voiture("Peugeot","408"); 
$ve1 = new VoitureElec("BMW","I3",100); 

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