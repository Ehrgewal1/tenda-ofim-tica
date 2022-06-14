<?php
include '../includes/database.php';

<<<<<<< Updated upstream
$pais = $_POST['pais'];
$cp = $_POST['cp'];
$nom = $_POST['nom'];
$fecha = $_POST['fecha'];
$id = $_POST['id'];

$query = "DELETE FROM policia WHERE id = '$id'";
=======
error_reporting(E_ALL ^ E_NOTICE);

$pais = $_POST['pais'];
$cp = $_POST['cp'];
$nom = $_POST['nom'];
$id = $_POST['id'];

$query = "DELETE FROM policia WHERE id = '$id'";

>>>>>>> Stashed changes
$result = mysqli_query($dbh, $query);

if($result){
    header('Location: ../index.php');
}else{
    echo mysqli_error($dbh);
}