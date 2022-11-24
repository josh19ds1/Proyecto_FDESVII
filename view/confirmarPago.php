
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
<?php include("view/sechedyfoot/encabezado.php")?>
<div class="hero" style="background-image: url('public/images/1.jpg');">
    <div align="center" class="txtc">
 <form class="revision" action="./?ops=email">        
        <div class="row">
                    <div class="col-md-12 col-lg-12 col-sm-12">
                        <div class="white-box">
                            <div class="d-md-flex mb-3">
                                <h3 class="box-title mb-0">Usuarios Registrados</h3>
                            </div>
                            <div class="table-responsive">
                                <table class="table no-wrap">
                                    <thead>
                                        <tr>
                                            <th class="border-top-0">#</th>
                                            <th class="border-top-0">Nombre</th>
                                            <th class="border-top-0">Apellido</th>
                                            <th class="border-top-0">Email</th>
                                            <th class="border-top-0">Titulo</th>
                                            <th class="border-top-0">Cedula</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php
                                    $n=1;
                                    foreach ($listaUsuario as $lista) {
                                    ?>
                                        <tr>
                                            <td><?php echo $n; ?></td>
                                            <td class="txt-oflo"><?php echo $lista->nombre; ?></td>
                                            <td class="txt-oflo"><?php echo $lista->apellidoP; ?></td>
                                            <td class="txt-oflo"><?php echo $lista->email; ?></td>
                                            <td class="txt-oflo"><?php echo $lista->ocupacion; ?></td>
                                            <td class="txt-oflo"><?php echo $lista->cedula; ?></td>
                                            <td><span class="text-success"><?php ?></span></td>
                                        </tr>
                                    <?php
                                        $n++;
                                    }
                                    ?> 
                                    </tbody>
                                </table>
                                <input type="text" class="form-control" id="correo" name="correo" placeholder="Inserte el correo para confirmar">
                            </div>
                        </div>
                    </div>
                </div>
        <button class="btn btn-lg btn-primary btn-block" type="submit" >Confirmar</button>
        <button class="btn btn-lg btn-primary btn-block" type="button" >Editar Informacion</button>
    </div>
 </form>  
</div>
        <?php include("view/sechedyfoot/footer.php") ?>
</body>
</html>