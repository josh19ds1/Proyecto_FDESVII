<?php

class controlador{


    public function Index(){

        require("view/PaginaInicio.php");
    }


    public function Registrar(){

            require("view/vistaRIns2.php");

    }

    public  function cronograma(){

        require("view/cronograma.php");
    }



    public function Administracion(){

        require("view/registropersonal.php");

    }   

    public function mapa(){

        require("view/mapa.php");
    }
    public function PagoExitoso(){

        require("view/confirmarPago.php");
    }

    public function RegPago(){

        require("view/vistaRPago.php");
    }





}
