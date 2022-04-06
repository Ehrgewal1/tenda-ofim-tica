<!DOCTYPE html>
<html>

<?php
include "pagina1/head.php";
?>
<body>
    <header>
        <a href="index.php">Index</a>
        <a href="pagina1.php">Pagina1</a>
        <a href="pagina2.php">Pagina2</a>
    </header>
    <section>
        <h1>Insertar nou client</h1>
    </section>
        <div> 
            <form>
                <label>DNI</label>    
                <input type=text required maxlength=12 minlength=6>
                <div>
                <label>data</label>
                <input type=date name=data naixament>       
                </div>
                <button type=submit >Enviar</button>
            </form>
        </div>
    <footer>
        <p>Peu de página</p>
    </footer>
</body>

</html>