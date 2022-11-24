<?php
@session_start();// Comienzo de la sesión

if ($_SESSION["acceso"] != true)
{
    header('Location: ?ops=error');
}

echo "Bienvenido/a: ". $_SESSION["user"];


?>