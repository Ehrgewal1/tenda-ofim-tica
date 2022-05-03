<!DOCTYPE html>
<html> 
    <link rel="stylesheet" href="css/style.css">
    <?php include 'includes/head.php';?>
    <body> 
    <?php include 'includes/header.php';?>
</html>
        <h1>Welcome</h1>
        <p>tabla de clients</p>
<selection>
</selection>
<table>
    <thead>
        <tr>
            <td>ID</td>
            <td>NOM</td>
            <td>PAIS</td>
            <td>CP</td>
        </tr>
    </thead>
<tbody>
    <?php
    $query = "SELECT * FROM policia";
    $result = mysqli_query($dbh, $query) or die(mysqli_error($dbh));
    while ($row = mysqli_fetch_assoc($result)) {
        echo "<tr>
            <td>".$row['id']."</td>
            <td>".$row['nom']."</td>
            <td>".$row['pais']."</td>
            <td>".$row['cp']."</td>
    </tr>";
    }
    ?>
</tbody>
</table>
<?php include 'includes/footer.php';?>
    </body>
