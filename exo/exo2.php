<a href=" ./index.php" title="index"> index</a>
<br>
<?php

$capitales = ["France" => "Paris", "Allemagne" => "Berlin", "USA" => "Washington", "Italie" => "Rome"];




function  afficherTableHTML($capitales)
{
    foreach ($capitales as $key => $value) {
        $key = mb_strtoupper($key, 'UTF-8');;
        $a[$key] = $value;
    }
    ksort($a);

?>
    <table>
        <thead>
            <tr>
                <th>pays</th>
                <th>capital</th>
            </tr>
        </thead>
        <tbody>
            <?php
            foreach ($a as $key => $value) {

                echo "<tr>    <td> $key  </td>    <td> $value</td> </tr>";
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