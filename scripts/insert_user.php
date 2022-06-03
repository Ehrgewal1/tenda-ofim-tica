<?php
include '../includes/database.php';

$pais = $_POST['pais'];
$cp = $_POST['cp'];
$nom = $_POST['nom_usuari'];
$id = $_POST['id'];

$query = "INSERT INTO policia (nom_usuari, cp, pais, id) VALUES('$nom', '$cp', '$pais', '$id')";

$result = mysqli_query($dbh, $query);

if($result){
    header('Location: ../index.php');
}else{
    echo mysqli_error($dbh);
}