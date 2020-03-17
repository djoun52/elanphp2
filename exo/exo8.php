
<a href=" ./index.php" title="index"> index</a>
<br>
    <?php
function table_multipli1 ($para){
        for ($i=0; $i <= 10; $i++) {
            echo $para .'x' . $i . '=' . $para * $i;
            echo '<br>';
        
    }}
        
    function table_multipli2 ($para){
        $i=0;
        while ($i <= 10) {
            echo $para .'x' . $i . '=' . $para * $i;
            echo '<br>';
            $i++;        
        }}

table_multipli1(2);
table_multipli2(3);