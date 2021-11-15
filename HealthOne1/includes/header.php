<?php
session_start();
if(!isset($_SESSION['logged_in'])){
    header("location: login.php");
}

?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Dashboard - Healthone</title>
    <link rel="stylesheet" href="basisproject/assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i">
    <link rel="stylesheet" href="basisproject/assets/fonts/fontawesome-all.min.css">
    <link rel="stylesheet" href="basisproject/assets/fonts/font-awesome.min.css">
    <link rel="stylesheet" href="basisproject/assets/fonts/fontawesome5-overrides.min.css">
    <link rel="stylesheet" href="styling/stylesheet.css">
    
</head>

<body id="page-top">
    <div id="wrapper">
        <nav class="navbar navbar-dark align-items-start sidebar sidebar-dark accordion bg-gradient-primary p-0">
            <div class="container-fluid d-flex flex-column p-0"><a class="navbar-brand d-flex justify-content-center align-items-center sidebar-brand m-0" href="#"><img src="basisproject/assets/img/clipboard-image.png" style="width: 50px;"><span style="margin: 9px;">Zilveren kruis</span>
                    <div class="sidebar-brand-icon rotate-n-15"></div>
                    <div class="sidebar-brand-text mx-3"></div>
                </a>
                <hr class="sidebar-divider my-0">
                <ul class="navbar-nav text-light" id="accordionSidebar">
                    <li class="nav-item"><a class="nav-link" href="?page=home"><i class="fas fa-tachometer-alt"></i><span>Dashboard</span></a></li>
                    <li class="nav-item"><a class="nav-link" href="?page=addpatient"><i class="fas fa-tachometer-alt"></i><span>Patient toevoegen</span></a></li>
                    <li class="nav-item"><a class="nav-link" href="?page=viewpatient"><i class="fas fa-tachometer-alt"></i><span>Alle patienten</span></a></li>
                    <?php
                        if($_SESSION['role'] == "3"){
                            echo '<li class="nav-item"><a class="nav-link" href="?page=register"><i class="fas fa-tachometer-alt"></i><span>Account aanmaken</span></a></li>';
                        }
                    ?>
                    <li class="nav-item"><a class="nav-link" href="?page=logout"><i class="far fa-user-circle"></i><span>Log uit</span></a></li>
                </ul><button class="btn rounded-circle border-0" id="sidebarToggle" type="button"></button>
                <div class="text-center d-none d-md-inline"></div>
            </div>
        </nav>