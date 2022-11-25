<?php
session_start();// Comienzo de la sesión
//Librería para enviar email
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require 'public/phpmailer/src/Exception.php';
require 'public/phpmailer/src/PHPMailer.php';
require 'public/phpmailer/src/SMTP.php';

require_once 'config/config.php';
require_once 'model/usuario.php';

class controlador{
    private $model;
    private $model4;
    private $model5;
    private $model6;
    private $model7;
    private $model8;
    private $resp;
    
    public function __CONSTRUCT(){
        $this->model = new Usuario();
        $this->model4 = new Usuario();
        $this->model5 = new Usuario();
        $this->model6 = new Usuario();
        $this->model7 = new Usuario();
        $this->model8 = new Usuario();
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
        $listaUsuario = new Usuario();
        $listaUsuario = $this->model7->ObtenerUsuario();

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
    public function IngresarPanel(){

        $listaUsuario = new Usuario();
        $listaUsuario = $this->model4->ObtenerTodosLosUsuarios();

        require("view/panel/dashboard.php");

    }

    /*public function IngresarPerfil(){

        $usuario = new Usuario();
        $usuario = $this->model->Obtener($_SESSION['id']);

        require("view/panel/profile.php");
    }*/

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
        header('Location: ?ops=RPago&msg='.$this->resp);
        //header('Location: ?ops=RPago');
        //header('Location: ?&msg=Su Registro es incompleto');
        //header('Location: ?&msg='.$this->resp);
      
      
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
            header('Location: ?ops=permitido');

        }
        else
        {
            header('Location: ?&msg=Su contraseña o usuario está incorrecto');
        }
    }

    public function CambiarPass(){
        
        
        $consultarEmail = new Usuario();
        if ($consultarEmail = $this->model5->ConsultarEmail($_REQUEST['email']))
        { 
            $restablecer = new Usuario();
            echo $restablecer->restablecer = md5(rand(1,1000));
            echo $restablecer->email = $_REQUEST['email'];
            $this->resp= $this->model6->IncluirHash($restablecer);
            //Enviar email
            $mail = new PHPMailer(true);
            $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      //Enable verbose debug output
            $mail->isSMTP();                                            //Send using SMTP
            $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
            $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
            $mail->Username   = constant('CORREO_REMITENTE');                     //SMTP username
            $mail->Password   = constant('CORREO_PASS');                               //SMTP password
            $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
            $mail->Port       = 465;

            //Recipients
            $mail->setFrom(constant('CORREO_REMITENTE'), 'DS 7 CongresoUTP2024');
            $mail->addAddress($restablecer->email);
            //$_REQUEST['err']=$restablecer->email;
            //plantilla HTML

            $mensajeHTML='
                <p align="center"> 
                <img src="https://stickerly.pstatic.net/sticker_pack/NmQSNhRamKkvnkS2ND3Y9Q/15EBA7/5/ffa32e8d-422d-487f-bc6c-462979099369.png" width="100px" height="100px" >
                </p>
                <p align="center">Correo para Confirmacion de Inscripcion del CongresoUTP2024</p>
                <p align="center"><b>Acceda al siguiente enlace QR para acceder a nuestra App de orientacion para el congreso: </b></p>
                <p align="center">CHUPALA JUSTIN!!
                <a href="http://localhost/login12/?ops=index">IR</a><br />
                </p>';


            //Content
            $mail->isHTML(true);                                  //Set email format to HTML
            $mail->Subject = 'DS7-Inscripcion al CogresoUTP2024';
            $mail->Body    = $mensajeHTML;
            $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

            $mail->send();
            echo '<meta http-equiv="refresh" content="0;url=?ops=pagoexito&msg=Se ha enviado un correo electrónico para restablecer la contraseña&t=text-success">';
            //header('Location:?ops=pagoexito&msg=Se ha enviado un correo electrónico para acceder a la app movil&t=text-success');
        }
        else{
            header('Location:?ops=pagoexito&msg=El Email no está registrado, deberá crear una cuenta&t=text-danger');
        }
    }





}
