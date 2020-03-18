<a href=" ./index.php" title="index"> index</a>
<br>

<?php
function formaterDateFr($param){
    setlocale(LC_TIME, "fr_FR");
    echo strftime("%A %d %B %G", strtotime($param));
    return;
}
formaterDateFr("2018-02-23"); 
?>
</ul>