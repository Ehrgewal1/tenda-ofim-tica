<?php
include '../includes/database.php';

$id = $_POST['id'];
$pais = $_POST['pais'];
$cp = $_POST['cp'];
$nom = $_POST['nom'];


$query = "INSERT INTO policia (id, nom, cp, pais) VALUES('$id', '$nom', '$cp', '$pais')";

$result = mysqli_query($dbh, $query);

if($result){
    header('Location: ../index.php');
}else{
    echo mysqli_error($dbh);
}