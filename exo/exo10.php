<a href=" ./index.php" title="index"> index</a>
    <br>

    <?php
    function rendu($para){
    if (is_int($para)){
     
        for ($k = 0; $para >= 20; $k = $k + 1) {
            $para = $para - 20;
        }
        echo $k . "billet de 20";
        echo "<br>";
        for ($k = 0; $para >= 10; $k++) {
            $para = $para - 10;
        }
        echo $k . "billet de 10";
        echo "<br>";
        for ($k = 0; $para >= 5; $k++) {
            $para = $para - 5;
        }
        echo $k . "billet de 5";
        echo "<br>";
        for ($k = 0; $para >= 2; $k++) {
            $para = $para - 2;
        }
        echo $k . "piece de 2";
        echo "<br>";
        for ($k = 0; $para >= 1; $k++) {
            $para = $para - 1;
        }
        echo $k . "piece de 1";
        echo "<br>";   
    }else {
        echo "erreur";
    }
    
    }
    rendu(93);
    echo "<br>";  
    rendu ("bonjour");
    ?>