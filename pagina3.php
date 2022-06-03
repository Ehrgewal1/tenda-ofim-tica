<!DOCTYPE html>
<html> 
    <link rel="stylesheet" href="css/style.css">
    <?php include 'includes/head.php';?>
    <body> 
    <?php include 'includes/header.php';?>
</html>
        <h1>Welcome</h1>
        <p>tabla de clients</p>
        <a href="pagina1.php">
            <input type="button" value="Insertar Client" style="border-bottom-style:solid;margin-bottom: 15px;">
        </a>
<selection>
</selection>
<table>
    <thead>
        <tr>
            <td>ID</td>
            <td>NOM</td>
            <td>PAÍS</td>
            <td>CP</td>
            <td>Opcions</td>
         </tr>
    </thead>
<tbody>
    <?php
    $query = "SELECT * FROM policia";
    $result = mysqli_query($dbh, $query) or die (mysqli_error($dbh));
    while ($row = mysqli_fetch_assoc($result)) {
        echo "<tr>
                <td>".$row['id']."</td>
                <td>".$row['nom']."</td>
                <td>".$row['pais']."</td>
                <td>".$row['cp']."</td>
            </tr>"
        }
        <div>
        <?php
            include "includes/header.php";
            ?>
            <h1>Pagina 3</h1>
        </div>
    </div>
<?php
include "includes/footer.php";
?>
</body>
</html>