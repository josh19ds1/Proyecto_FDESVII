<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menu de presentacion del administrador</title>
    <link href="public/css/bootstrap.min.css" rel="stylesheet">
    <link href="public/css/signin.css" rel="stylesheet">
    <link rel="canonical" href="https://getbootstrap.com/docs/5.2/examples/sign-in/">
</head>
<body>
<main class="form-signin w-100 m-auto">
  <form method="POST" action="./?ops=acceder" >
    <img class="mb-4" src="public/images/utp.svg" alt="" width="125" height="125">
    <h1 class="h3 mb-3 fw-normal">Acceder al sistema</h1>

    <p class="text-danger"> <?php if (isset ($_GET['msg'])) echo $_GET['msg'];?> </p> 

    <div class="form-floating">
      <input type="email" class="form-control" id="floatingInput" name="correo" placeholder="name@example.com" required>
      <label for="floatingInput">Email address</label>
    </div>
    <div class="form-floating">
      <input type="password" class="form-control" name="password" id="floatingPassword" placeholder="Password" required>
      <label for="floatingPassword">Password</label>
    </div>

    <div class="checkbox mb-3">
      <label>
        <input type="checkbox" value="remember-me"> Recordar Usuario 
      </label>
    </div>
    <button class="w-100 btn btn-lg btn-primary" type="submit">Entrar</button>
    <input class="w-100 btn btn-lg btn-primary" type="button" value="Atras" onclick="history.go()">
    <div class="mt-4">
    <div class="d-flex justify-content-center links">
    ¿Aún no tiene cuenta? - <a href="?op=crear" class="ml-2"> Regístrese aquí </a>
    </div>
    <div class="d-flex justify-content-center links">
      <a href="#">¿Olvido su contraseña? Por favor, Contacte con su Administrador</a>
    </div>
    <p class="mt-5 mb-3 text-muted">&copy; 2017–2022</p>
  </form>
</main>
   
</body>
</html>