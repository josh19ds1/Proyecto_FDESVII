<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php include("view/header.php")?>
    <h1> Congreso universitario 2024 </h1> 
    <form method="POST" action="?OPS=MAPA" class="formulario">
        <a href="?ops=Registrar" class="Boton">REGISTRARSE</a>
        <a href="?ops=Administrar" class="Boton2">ADMINISTRACION</a>
        <a href="?ops=Cronograma" class="Boton3">CRONOGRAMA</a>
        <a href="view/vista.php" class="Boton3">Inscripción</a>
        <input type="submit" class="Boton4" valus="MAPA">
    </form>
    <?php include("view/footer.php")?>

</body>
</html>
<?php

//Incluyo los archivos necesarios
require("./controller/controller.php");

//Instancio el controlador
$controller = new Controller;

//Decido la ruta en función de los elementos del array
if (isset($_GET['op'])){

    $opcion=$_GET['op'];

    if ($opcion=="RIns")
    {
    //Llamo al método ver pasándole la clave que me están pidiendo
    $controller->RR();
    }
    elseif ($opcion=="RPago")
    {
    $controller->PP();
    }
}
else{

    //Llamo al método por defecto del controlador
    $controller->index();
}