<?php
require_once 'model/usuario.php';
class controlador{
    private $model;
    private $model4;
    private $resp;
    
    public function __CONSTRUCT(){
        $this->model = new Usuario();
        $this->model4 = new Usuario();
    }

    public function index(){

        require("view/PaginaInicio.php");
    }


    public function Registrar(){

            require("view/vistaRIns2.php");

    }

    public  function cronograma(){

        require("view/cronograma.php");
    }



    public function Administracion(){

        require("view/MuAdmin.php");

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

    public function ListaUsuario(){

        require("view/registropersonal.php");
    }
    public function ScanQR(){

        require("view/lectQR.php");
    }

    public function EditCronograma(){

        require("view/editCrongrama.php");
    }
    public function Guardar(){
        $usuario = new Usuario();
        
        $usuario->nombre = $_REQUEST['nombre'];
        $usuario->apellido = $_REQUEST['apellido'];
        $usuario->email = $_REQUEST['email']; 
        $usuario->pais = $_REQUEST['Pais'];
        $usuario->provincia = $_REQUEST['prov'];
        $usuario->distrito= $_REQUEST['dist'];
        $usuario->apellidoM = $_REQUEST['apellidoM'];
        $usuario->ocupacion = $_REQUEST['ocupacion'];
        $usuario->cedula = $_REQUEST['cedula']; 
        $usuario->IEEE = $_REQUEST['IEEE'];
        $usuario->sexo = $_REQUEST['sexo'];
        $usuario->articulo= $_REQUEST['articulo'];
        $usuario->IEU = $_REQUEST['IEU'];
        $usuario->UDF= $_REQUEST['UDF'];
        $usuario->costo = $_REQUEST['costo']; 
        $usuario->telefono = $_REQUEST['telefono'];
        $usuario->ciudad = $_REQUEST['ciudad'];
      
        $this->resp= $this->model->Registrar($usuario);

        header('Location: ?ops=crear&msg='.$this->resp);
    }
    public function IngresarPerfil(){

        $usuario = new Usuario();
        $usuario = $this->model->Obtener($_SESSION['id']);

        require("view/panel/profile.php");
    }
    
    public function Ingresar(){
        $ingresarUsuario = new Usuario();
        
        $ingresarUsuario->email = $_REQUEST['correo'];  
        $ingresarUsuario->pass = md5($_REQUEST['password']);    

        //Verificamos si existe en la base de datos
        if ($resultado= $this->model->Consultar($ingresarUsuario))
        {
            $_SESSION["acceso"] = true;
            $_SESSION["id"] = $resultado->id;
            $_SESSION["user"] = $resultado->nombre." ".$resultado->apellido;
            header('Location: ?op=permitido');

        }
        else
        {
            header('Location: ?&msg=Su contraseña o usuario está incorrecto');
        }
    }

    public function ActualizarDatos(){
        
        $usuario = new Usuario();
        $usuario->nombre = $_REQUEST['nombre'];
        $usuario->apellido = $_REQUEST['apellido'];
        $usuario->id=$_SESSION["id"];
        
        $this->resp= $this->model->Actualizar($usuario);

        header('Location: ?op=perfil&msg='.$this->resp);
    }





}
