<?php
class Controller
{

    public function index(){

        //Le paso los datos a la vista
        require("view/login.php");

    }

    public function cronograma(){

        require("view/paginaprincipal.php");

    }
    
    public function mapa(){

        require("view/mapa.php");

    }
}