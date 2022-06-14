<?php
include '../includes/database.php';

$id = $_POST['id_Agent'];
$nom = $_POST['Nom'];
$llinatge = $_POST['Llinatge'];
$fecha = $_POST['Fecha'];

$query = "UPDATE Agent SET Nom = '$nom', Llinatge = '$llinatge', Fecha = '$fecha' WHERE id_Agent = '$id' ";
$result = mysqli_query($dbh, $query);

if($result){
    header('Location: ../Agent.php');
}else{
    echo mysqli_error($dbh);
}