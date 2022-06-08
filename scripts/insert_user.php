<?php
include '../includes/database.php';

$pais = $_POST['pais'];
$cp = $_POST['cp'];
$fecha = $_POST['fecha'];
$nom = $_POST['nom'];
$id = $_POST['id'];

$query = "INSERT INTO policia (nom, fecha, cp, pais, id) VALUES('$nom', '$fecha' '$cp', '$pais', '$id')";
$result = mysqli_query($dbh, $query);

echo $query;

if($result){
    header('Location: ../index.php');
}else{
    echo mysqli_error($dbh);
}