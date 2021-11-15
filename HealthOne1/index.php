<?php
include("includes/header.php");
if(!isset($_SESSION['logged_in'])){
    header("location: login.php");
}
if(isset($_GET['page'])){
    $page = $_GET['page'];
}else{
    $page = "home";
}

switch($page){
    case "home":
    include("templates/home.php");
    break;

    case "register":
        include("templates/register.php");
        break;
    case "addpatient":
        include("templates/addpatient.php");
        break;
        case "viewpatient":
            include("templates/viewpatient.php");
            break;
    case "logout":
    include("templates/logout.php");
    break;
        
    default:
    include("templates/home.php");
    break;
}

include("includes/footer.php");
