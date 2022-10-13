<?php

class controlador{


    public function Index(){

        require("view/PaginaInicio.php");
    }


    public function Registrar(){

            require("view/vistaRIns2.php");

    }

    public function Administracion(){

        require("view/registropersonal.php");

    }   


}