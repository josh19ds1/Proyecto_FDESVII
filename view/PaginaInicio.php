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
             <div class="sec">
                <img src="public/src/presentadore.jpg" class="imagen1"> 
                            <div class="novedades">
                                    <h2>COLABORADORES</h2>
                                    <img src="public/src/logo1.png" class="imagen2">
                                    <img src="public/src/logo2.png" class="imagen2">
                                    <h2>Presentador</h2>
                                    <img src="public/src/presentador.jpg" class="imagen2">
                                    <h3>todo sobre su presentador</h3>
                            </div>  
                <form  method="POST" action="?ops=crear" class="formulario">

                
                    <input type="submit" class="Boton" value="¡ Registrarse ahora !">

                </form>
             </div>

             <?php include("view/sechedyfoot/footer.php") ?>
          
           
    


</body>
</html>