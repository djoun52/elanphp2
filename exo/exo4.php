<a href=" ./index.php" title="index"> index</a>
<br>
<?php

$capitales = ["France" => "Paris", "Allemagne" => "Berlin", "USA" => "Washington", "Italie" => "Rome", "Espagne" => "Madrid"];




function  afficherTableHTML($param)
{
    foreach ($param as $key => $value) {
        $key = mb_strtoupper($key, 'UTF-8');;
        $a[$key] = $value;
    }
    asort($a);
    
$s="";
$s.="
    <table>
        <thead>
            <tr>
                <th>Pays</th>
                <th>Capital</th>
                <th>Lien wiki</th>
            </tr>
        </thead>
        <tbody>";
            foreach ($a as $key => $value) {

                $s.= "<tr>    <td> $key  </td>    <td> $value</td> <td><a href='https://fr.wikipedia.org/wiki/'target='_blank'>
     lien </a> </td> </tr>";
            }
            $s.="
        </tbody>
    </table>
    <style>
        table,
        th,
        td {
            border: 1px solid black;
            border-collapse: collapse;
            text-align: left;
        }
    </style>";
return $s;
}
echo afficherTableHTML($capitales);
?>