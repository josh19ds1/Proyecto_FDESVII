<?php
// *********************************/
// *                               */
// *  >>> MASTERS DEVELOPERS<<<    */ 
// *                               */
// *********************************/

// Metodo donde llevara a la demás páginas

require('controller/Controler.php');

$control = new controlador;

if (isset($_GET['op'])){

    $opcion=$_GET['op'];

    if ($opcion=="crear")
    {
    //Llamo al método ver pasándole la clave que me están pidiendo
    $control->crearUsuario();
    }
}
else{

    //Llamo al método por defecto del controlador
    $control->index();
}
