<?php 

include("../secured/pdoconn.php");

if(isset($_POST['submit'])){
    // Define variables
    $username = htmlspecialchars($_POST['username']);
    $password = htmlspecialchars($_POST['password']);
    $role = htmlspecialchars($_POST['role']);
    
    // Password hashing
    $hashed_pass = hash("SHA256", $password);

    if($role = "1" || $role = "2" || $role = "3"){
        
        // create query and run it
        $sql = "INSERT INTO accounts (username, password, role) VALUES (?,?,?)";
        $stmt= $pdo->prepare($sql);
        $stmt->execute([$username, $hashed_pass, $role]);
        echo "Gebruiker successvol aangemaakt.";
    }else{
        $err = "Gebruik een role die geldig is.";
        echo $err;
    }
}



?>
<form action="" method="POST">
    <input type="text" name="username" placeholder="gebruikersnaam">
    <input type="text" name="password" placeholder="wachtwoord">
    <label for="role">Rol:</label>
    <select name="role">
        <option value="1">Verzekeraar</option>
        <option value="2">Apotheker</option>
        <option value="3">Arts</option>
    </select>

    <input type="submit" name="submit" value="submit">
</form>
