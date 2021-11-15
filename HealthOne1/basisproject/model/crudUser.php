<?php

function inlogAction(){
    
    if(isset($_POST['name']))
    {
        require 'secure/config.php';
        $name = $_POST['name'];
        $password = $_POST['password'];
        $hashed_password = hash('SHA1',$password);
        $sql = 'SELECT username, password,role FROM users
        WHERE username = :name';
        $statement = $pdo->prepare($sql);
        $statement->bindParam(':name',$name);
        $statement->execute();
        $user = $statement->fetch(PDO::FETCH_ASSOC);
        if(is_array($user))
        {
            if($user['password']==$hashed_password)
            {
                $_SESSION['username']=$name;
                $_SESSION['role']=$user['role'];

                switch($_SESSION['role'])
                {
                    case '3':
                        include 'templates/admin.php';
                        break;
                    case '2':
                        include 'templates/rol2.php';
                        break;
                    case '1':
                        include 'templates/rol3.php';
                        break;
                    default: break;
                }
            }
        }
        else{
           include 'templates/foutInlog.php';
        }

    }
    else{
        include 'templates/inlogForm.php';
    }
}

function uitlogAction(){
    session_unset();
    if(isset($_SESSION)){
            session_destroy();
            inlogAction();
    }
}


?>