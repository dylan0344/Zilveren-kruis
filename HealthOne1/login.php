<?php
session_start();
if(isset($_SESSION['logged_in'])){
    header("location: index.php?home");
}

require("protected/config.php");
require("functions/account.php");

if(isset($_POST['submit'])){
    $username = htmlspecialchars($_POST['username']);
    $password = htmlspecialchars($_POST['password']);

    $account = loginUser($pdo, $username, $password);

}
if(isset($account)){
    echo $account;
}
?>

<form action="" method="POST">
    <label for="username">Gebruikersnaam: </label>
    <input type="text" name="username">
    <label for="password">Wachtwoord: </label>
    <input type="password" name="password">
    <input type="submit" name="submit" value="login">
</form>