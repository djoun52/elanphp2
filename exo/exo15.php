<a href=" ./index.php" title="index"> index</a>
<br>
<?php
class person
{
    // Properties
    public $nom ;
    public $prenom;
    public $age ;
   
   
    function __construct($c_nom,$c_prenom,$c_age)
    {
        $this-> nom = $c_nom;
        $this-> prenom = $c_prenom;
        $this-> age = $c_age;

    }
     // Methods
     function get_nom()
    {
        return $this->nom;
    }
    function set_nom($p_nom)
    {
        $this->nom = $p_nom;
    }
     function get_prenom()
    {
        return $this->prenom;
    }
    function set_prenom($p_prenom)
    {
        $this->prenom = $p_prenom;
    }
     function get_age()
    {
        return $this->age;
    }
    function set_age($p_age)
    {
        $this->age= $p_age;
    }
    public function id()
    {
        $date= new DateTime("now");
        $date1= new DateTime ($this->get_age());
        $diff=date_diff($date1,$date);
        echo  $this->get_nom(). "  "  .$this->get_prenom() . " " . $diff->format("à %y ans") . "<br>"; 
    }
}
echo '<br>';

$a = new person("DUPONT", "Michel", "1980-02-19");
$b = new person("DUCHEMIN", "Alice","1985-01-17");

$a->id();
$b->id();
    ?>