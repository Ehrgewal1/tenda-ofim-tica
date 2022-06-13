<!DOCTYPE html>
<html>

<?php
include "includes/head.php";
$id = $_GET['id_Equipament'];
$query = "SELECT * FROM Equipament WHERE id_Equipament = $id ";
$result = mysqli_query($dbh, $query);
$Equipament = mysqli_fetch_assoc($result);
?>
<body>
<?php
include "includes/header.php";
?>


    <section>
        <h1>Editar Equipament</h1>
    </section>
        <div> 
        <form action="scripts/update_Equipament.php" method="POST">
                <input type="hidden" name="id_Equipament" value="<?=$Equipament['id_Equipament']?>">
                <fromfield>
                <div>
                    <label>Nom</label>  
                    <input name="Nom" type="text" id="Nom" placeholder="Nom" required="required" value="<?=$Equipament['Nom']?>">
                </div>
                <div>
                    <label>Llinatge</label>
                    <input name="Llinatge " type="text" id="Llinatge" placeholder="Llinatge" required="required" value="<?=$Equipament['Llinatge']?>">
                </div>
                <div>
                    <label>Fecha</label>
                    <input name="Fecha" type="date" id="Fecha" naixament required="required" value="<?=$Equipament['Fecha']?>">
                </div>
                
                <div> 
                    <button type="submit" >Enviar</button>
                </div>
            </formfield>
            </form>
            
<?php
include "includes/footer.php";
?>
</body>
</html>
