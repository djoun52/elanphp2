<a href=" ./index.php" title="index"> index</a>
<br>

<?php
 $date1="1996-03-16";
 $date2="1985-01-07";

function age($param){
  
   $date= new DateTime("now");
   $date1= new DateTime($param);
   $diff=date_diff($date1,$date);
   echo " age de la personne : " .$diff->format("%y ans %m mois %d jours") . "<br>";
   return;
}

age($date1);

age($date2);
?>