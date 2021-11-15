<?php
function loginUser($pdo, $username, $password){
    $username = trim($_POST['username']);
    $password = trim($_POST['password']);
    $hashed_pass = hash("SHA1", $password);
    if($username != "" && $password != "") {
        
      try {  
        $query = "select * from `users` where `username`=:username";
        $stmt = $pdo->prepare($query);
        $stmt->bindParam('username', $username, PDO::PARAM_STR);
        
        $stmt->execute();
        $count = $stmt->rowCount();
        
        if($count == 1 ) {
  
          $user = $stmt->fetch(PDO::FETCH_ASSOC);
          
          if($hashed_pass == $user['password']){
              $_SESSION['logged_in'] = true;
              $_SESSION['username'] = $username;
              $_SESSION['role'] = $user['role'];
         
              header('location: index.php?page=home');
          }
        } else {
          $msg = "Invalid username and password!";
        }
      } catch (PDOException $e) {
        echo "Error : ".$e->getMessage();
      }
    } else {
      $msg = "Both fields are required!";
    }
    return $msg;
}

function registerUser($pdo, $username, $password, $role){
    // Define variables
    $username = htmlspecialchars($_POST['username']);
    $password = htmlspecialchars($_POST['password']);
    $role = htmlspecialchars($_POST['role']);
    
    // Password hashing
    $hashed_pass = hash("SHA1", $password);

    if($role == "1" || $role == "2" || $role == "3"){
        // create query and run it
        $sql = "INSERT INTO users (username, password, role) VALUES (?,?,?)";
        $stmt= $pdo->prepare($sql);
        $stmt->execute([$username, $hashed_pass, $role]);
        $msg = "User aangemaakt!";
        echo $msg;
    }else{
        $err = "Gebruik een role die geldig is.";
        echo $err;
    }
}
?>