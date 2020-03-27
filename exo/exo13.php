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

    public function __toString()
    {
        return $this->getMarque() . " " .$this->getModele();
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
        if ($this->etat == FALSE){
            $etatv="à l'arret";
        }else {
            $etatv="démarer";}
        $s="";
        $s.= "<br> info <br> ************** <br>";
        $s.= "nom et modéle de la voiture : " . $this->__toString() ."<br>";
        $s.= "Nombre de porte" . $this->getNbPortes() ."<br>" ;
        $s.= "Le véhicule " .$this->__toString() . " est  $etatv  <br>";
        $s.= "Sa vitesse actuel est actuellement de " . $this->getVitesse() . "km/h <br><br>";
        return  $s;
    }

    public function demarrer()// démarrer la voiture 
    {
        $s="";
        if ($this->etat == FALSE) {
            $this->etat = TRUE;
            $s.= $this->__toString() . " demarre";
            $s.= "<br>";
        } else {
            $s.= $this->__toString() . " ne peux pas démarrer elle est déjà entrain de faire autre chose.";
            $s.= "<br>";

        }
        return  $s;
    }

    public function accelerer() // accelerer la voiture 
    {
        $s="";
        if ($this->etat == TRUE) {
            if ($this->vitesse < 100) {
                $this->addVitesse(50);
                $s.=  $this->__toString() . " accelere, ";
                $s.= $this->__toString() .  " est maintenant a " . $this->getVitesse() . "km/h";
                $s.= "<br>";

            } else {
                $s.= $this->__toString() . " ne peux pas acélerer, elle est déjà a fond ";
                $s.= "<br>";

            }
        } else {
            $s.= "Allume déjà le moteur !";
            $s.= "<br>";

        }
        return  $s;
    }

    public function decelerer()// fréner la voiture 
    {
        $s="";
        if ($this->etat == TRUE) {
            if ($this->vitesse > 0) {
                $this->lessVitesse(50);
                $s.=  $this->__toString() . " decelere";
                $s.= $this->__toString() .  " est maintenant a " . $this->getVitesse() . "km/h";
                $s.= "<br>";

            } else {
                $s.= $this->__toString() . " ne peux pas decelerer, elle est a arret ";
                $s.= "<br>";
            }
        } else {
            $s.= "Allume déjà le moteur !";
            $s.= "<br>";
        }
        return  $s;
    }

    public function arreter()// arreter la voiture 
    {
        $s="";
        if ($this->vitesse === 0) {
            if ($this->etat == TRUE) {
                $this->setEtat(FALSE);
                $s.= $this->__toString() . "eteint son moteur.";
                $s.= "<br>";
            } else {
                $s.= $this->__toString() . "est déja éteint";
                $s.= "<br>";
            }
        } else {
            $s.= $this->__toString() . "roule encore";
            $s.= "<br>";
        }
        return  $s;
    }
    
}
echo '<br>';
$a = new Voiture('Peugeot', '308', 5);
$b = new Voiture("Citroën","C4",3 );

echo $a->demarrer();
echo $a->arreter();
echo $a->demarrer();
echo $a->decelerer();
echo $a->arreter();
echo $a->decelerer();
echo $a->demarrer();
echo $a->accelerer();
echo $a->accelerer();
echo $a->accelerer();
echo $a->decelerer();
echo $a->decelerer();
echo $a->decelerer();


echo $b->id();
echo $b->demarrer();
echo$b->id();
echo $b->accelerer();
echo $b->id();
echo $a->id();
?>