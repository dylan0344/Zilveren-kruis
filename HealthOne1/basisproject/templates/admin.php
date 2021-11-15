<?php
// importeer de head en navbar
include "htmlhead.php";
// als update dan naam bekend, als insert dan naam is null
?>
<h1>dashboard <?php echo $_SESSION['role']; ?></h1>
<a href="?healthone=pr">overzicht patienten</a>
<a href="?healthone=mr">overzicht medicijnen</a>


