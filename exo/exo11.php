<a href=" ./index.php" title="index"> index</a>
<br>

<?php
function formaterDateFr($param){
    setlocale(LC_TIME, "fr_FR");
   $s = strftime("%A %d %B %G", strtotime($param));
    return $s;
}
echo formaterDateFr("2018-02-23"); 
?>
