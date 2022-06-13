<?php
include '../includes/database.php';

$id = $_POST['id_Agent'];
$nom = $_POST['Nom'];
$llinatge = $_POST['Llinatge'];
$fecha = $_POST['Fecha'];

$query = "INSERT INTO Agent (Nom, Llinatge, Fecha) VALUES ('$nom', '$llinatge', '$fecha');";
$result = mysqli_query($dbh, $query);

if($result){
    header('Location: ../Agent.php');
}else{
    echo mysqli_error($dbh);
}