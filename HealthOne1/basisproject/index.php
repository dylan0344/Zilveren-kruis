<?php
session_start();
require 'model/crudUser.php';
require 'model/patient.php';
//var_dump($_SESSION);die;
if(isset($_POST['form']))
{
    switch($_POST['form'])
    {
        case 3:inlogAction();
        break;
        default;
    }
} 
elseif(isset($_GET['healthone'])){
    if($_GET['healthone']==3){
        inlogAction();
    }
        elseif($_GET['healthone']=='pr' && $_SESSION['role']=='3'){
        showPatient();
        }
        elseif($_GET['healthone']=='pc' && $_SESSION['role']=='3'){
        patientToevoegen();
        }
        elseif($_GET['healthone']=='pd' && $_SESSION['role']=='3'){
        deletePatient();
        }
        elseif($_GET['healthone']=='pu' && $_SESSION['role']=='3'){
        editPatient();
        }

    elseif($_GET['healthone']=4){
        uitlogAction();
    }
}
else{
    if(!isset($_SESSION['role'])){
        inlogAction();
    }
    else{
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
    

