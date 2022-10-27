<?php
// *********************************/
// *                               */
// *  >>> MASTERS DEVELOPERS<<<    */ 
// *                               */
// *********************************/

// Metodo donde llevara a la demás páginas

require('controler/Controler.php');

$control = new controlador;

if (isset($_GET['ops'])){

    $opcion=$_GET['ops'];
  
    if ($opcion=="crear"){
    

            $control -> Registrar();


    }elseif($opcion=="RPago"){

            $control -> RegPago();

    }elseif($opcion=="Admin"){

          $control->Administracion();

    }elseif($opcion=="Cronograma"){

            $control->cronograma();


    }elseif($opcion=="ListUser"){

            $control->ListaUsuario();

    }elseif($opcion=="pagoexito"){

        $control-> PagoExitoso();
    
    
    }elseif($opcion=="Mapa"){

            $control->mapa();

    }else{
             $control->index();

    }

}
else{

    //Llamo al método por defecto del controlador
    $control->index();
}
