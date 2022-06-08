<!DOCTYPE html>
<html>

<?php include 'includes/head.php'; ?>

<?php
$client = null;
if(isset($_GET['id'])){
    $id = $_GET['id'];
    $query = "SELECT * FROM policia WHERE id = '$id' ";
    $result = mysqli_query($dbh, $query) or die(mysqli_error($dbh));
    $client = mysqli_fetch_assoc($result);
}

$action = 'scripts/insert_user.php';
if($client != null){
    $action = 'scripts/update_user.php';
}
?>

<body>

    <div class="container">

        <section class="mb-5 mt-5">
            <?php
            include 'includes/header.html';
            ?>
            <h1 class="mb-5 mt-5">
                <?php
                if($client == null){
                    echo 'NOU CLIENT';
                }else{
                    echo 'EDITA EL CLIENT';
                }
                ?>
            </h1>

        </section>

        <section>

            <form action="<?=$action?>" method="POST">
                <div class="form-group">
                    <label for="es">Pais</label>
                    <input value="<?=$client['pais'];?>" type="text" name="pais" class="form-control" aria-describedby="pais" placeholder="pais" required>
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Nom</label>
                    <input value="<?=$client['nom'];?>" type="text" name="nom" class="form-control"  placeholder="Nom" required>
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Fecha</label>
                    <input value="<?=$client['fecha'];?>" type="data" name="fecha" class="form-control"  placeholder="Fecha"  required>
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">CP</label>
                    <input type="text" value="<?=$client['cp'];?>" name="CP" class="form-control"  placeholder="CP"  required>
                </div>
                <?php 
                if($client){
                    echo "<input type='hidden' value='".$client['id']."' name='id'>";

                }
                ?>
                <button type="submit" class="btn btn-primary">Enviar</button>
            </form>


        </section>

    </div>
</body>

</html>

