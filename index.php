<?php
// *********************************/
// *                               */
// *  >>> MASTERS DEVELOPERS<<<    */ 
// *                               */
// *********************************/

require_once 'model/db.php';

// Metodo donde llevara a la demás páginas

require('controler/Controler.php');

$control = new controlador;

if (isset($_GET['ops'])){

    $opcion=$_GET['ops'];
  
    if ($opcion=="crear"){
    

            $control -> Registrar();


    }elseif($opcion=="RPago"){

            $control -> RegPago();

        }
        elseif ($opcion=="registrar"){
    
        //Llamo al método ver pasándole la clave que me están pidiendo
    
        $control->Guardar();
        }
        elseif($opcion=="Admin")
        {

          $control->Administracion();

    }elseif($opcion=="Cronograma"){

            $control->cronograma();


    }elseif($opcion=="ListUser"){

            $control->ListaUsuario();

    }elseif($opcion=="Qr"){

            $control->ScanQR();

    }elseif($opcion=="editCro"){

            $control->EditCronograma();

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
