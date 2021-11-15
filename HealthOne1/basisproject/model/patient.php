<?php


function patientToevoegen($pdo) {

    if (isset($_POST['form'])){
        require '../config.php';
        $naam = $_POST['naam'];
        $kruisnummer = $_POST['kruisnummer'];
        $geboortedatum = $_POST['geboortedatum'];
        $telefoonnummer = $_POST['telefoon'];

        $statement = $pdo->prepare("INSERT INTO patienten VALUES(NULL, :naam, :kruisnummer, :telefoon ,:geboortedatum );");
        $statement->bindParam(':naam', $naam);
        $statement->bindParam(':kruisnummer', $kruisnummer);
        $statement->bindParam(':geboortedatum', $geboortedatum);
        $statement->bindParam(':telefoon', $telefoonnummer);
        $statement->execute();
        if ($statement)
        {
            $pdo=null;
            showPatient();
        }
    } else {
        include('templates/patientform.php');
    }

}

function showPatient($pdo) {
    require '../config.php';
    $statement = $pdo->prepare("SELECT * FROM patienten");
    $statement->execute();
    if ($statement)
    {
        $patienten = $statement->fetchAll(PDO::FETCH_ASSOC);
        include "templates/patientLijst.php";
    }

}

function editPatient() {
    if(isset($_POST['form'])){
        require 'secure/config.php';
        $id = $_POST['id'];
        $naam = $_POST['naam'];
        $kruisnummer = $_POST ['kruisnummer'];
        $geboortedatum = $_POST ['geboortedatum'];
        $telefoon = $_POST ['telefoon']



    }
    else
    {
        $id = $_GET['id'];
        require 'secure/config.php';
        $statement = $pdo->prepare("SELECT * FROM patienten WHERE patientid =:id");
        $statement->bindParam(':id',$id);
        $statement->execute();
        $count =  $statement->rowCount();
        if ($count > 0)
        {
            $statement->setFetchMode(PDO::FETCH_ASSOC);
            $patient = $statement->fetch();
            $pdo=null;
            $verwerking  = 2;
            include('templates/patientForm.php');
        }
        else{
            $pdo=null;
            showLeerlingen();
        }
    }

    function deletePatient(){
        $id = $_GET;
    }
}

