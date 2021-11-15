<?php

if ($patienten) {
    // show the publisher
    echo '<table>';
    foreach ($patienten as $patient) {
        echo '<tr>';
        echo '<td>';
        echo $patient['naam'] . '</td> <td class="bg-dark">' ;
        echo $patient['verzekeringnummer'] .'</td> <td>';
        echo $patient['telefoon'].'</td> <td>';
        echo $patient['geboortedatum'].'</td><td>';
        echo "<a href='?healthone=pu&id=". $patient['patientid']."'>wijzigen</a></td><td>";
        echo "<a href='?healthone=pd&id=". $patient['patientid']."'>delete</a></td>";
        echo '</tr>';
    }
    echo '</table>';
}
?>