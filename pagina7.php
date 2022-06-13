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
        <h1>Insertar Equipament</h1>
    </section>
        <div> 
            <form action="scripts/insert_Equipament.php" method="POST">
                <input type="hidden" name="id_Equipament" value="<?=$Agent['id_Equipament']?>">
                <fromfield>
                <div>
                    <label>Nom</label>  
                    <input name="Nom" type="text" id="Nom" placeholder="Nom" required="required" value="<?=$Eqipament['Nom']?>">
                </div>
                <div>
                    <label>Llinatge</label>
                    <input name="Llinatge " type="text" id="Llinatge" placeholder="Llinatge" required="required" value="<?=$Eqipament['Llinatge']?>">
                </div>
                <div>
                    <label>Fecha</label>
                    <input name="Fecha" type="date" id="Fecha" naixament required="required" value="<?=$Eqipament['Fecha']?>">
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