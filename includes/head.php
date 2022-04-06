<head>
    <meta charset="utf-8">
    <title>pagina text </title>
    <meta content="width=device-width, initial-scale=1.0, maximu-scale=1.0, user-scalable=no" name="viewport" />
    <meta content="" name="descripcion" />
    <meta content="" name="author" />
    <link href="css/style.css" rel="stylesheet"/>
</head>
<?php
$dbh=mysqli_connect user:("localhost","","");
if(!$dbh){
    echo "Error db_connect: error en mysqli_connect_user:(mal usuario/password?)<br>";
    die;
}
if (!mysqli_select_db($dbh,"text")){
    echo "Error db_connect:error en mysqli_select_db:_BBDD_NAME<br>";
    die;
}