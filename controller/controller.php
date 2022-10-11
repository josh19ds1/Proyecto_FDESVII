<?php
class Controller
{

    public function index(){

        //Le paso los datos a la vista
        require("view/login.php");

    }

    public function crearUsuario(){

        require("view/crearUsuario.php");

    }
    
    public function PP(){

        require("view/vistaRPago.php");

    }
    public function RR(){

        require("view/vista.php");

    }

}