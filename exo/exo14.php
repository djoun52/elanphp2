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
    public function getMarque()
    {
        return $this->marque;
    }
    public function setMarque($p_marque)
    {
        $this->marque = $p_marque;
    }

    public function getModele()
    {
        return $this->modele;
    }
    public function setModele($p_modele)
    {
        $this->modele = $p_modele;
    }

    public function __toString()
    {
        return $this->getMarque() . " " .$this->getModele();
    }
  
    
   
    


    public function id()//récupérer les info d'une voiture 
    {

        $s="";
        $s.=  "<br> info <br> ************** <br>";
        $s.=  "nom et modéle de la voiture :  " . $this ."<br>";

        return  $s;
    }

 
}


class VoitureElec extends Voiture 
{
    // Properties
    private $autonomie;

    public function __construct($c_marque, $c_modele, $c_autonomie )
    {
        
        parent::__construct($c_marque, $c_modele);
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
    public function id(){
        $message = parent::id();
        return $message.= "l'autonomie de cette voiture est de " .$this->getAutonomie() ;
    }

}

echo '<br>';
$v1 = new Voiture("Peugeot","408"); 
$ve1 = new VoitureElec("BMW","I3",100); 



echo $v1;
echo $v1->id()."<br/>"; 
echo $ve1->id()."<br/>";
