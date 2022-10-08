<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors Edited by Maez H. Aguilar V.">
    <meta name="generator" content="Maez 0.111.0">
<title>Registro de Inscripción</title>

<link rel="canonical" href="https://getbootstrap.com/docs/5.2/examples/sign-in/">
<link href="public/css/bootstrap.min.css" rel="stylesheet">
<link href="public/css/signin.css" rel="stylesheet">
<script>
  function calcular(){

select = document.getElementById("menu");
option = select.options[select.selectedIndex];
document.getElementById('Rank').value = option.text;
//document.getElementById('total').value = option.value;
//document.getElementById('subtotal').value = option.text;
caja = document.forms["registro"].elements;
subtotal = Number(caja["subtotal"].value);

if (option.text == "Estudiante") {
  dcto = 15 / 100;
} else if (option.text == "Investigador") {
  dcto = 20 / 100;
} else if (option.text == "Autor") {
  dcto = 10 / 100;
} else if (option.text == "Docente") {
  dcto = 15 / 100;
} else {
  dcto = 0;
}
caja["descuento"].value = dcto;
//Aqui el detalle, el numero ingresado en 'descuento', se debe dividir entre 100 para convertirlo a un valor porcentual.
//dcto=Number(caja["descuento"].value)/100;
//Despues simplemente multiplicas el dcto por el subtotal y lo asignas al total
total = subtotal - (subtotal * dcto);
caja["total"].value = total;
}
function ComprobarClave(){
    p1 = document.registro.passwrd.value;
    p2 = document.registro.repasswrd.value;

    if(p1 != p2){
      alert("Ambas claves deben ser iguales.");
      return false;
    }
  }
  </script>
</head>
<body class="text-center">
<main class="form-signin w-100 m-auto">
<form id="registro" name="registro" class="form-signin" method="POST" action="" onSubmit="return ComprobarClave()">
<img class="mb-4" src="public/images/utp.svg" alt="" width="125" height="125">
    <h1 class="h3 mb-3 fw-normal">Precio USD</h1>
    <div class="form-floating">
  SubTotal <input type="text"  class="form-control item" name="subtotal" id="subtotal" onChange="calcular()"/><br>
  Descuento <input type="text"  class="form-control item" name="descuento" id="descuento" onChange="calcular()"/><br>
  Total <input type="text"  class="form-control item" name="total" id="total" onChange="calcular()"/><br>
  </div>
  <h1 class="h3 mb-3 font-weight-normal">Crear Usuario</h1>
        

        <div class="form-group">
        <input type="text" class="form-control item" id="Rank" placeholder="Rango" name="Rank" required>
        </div>
        <br>
        <div class="form-group">
        <input type="text" class="form-control item" id="ced" placeholder="Cedulación" name="ced" required>
        </div>
        <br>
        <div class="form-group">
        <input type="text" class="form-control item" id="DIEEE" placeholder="Miembro IEEE" name="DIEEE" required>
        </div>
        <br>
        <div class="form-group">
        <input type="text" class="form-control item" id="CIEEE" placeholder="Miembro IEEE, Introduzca el codigo" name="CIEEE" required>
        </div>
        <br>
        <div class="form-group">
        <input type="text" class="form-control item" id="Telf" placeholder="Telefono" name="Telf" required>
        </div>
        <br>
        <div class="form-group">
        <input type="text" class="form-control item" id="Sexo" placeholder="Sexo" name="Sexo" required>
        </div>
        <br>
        <div class="form-group">
        <input type="text" class="form-control item" id="Pais" placeholder="Paises" name="Pais" required>
        </div>
        <br>
        <div class="form-group">
        <input type="text" class="form-control item" id="Ciudad" placeholder="Ciudad" name="Ciudad" required>
        </div>
        <br>
        <div class="form-group">
        <input type="text" class="form-control item" id="IEU" placeholder="Institución/Entidad/Universidad" name="IEU" required>
        </div>
        <br>
        <div class="form-group">
        <input type="text" class="form-control item" id="UDF" placeholder="Unidad/Departamento/Facultad" name="UDF" required>
        </div>
        <br>
        <div class="form-group">
        <input type="text" class="form-control item" id="nombre" placeholder="Nombre" name="nombre" required>
        </div>
        <br>
        <div class="form-group">
        <input type="text" class="form-control item" id="apellido" placeholder="Apellido" name="apellido" required>
        </div> 
        <br>
        <div class="form-group">
        <input type="text" class="form-control item" id="email" placeholder="Email" name="email" required autofocus>
        </div>
        <br>
        <div class="form-group">
        <input type="password" class="form-control item" id="passwrd"  placeholder="Password" name="passwrd" required>
        </div>
        <br>
        <div class="form-group">
        <input type="password" class="form-control item" id="repasswrd" placeholder="Password Nuevamente" name="repasswrd" required>
        </div> 
        <br>
        <select  class="form-control item" name="menu" id="menu" onChange="calcular()">
        <option value="0" >Estudiante</option>
        <option value="1" >Investigador</option>
        <option value="2" >Autor</option>
        <option value="3" >Docente</option>
        </select>
        <br>
        <input type="checkbox" class="" id="cena" name="cb1" value="cena">
        <label for="cb1"> Asistir a la cena  + $10.00</label><br>
        <input type="checkbox" class="" id="CAcomp" name="cb2" value="CAcomp">
        <label for="cb1"> Asistir a la cena con Acompañante + $50.00</label><br>

        <h1 class="cbx">Areas de Interes</h1>
        <input type="checkbox" class="" id="cena" name="cb3" value="cena">
        <label for="cb1"> Asistir a la cena</label><br>
        <input type="checkbox" class="" id="cena" name="cb4" value="cena">
        <label for="cb1"> Asistir a la cena</label><br>
        <!-- utilizar el laboratorio 1 para esta parte-->

<button class="btn btn-lg btn-primary btn-block" type="submit" onClick="ComprobarClave()" value="Aceptar" >Crear Cuenta</button>
</form>
</main>
</body>
</html> 

