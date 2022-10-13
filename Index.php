<?php
// *********************************/
// *                               */
// *  >>> MASTERS DEVELOPERS<<<    */ 
// *                               */
// *********************************/

// Metodo donde llevara a la demás páginas

require('controller/controles.php');

$control = new controlador;

if (isset($_GET['ops'])){

    $opcion=$_GET['ops'];
  
    if ($opcion=="crear"){
    //Llamo al método ver pasándole la clave que me están pidiendo
            $control->Registrar();

    }elseif($opcion=="Admin"){

          $control->Administracion();

    }elseif($opcion="Prueba"){

        

    }else{
             $control->index();

    }

}
else{

    //Llamo al método por defecto del controlador
    $control->index();
}
