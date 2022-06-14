<!DOCTYPE html>
<html>

<?php
include "includes/head.php";
$id = $_GET['id'];
$query = "SELECT * FROM policia WHERE id = $id ";
$result = mysqli_query($dbh, $query);
$policia = mysqli_fetch_assoc($result);
?>
<body>
<?php
include "includes/header.php";
?>


    <section>
        <h1>Editar</h1>
    </section>
        <div> 
            <form action="scripts/update_user.php" method="POST">
                <input type="hidden" name="id" value="<?=$policia['id']?>">
                <fromfield>
                <div>
                    <label>Nom</label>  
                    <input name="nom" type="text" id="nom" placeholder="nom" required="required" value="<?=$policia['nom']?>">
                </div>
                <div>
                    <label for="cp">Código Postal</label>
                    <input name="cp" type="text" id="cp" placeholder="código postal" maxlength="6" required="required" value="<?=$policia['cp']?>">
                </div>
                <div>
                    <label>fecha</label>
                    <input name="fecha" type="date" id="fecha" naixament required="required" value="<?=$policia['fecha']?>">
                </div>
                <div>
                    <label for="pais">País</label>
                    <select pais="pais" name="pais" id="pais" required="required" value="<?=$policia['pais']?>"> 
                        <option value="ES">España</option>
                        <option value="FR">Francia</option>
                        <option value="IT">Italia</option>
                    </select>
                </div>
                <div> 
                    <button type="submit">Enviar</button>
                </div>
            </formfield>
            </form>
            
<?php
include "includes/footer.php";
?>
</body>
</html>
