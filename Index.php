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
  
    if ($opcion=="crear"){
    //Llamo al método ver pasándole la clave que me están pidiendo
            $control->Registrar();

    }elseif($opcion=="Admin"){

          $control->Administracion();

<<<<<<< HEAD
    }elseif($opcion="Cronograma"){

            $control->Prueba3();

    }elseif($opcion="Mapa"){

        $control->Prueba3();

=======
    }elseif($opcion="Prueba"){

            $control->Prueba3();

>>>>>>> 52c3ffa5197b2574f8808387a38cce5c3d35a999
    }else{
             $control->index();

    }

}
else{

    //Llamo al método por defecto del controlador
    $control->index();
}
