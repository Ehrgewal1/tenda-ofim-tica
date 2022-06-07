<?php
include '../includes/database.php';

<<<<<<< Updated upstream
=======
error_reporting(E_ALL ^ E_NOTICE);

>>>>>>> Stashed changes
$pais = $_POST['pais'];
$cp = $_POST['cp'];
$nom = $_POST['nom'];
$id = $_POST['id'];

<<<<<<< Updated upstream
$query = "UPDATE policia SET nom = '$nom', cp = '$cp', pais = '$pais' WHERE id = '$id' ";
=======
$query = "UPDATE policia SET nom = '$nom', pais = '$pais', cp = '$cp' WHERE id = '$id'";
>>>>>>> Stashed changes

$result = mysqli_query($dbh, $query);

if($result){
    header('Location: ../index.php');
}else{
    echo mysqli_error($dbh);
}