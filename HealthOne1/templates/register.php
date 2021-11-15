<?php
require("protected/config.php");
require("functions/account.php");

// als user niet ingelogd is / geen admin is
if(!isset($_SESSION['logged_in']) || $_SESSION['role'] != "3"){
    header("location: index.php?home");
}


if(isset($_POST['submit'])){
    $username = htmlspecialchars($_POST['username']);
    $password = htmlspecialchars($_POST['password']);
    $role = htmlspecialchars($_POST['role']);
    $account = registerUser($pdo, $username, $password, $role);
}
if(isset($account)){
    echo $account;
}
?>
<form method="POST">
    <input type="text" name="username" placeholder="username">
    <input type="password" name="password" placeholder="password">
    <select name="role">
        <option value="1">admin</option>
        <option value="2">waarde2</option>
        <option value="3">waarde3</option>
    </select>
    <input type="submit" name="submit" value="aanmaken">
</form>