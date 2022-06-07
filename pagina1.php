<!DOCTYPE html>
<html>

<?php
include "includes/head.php";
?>

<body>

<?php
include "includes/header.php";
?>
    <section>
        <h1>Insertar nou client</h1>
    </section>
        <div> 
            <form>
                <div>
                    <label>Nom</label>  
                    <input type="text" id="nom" placeholder="nom" required="required">
                </div>
                <div>
                    <label for="codigopostal">Código Postal</label>
                    <input type="text" id="codigopostal" placeholder="código postal" maxlength="6" required="required">
                </div>
                <div>
                    <label>Data</label>
                    <input type="date" id="data" naixament required="required">
                </div>
                <div>
                    <label for="pais">País</label>
                    <select name="pais" id="pais" required="required"> 
                        <option value="ES">España</option>
                        <option value="FR">Francia</option>
                        <option value="IT">Italia</option>
                    </select>
                </div>
                <input type="button" value="Enviar" href="scripts/insert_user.php"> 
            </form>
        </div>
<?php
include "includes/footer.php";
?>
</body>

</html>