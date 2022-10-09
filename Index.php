<?php
// *********************************/
// *                               */
// *  >>> MASTERS DEVELOPERS<<<    */ 
// *                               */
// *********************************/

// Metodo donde llevara a la demás páginas

require('controller/Controler.php');

$control = new controlador;

if (isset($_GET['ops'])){

    $opcion=$_GET['ops'];
  
    if ($opcion=="crear")
    {
    //Llamo al método ver pasándole la clave que me están pidiendo
    $control->Registrar();
    }elseif($opcion="Prueba"){

            $control->Prueba3();


    }else{
        $control->index();

    }

}
else{

    //Llamo al método por defecto del controlador
    $control->index();
}
