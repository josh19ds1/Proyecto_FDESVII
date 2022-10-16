<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Pagina Principal</title>
    <link rel="stylesheet" href="public/css/inicio.css">

</head>

<body >
        <?php include("view/sechedyfoot/encabezado.php")?>
        

             <h1>CONGRESO UNIVERSITARIO 2024</h1>
             <form  method="POST" action="?ops=Mapa" class="formulario">
            
                 <a href="?ops=crear"   class="Boton">REGISTRARSE</a>
                 <a href="?ops=Admin" class="Boton2">ADMINISTRACION</a>
                 <a href="?ops=Cronograma"  class="Boton3">CRONOGRAMA</a>
                    <input type="submit" class="Boton4" value="MAPA">

             </form>
           
    
        <?php include("view/sechedyfoot/footer.php") ?>

</body>
</html>