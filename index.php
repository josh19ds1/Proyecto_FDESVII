<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="public/css/confirmarregistro/confirmarregistro.css">



</head>
<body >

<?php include("view/encabezado.php")?>
<div class="hero" style="background-image: url('public/images/1.jpg');">
    <div align="center" class="txtc">
 <form class="revision">        
        <h1> Nombre : Diego </h1>
        <h1> Apellido : Moreles </h1>
        <h1> Cedula : 8-123-5124 </h1>
        <h1> Pais : Panama </h1>
        <h1> Provincia : Panama </h1>
        <h1> Correo : diegomrales@outlook.com </h1>
        <h1> telefono : 224-3128 </h1>
        <button class="btn btn-lg btn-primary btn-block" type="submit" onClick="ComprobarClave()" value="Aceptar" >Confirmar</button>
        <button class="btn btn-lg btn-primary btn-block" type="submit" onClick="ComprobarClave()" value="Aceptar" >Editar Informacion</button>
    </div>
 </form>  
</div>
    <?php include("view/footer.php")?>
</body>
</html>