<!DOCTYPE html>
<html>
    <link rel="stylesheet" href="styles.css">
    <?php include 'includes/head.php';?>
    <?php include 'includes/header.php';?>
    <body>
    <table>
        <tbody> 
            <?php
            $query = "SELECT * FROM Agent";
            $result = mysqli_query($dbh, $query);
            while ($row = mysqli_fetch_assoc($result)) {
                echo $row['idAgent'];
                echo $row['firstname'];
                echo $row['lastname'];
                echo $row['birthday'];
            }
            ?>
        </tbody>
    </table>
        <?php include 'includes/footer.php';?>
    </body>
</html>