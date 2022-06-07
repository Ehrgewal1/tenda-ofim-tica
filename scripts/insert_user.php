<?php
include '../includes/database.php';

$pais = $_POST['pais'];
$cp = $_POST['cp'];
<<<<<<< Updated upstream
$nom = $_POST['nom_usuari'];
$id = $_POST['id'];

$query = "INSERT INTO policia (nom_usuari, cp, pais, id) VALUES('$nom', '$cp', '$pais', '$id')";
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