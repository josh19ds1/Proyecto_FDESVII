<?php
// *********************************/
// *                               */
// *  >>> MASTERS DEVELOPERS<<<    */ 
// *                               */
// *********************************/

// Metodo donde llevara a la demás páginas

require("controller/Controler.php");

$controlador = new Controler;
//Decido la ruta en función de los elementos del array
if (isset($_GET['op'])){

    $opcion=$_GET['op'];

    if ($opcion=="crear")
    {
    //Llamo al método ver pasándole la clave que me están pidiendo
    $controlador->crearUsuario();
    }
}
else{

    //Llamo al método por defecto del controlador
    $controlador->Index();
}





