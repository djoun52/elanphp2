<a href=" ./index.php" title="index"> index</a>
<br>

<?php
class Voiture
{
    // Properties
    private $etat = "arreter";
    private $vitesse = 0;
    
    private $marque;
    private $modele;
    private $nbPortes ;
  

    public function __construct($c_marque, $c_modele, $c_nbPortes)
    {
        $this->marque = $c_marque;
        $this->modele = $c_modele;
        $this->date = $c_nbPortes ;
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
    function getNbPortes ()
    {
        return $this->nbPortes ;
    }
    function setNbPortes ($p_nbPortes )
    {
        $this->nbPortes  = $p_nbPortes ;
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
        if ($this->etat == "arreter") {
            $this->etat = "demarrer";
            echo $this->getMarque() . " " . $this->getModele() . " demarre";
            echo "<br>";
            return;
        } else {
            echo $this->getMarque() . " " . $this->getModele() . " ne peux pas démarrer elle est déjà entrain de faire autre chose.";
            echo "<br>";
            return;
        }
    }

    public function accelerer() // accelerer la voiture 
    {
        if ($this->etat == "demarrer") {
            if ($this->vitesse < 100) {
                $this->addVitesse(50);
                echo  $this->marque . " " . $this->getModele() . " accelere, ";
                echo $this->getMarque() . " " . $this->getModele() .  " est maintenant a " . $this->getVitesse() . "km/h";
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
                $this->lessVitesse(50);
                echo  $this->marque . " " . $this->getModele() . " decelere";
                echo $this->getModele() .  " est maintenant a " . $this->getVitesse() . "km/h";
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
                $this->setEtat("arreter");
                echo $this->getMarque() . " " . $this->getModele() . "eteint son moteur.";
                echo "<br>";
                return;
            } else {
                echo $this->getMarque() . " " . $this->getModele() . "est déja éteint";
                echo "<br>";
                return;
            }
        } else {
            echo $this->getMarque() . " " . $this->getModele() . "roule encore";
            echo "<br>";
            return;
        }
    }
}
echo '<br>';
$a = new Voiture('Peugeot', '308', 5);
$b = new Voiture("Citroën","C4",3 );

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