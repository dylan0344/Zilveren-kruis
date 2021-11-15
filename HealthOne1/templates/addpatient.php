<?php
require("protected/config.php");
require("functions/patient.php");

// als user niet ingelogd is / geen admin is
if(!isset($_SESSION['logged_in'])){
    header("location: index.php?home");
}

if(isset($_POST['submit'])){
    $name = htmlspecialchars($_POST['naam']);
    $nummer = htmlspecialchars($_POST['kruisnummer']);
    $borndate = htmlspecialchars($_POST['geboortedatum']);
    $tel = htmlspecialchars($_POST['telefoon']);

    $patient = addpatient($pdo, $name, $nummer, $borndate, $tel);
}
if(isset($patient)){
    echo $patient;
}
?>
<form action="" method="post">
    <label for="fname">Naam:</label><br>
    <input type="text" id="fname" name="naam"><br>
    <label for="lname">Zilveren kruis nummer:</label><br>
    <input type="text" id="lname" name="kruisnummer"><br>
    <label for="lname">Geboortedatum:</label><br>
    <input type="date" id="lname" name="geboortedatum" ><br>
    <label for="lname">Telefoon nummer:</label><br>
    <input type="text" id="lname" name="telefoon" ><br>

    <input type="submit" name="submit" value="opslaan"><br>
</form>