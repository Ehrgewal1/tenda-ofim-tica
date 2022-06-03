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
            <form>
                <div>
                    <label>Nom</label>  
                    <input type="text" id="nom" placeholder="nom" required="required" value="<?=$policia['nom']?>">
                </div>
                <div>
                    <label for="codigopostal">Código Postal</label>
                    <input type="text" id="codigopostal" placeholder="código postal" maxlength="6" required="required" value="<?=$policia['cp']?>">
                </div>
                <div>
                    <label>Data</label>
                    <input type="date" id="data" naixament required="required" value="<?=$policia['data']?>">
                </div>
                <div>
                    <label for="pais">País</label>
                    <select name="pais" id="pais" required="required" value="<?=$policia['pais']?>"> 
                        <option value="ES">España</option>
                        <option value="FR">Francia</option>
                        <option value="IT">Italia</option>
                    </select>
                </div>
                <input type="button" value="Enviar"> 
            </form>
        </div>
<?php
include "includes/footer.php";
?>
</body>
</html>