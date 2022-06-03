<!DOCTYPE html>
<html>
<?php include 'includes/head.php';?>
    <body>
        <?php include 'includes/header.html';?>
        <h2 class="mt-3">Formulari d'ingrés</h2>
        <form>
            <div class="mt-3" class="mb-3">
                <label for="Nom" class="form-label">Nom</label>
                <input type="text" id="Nom" class="form-control">
                
            </div>
            <div class="mt-3" class="mb-3">
                <label for="Llinatge" class="form-label">Llinatge</label>
                <input type="text" id="Llinatge" class="form-control">
            </div>    
            <div class="mt-3" class="mb-3">
                <label for="Adreca" class="form-label">Adreça</label>
                <input type="text" id="Adreca" class="form-control">
            </div>
            <div class="mt-3" class="mb-3">
                <label for="CP" class="form-label">CP</label>
                <input type="text" id="CP" class="form-control">
            </div>
            <div class="mt-3" class="mb-3">
                <label for="Id" class="form-label">Id</label>
                <input type="password" id="Id" class="form-control">
            </div>    
            <button type="button" class="btn btn-primary">
            <i class="bi-check"></i>
            </button>
        </form>
    </body>
    <?php include 'includes/footer.php';?>
</html>