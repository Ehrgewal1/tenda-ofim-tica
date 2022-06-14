<?php
include '../includes/database.php';

$pais = $_POST['pais'];
$cp = $_POST['cp'];
<<<<<<< Updated upstream
$fecha = $_POST['fecha'];
$nom = $_POST['nom'];
$id = $_POST['id'];

$query = "INSERT INTO policia (nom, fecha, cp, pais) VALUES ('$nom', '$fecha', '$cp', '$pais');";
=======
$nom = $_POST['nom'];
$id = $_POST['id'];

$query = "INSERT INTO clients (nom, pais, cp) VALUES('$nom', '$pais', '$cp')";

>>>>>>> Stashed changes
$result = mysqli_query($dbh, $query);

if($result){
    header('Location: ../index.php');
}else{
    echo mysqli_error($dbh);
}