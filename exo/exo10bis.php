<a href="./index.php" title="index"> index</a>
<br>
    <?php

    function rendu($monaie,$prix){

        if ($monaie>$prix){
             $rendu= $monaie-$prix; 

        $nb_billet = intdiv($rendu,20) ;
        if($rendu>20){
            echo $nb_billet."billet de 20" ;
            echo "<br>";
            $rest = $rendu%20;
        }
        
        $nb_billet= intdiv($rest,10);
        if($rest>10){
            echo $nb_billet."billet de 10" ;
            echo "<br>";
            $rest = $rest%10;
        }
        
        $nb_billet= intdiv($rest,5);
        if($rest>5){
            echo $nb_billet."billet de 5" ; 
            echo "<br>"; 
            $rest = $rest%5;
            echo "<br>";
        }

        $nb_billet= intdiv($rest,2);
        if($rest>2){
            echo $nb_billet."billet de 2" ;
            echo "<br>";  
            $rest= $rest%2;
            echo "<br>";
        }
    
        $nb_billet= intdiv($rest,1);
        if ($rest == 1 ){
         echo "1 piece de 1" ;   
        }
        
        }else {
            echo "manque de monnaie";
        }}
    

rendu (50,19);