<!DOCTYPE html>
<html>
    <link rel="stylesheet" href="styles.css">
    <?php include 'includes/head.php';?>
    <?php include 'includes/header.php';?>
    <body>
    <table>
        <tbody> 
            <?php
            $query = "SELECT * FROM Equipament";
            $result = mysqli_query($dbh, $query);
            while ($row = mysqli_fetch_assoc($result)) {
                echo $row['idEquipament'];
                echo $row['nom'];
                echo $row['tipus'];
                echo $row['quantitat'];
            }
            ?>
        </tbody>
    </table>
        <?php include 'includes/footer.php';?>
    </body>
</html>