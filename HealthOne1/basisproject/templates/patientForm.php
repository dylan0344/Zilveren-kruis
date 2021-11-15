<html>
<div class="form-group">

</div>
<?php
if (isset($patient)) {
    $patientnaam = $patient['naam'];
} else {
    $patientnaam = '';
} ?>
<?php
if (isset($kruisnummer)) {
    $kruisnummerpatient = $kruisnummer['kruisnummer'];
} else {
    $kruisnummerpatient = '';
} ?>
<?php
if (isset($geboorte)) {
    $geboortedag = $geboorte['geboortedatum'];
} else {
    $geboortedag = '';
} ?>
<?php
if (isset($telefoon)) {
    $telefoonnummer = $telefoon['telefoon'];
} else {
    $telefoonnummer = '';
} ?>


<form action="" method="post">
    <label for="fname">Naam:</label><br>
    <input type="text" id="fname" name="naam" value="<?= $patientnaam ?>"><br>
    <label for="lname">Zilveren kruis nummer:</label><br>
    <input type="text" id="lname" name="kruisnummer" value="<?= $kruisnummerpatient ?>"<br>
    <label for="lname">Geboortedatum:</label><br>
    <input type="date" id="lname" name="geboortedatum" value="<?= $geboortedag ?>"<br>
    <label for="lname">Telefoon nummer:</label><br>
    <input type="text" id="lname" name="telefoon" value="<?= $telefoonnummer ?>"<br>
    <input type="hidden" name="form" value="1"><br>
    <input type="submit" value="opslaan"><br>

</form>
</body>
</html>