<?php
include '../includes/database.php';

$email = $_POST['email_usuari'];
$adreca = $_POST['adreca'];
$cp = $_POST['CP'];
$nom = $_POST['nom_usuari'];
$id = $_POST['id'];

$query = "INSERT INTO clients (nom, email, cp, adreca) VALUES('$nom', '$email', '$cp', '$adreca')";

$result = mysqli_query($dbh, $query);

if($result){
    header('Location: ../index.php');
}else{
    echo mysqli_error($dbh);
}