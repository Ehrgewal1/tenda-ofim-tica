<!DOCTYPE html>
<html>

<?php
include "includes/head.php";

?>

<body class="text-center">

<?php
include "includes/header.php";
?>
<div class="background-image">
    <section>
        <h1>Insertar nou client</h1>
    </section>
        <div> 
            <form action="scripts/insert_user.php"; method="POST">
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
                    <button type="submit" >Enviar</button>
                </div>
            </formfield>
            </form>
<?php
include "includes/footer.php";
?>
</body>
<style>
    *{
        margin: 0;
        padding: 0;
    }
    .background-image {
        background-image: url("https://upload.wikimedia.org/wikipedia/commons/thumb/a/a5/Logotipo_del_Cuerpo_Nacional_de_Polic%C3%ADa_de_Espa%C3%B1a.svg/1200px-Logotipo_del_Cuerpo_Nacional_de_Polic%C3%ADa_de_Espa%C3%B1a.svg.png");
        background-size: cover;
        background-repeat: no-repeat;
        height: 100vh;
    }
</style>
</html>