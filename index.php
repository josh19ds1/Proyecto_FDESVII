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