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
<table border="1">
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
    $result = mysqli_query($dbh, $query) or die (mysqli_error($dbh));
    while ($row = mysqli_fetch_assoc($result)) {
        echo "<tr>
                <td>".$row['id']."</td>
                <td>".$row['nom']."</td>
                <td>".$row['pais']."</td>
                <td>".$row['cp']."</td>
                <td><a class='btn btn-primary' href='scripts/insert-client.php?id=".$row['id']."'><i class="bi-pencil"></i>
                <td><a class='btn btn-danger' href='scripts/delete_client.php?id=".$row['id']."'><i class="bi-trash"></i>
                </tr>";
    }
    ?>
</tbody>
</table>
<?php include 'includes/footer.php';?>
    </body>
