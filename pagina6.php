<!DOCTYPE html>
<html>
<?php
include "includes/head.php";
$id = $_GET['id_Agent'];
$query = "SELECT * FROM Agent WHERE id_Agent = $id ";
$result = mysqli_query($dbh, $query);
$Agent = mysqli_fetch_assoc($result);
?>
<body>
<?php
include "includes/header.php";
?>
    <section>
        <h1>Eliminar Agent</h1>
    </section>
        <div> 
            <form action="scripts/delete_Agent.php" method="POST">
                <input type="hidden" name="id_Agent" value="<?=$Agent['id_Agent']?>">
                <fromfield>
                <div>
                    <label>Nom</label>  
                    <input name="Nom" type="text" id="Nom" placeholder="Nom" required="required" value="<?=$Agent['Nom']?>">
                </div>
                <div>
                    <label>Llinatge</label>
                    <input name="Llinatge " type="text" id="Llinatge" placeholder="Llinatge" required="required" value="<?=$Agent['Llinatge']?>">
                </div>
                <div>
                    <label>Fecha</label>
                    <input name="Fecha" type="date" id="Fecha" naixament required="required" value="<?=$Agent['Fecha']?>">
                </div>
                
                <div> 
                    <button type="submit" >Enviar</button>
                </div>
            </formfield>
            </form>
        </div>
<?php
include "includes/footer.php";
?>
</body>
</html>