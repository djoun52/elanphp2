<a href=" ./index.php" title="index"> index</a>
<br>
<?php

$capitales = array("France" => "Paris", "Allemagne" => "Berlin", "USA" => "Washington", "Italie" => "Rome", "Espagne" => "Madrid");


function majuscule_trie($param)
{

    foreach ($param as $key => $value) {
        $key = mb_strtoupper($key, 'UTF-8');;
        $a[$key] = $value;
    }
    asort($a);
    return $a;
}


function  afficherTableHTML($capitales)
{
    $b = majuscule_trie($capitales);

?>
    <table>
        <thead>
            <tr>
                <th>Pays</th>
                <th>Capital</th>
                <th>Lien wiki</th>
            </tr>
        </thead>
        <tbody>
            <?php
            foreach ($b as $key => $value) {

                echo "<tr>    <td> $key  </td>    <td> $value</td> <td><a href='https://fr.wikipedia.org/wiki/'target='_blank'>
     lien </a> </td> </tr>";
            }
            ?>
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
    </style>
<?php
}
afficherTableHTML($capitales);
?>