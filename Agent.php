<!DOCTYPE html>
<html> 
    <?php include 'includes/head.php';?>
    <?php include 'includes/header.php';?>
</html>
<body>
    <div class="background-image">
    <div class="text-center">
        <h1><span>Agents</span></h1>
        <p><span>Tabla de Agents</span></p>
        <a href="pagina4.php">
            <input type="button" value="Insertar Agent" style="border-bottom-style:solid;margin-bottom: 15px;">
        </a>
    </div>
<div class="row justify-content-center">
    <div class="col-auto">
        <table class="table table-responsive">
            <tr>
                <td>ID</td>
                <td>NOM</td>
                <td>LLINATGE</td>
                <td>FECHA</td>
                <td>OPCIONS</td>
            </tr>
    </thead>
<tbody>
    <?php
    $query = "SELECT * FROM Agent";
    $result = mysqli_query($dbh, $query) or die (mysqli_error($dbh));
    while ($row = mysqli_fetch_assoc($result)) {
        echo "<tr>
                <td>".$row['id_Agent']."</td>
                <td>".$row['Nom']."</td>
                <td>".$row['Llinatge']."</td>
                <td>".$row['Fecha']."</td>
                <td>
                    <a class='btn btn-primary' href='pagina5.php?id_Agent=" .$row['id_Agent']."'><i class='bi-pen'></i></a>
                    <a class='btn btn-danger' href='pagina6.php?id_Agent=" .$row['id_Agent']."'><i class='bi-trash'></i></a>
                </td>
            </tr>";
    }
    ?>
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
</tbody>
        </table>
<?php include 'includes/footer.php';?>
</body>