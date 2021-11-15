<?php
// importeer de head en navbar
    include "htmlhead.php";
    // als update dan naam bekend, als insert dan naam is null
?>
<p>Vul uw inloggegevens</p>
    <form action='index.php' method='post' >
        <label for="name">naam</label>
        <input type="text" name="name" value='' />

        <label for="password">wachtwoord</label>
        <input type="password" name="password" value=''/>
        <input type="hidden" name="form" value='3'/>
        <input type="submit" value="inloggen" />
    </form>
<?php
include'templates/footer.php';

?>