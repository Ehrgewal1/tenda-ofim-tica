<?php
include '../includes/database.php';

error_reporting(E_ALL ^ E_NOTICE);

$pais = $_POST['pais'];
$cp = $_POST['cp'];
$nom = $_POST['nom'];
$fecha = $_POST['fecha'];
$id = $_POST['id'];

$query = "UPDATE policia SET nom = '$nom', cp = '$cp', pais = '$pais' WHERE id = '$id' ";
$result = mysqli_query($dbh, $query);

if($result){
    header('Location: ../index.php');
}else{
    echo mysqli_error($dbh);
}