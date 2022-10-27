<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menu de presentacion del administrador</title>
     <link rel="stylesheet" href="public/css/Administracion.css">
</head>
<body>

<?php include("view/sechedyfoot/encabezado.php")?>

<div class="botsec">
     <a href="./Index.php?ops=Qr" class="botonA">LECTURA QR</a>
    <a href="./Index.php?ops=ListUser"  class="botonB">REGISTRO DE USUARIO</a>
    <a href="./Index.php?ops=editCro"  class="botonC">CRONOGRAMA DEL CONGRESO</a>

</div>
  
<img src="public/src/shibi.png"  class="imgShibi">
<img src="public/src/utp.svg" class="logUtp">    
</body>
</html>