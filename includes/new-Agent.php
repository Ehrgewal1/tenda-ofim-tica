<!DOCTYPE html>
<html>

<?php include 'includes/head.php'; ?>

<?php
$Agent = null;
if(isset($_GET['id_Agent'])){
    $id = $_GET['id_Agent'];
    $query = "SELECT * FROM Agent WHERE id_Agent = '$id' ";
    $result = mysqli_query($dbh, $query) or die(mysqli_error($dbh));
    $Agent = mysqli_fetch_assoc($result);
}

$action = 'scripts/insert_Agent.php';
if($Agent != null){
    $action = 'scripts/update_Agent.php';
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
                if($Agent == null){
                    echo 'NOU AGENT';
                }else{
                    echo 'EDITA EL AGENT';
                }
                ?>
            </h1>

        </section>

        <section>

            <form action="<?=$action?>" method="POST">
                <div class="form-group">
                    <label>Nom</label>
                    <input value="<?=$Agent['Nom'];?>" type="text" name="Nom" class="form-control" placeholder="Nom" required>
                </div>
                <div class="form-group">
                    <label>Llinatge</label>
                    <input value="<?=$Agent['Llinatge'];?>" type="text" name="Llinatge" class="form-control"  placeholder="Nom" required>
                </div>
                <div class="form-group">
                    <label>Fecha</label>
                    <input value="<?=$Agent['Fecha'];?>" type="data" name="Fecha" class="form-control"  placeholder="Fecha"  required>
                </div>

                <?php 
                if($Agent){
                    echo "<input type='hidden' value='".$Agent['id_Agent']."' name='id_Agent'>";

                }
                ?>
                <button type="submit" class="btn btn-primary">Enviar</button>
            </form>


        </section>

    </div>
</body>

</html>

