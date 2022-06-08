<?php
include '../includes/database.php';

$pais = $_POST['pais'];
$cp = $_POST['cp'];
$nom = $_POST['nom'];
$id = $_POST['id'];

$query = "INSERT INTO clients (nom, pais, cp) VALUES('$nom', '$pais', '$cp')";

$result = mysqli_query($dbh, $query);

if($result){
    header('Location: ../index.php');
}else{
    echo mysqli_error($dbh);
}