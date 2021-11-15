<?php
require("protected/config.php");

$stmt = $pdo->prepare("SELECT * FROM patienten");
$stmt->execute(); 
$patienten = $stmt->fetchAll();

if ($patienten) {
    // show the publisher
    echo '<table class="table table-striped">';
    echo "<th>naam</th>";
    echo "<th>nummer</th>";
    echo "<th>tel</th>";
    echo "<th>geboorte</th>";
    foreach ($patienten as $patient) {
        echo '<tr><td>';
        echo $patient['naam'] . '</td> <td>' ;
        echo $patient['verzekeringnummer'] .'</td> <td>';
        echo $patient['telefoon'].'</td> <td>';
        echo $patient['geboortedatum'].'</td> <td>';
        echo <td><a href="edit.php?id= echo $patient['id']; ">Edit</a></td>
        echo <td><a href="delete.php?id= echo $patient['id']; ">Delete</a></td>

        echo '</tr>';
    }
    echo '</table>';
}
?>