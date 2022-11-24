<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.101.0">
    <title>Login</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.2/examples/sign-in/">


<link href="public/css/bootstrap.min.css" rel="stylesheet">



    
    <!-- Custom styles for this template -->
    <link href="public/css/signin.css" rel="stylesheet">
  </head>
  <body class="text-center">
    
<main class="form-signin w-100 m-auto">
  <form method="POST" action="./?op=verificaremail" >
    <img class="mb-4" src="public/images/utp.svg" alt="" width="125" height="125">
    <h1 class="h3 mb-3 fw-normal">Restablecer Contraseña</h1>

    <p class="<?php if (isset ($_GET['msg'])) echo $_GET['t'];?>"> <?php if (isset ($_GET['msg'])) echo $_GET['msg'];?> </p> 

    <div class="form-floating">
      <input type="email" class="form-control" id="floatingInput" name="correo" placeholder="name@example.com" required>
      <label for="floatingInput">Email address</label>
    </div>


</br>
    <button class="w-100 btn btn-lg btn-primary" type="submit">Restablecer Contraseña</button>

    <div class="mt-4">
    <div class="d-flex justify-content-center links">
      ¿Ya tiene cuenta? - <a href="./" class="ml-2">Acceder al Sistema</a>
    </div>

    <p class="mt-5 mb-3 text-muted">&copy; 2017–2022</p>
  </form>
</main>


    
  </body>
</html>
