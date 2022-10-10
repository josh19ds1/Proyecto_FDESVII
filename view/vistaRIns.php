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
<link rel="stylesheet" href="//cdn.tutorialjinni.com/twitter-bootstrap/3.3.7/css/bootstrap.min.css">
<link rel="stylesheet" href="//cdn.tutorialjinni.com/bootstrap-select/1.12.4/css/bootstrap-select.min.css">
<link rel="stylesheet" href="//g.tutorialjinni.com/mojoaxel/bootstrap-select-country/dist/css/bootstrap-select-country.min.css" />
<script>
  function calcular(){
select2 = document.getElementById("Pais");
option2 = select2.options[select2.selectedIndex];
select = document.getElementById("menu");
option = select.options[select.selectedIndex];
document.getElementById('Rank').value = option.text;
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
} else if(option.text == "Estudiante" && option2.value == "EX"){
  dcto = 0;
} else if(option.text == "Investigador" && option2.value == "EX"){
  dcto = 0;
}else if(option.text == "Autor" && option2.value == "EX"){
  dcto = 0;
}else if(option.text == "Docente" && option2.value == "EX"){
  dcto = 0;
}else if(option.text == "Docente" && option2.value == "PA"){
  dcto = 15/100;
}else if(option.text == "Autor" && option2.value == "PA"){
  dcto = 10 / 100;
}else if(option.text == "Investigador" && option2.value == "PA"){
  dcto = 20 / 100;
}else if(option.text == "Estudiante" && option2.value == "PA"){
  dcto = 15 / 100;
}else {
  dcto = 0;
}
caja["descuento"].value = dcto;
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
  function hish(){

sh = document.getElementById("DIEEE");
opt = sh.options[sh.selectedIndex];
if (opt.text == "Yes/Si") {
  document.getElementById('CIE').style.visibility = "visible";
}else{
  document.getElementById('CIE').style.visibility = "hidden";
}
}
  
  </script>
</head>
<body class="text-center" onload="hish()">
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
          <label for="DIEEE" >Es miembro del IEEEexplorer?</label>
        <select value="" class="form-control item" name="DIEEE" id="DIEEE" onChange="hish()">
        <option value="" selected disabled hidden>Choose here</option>
        <option value="0" >No</option>
        <option value="1" >Yes/Si</option>
        </select>
        <div class="form-group" id="CIE" style="visibility:hidden;">
        <br>
        <input type="text" class="form-control item" id="CIEEE" placeholder="Miembro IEEE, Introduzca el codigo" name="CIEEE" required>
        <br>
        </div>
        <div class="form-group">
        <input type="text" class="form-control item" id="Telf" placeholder="Telefono" name="Telf" required>
        </div>
        <br>
        <div class="form-group">
        <input type="text" class="form-control item" id="Sexo" placeholder="Sexo" name="Sexo" required>
        </div>
        <br>
        <div class="form-group">
        <select class="selectpicker countrypicker" data-flag="true" id="Pais" name="Pais" required>
    <option value="  " selected>Select el País</option>
    <option value="EX">Extranjero</option>
    <option value="AF">Afghanistan</option>
    <option value="AL">Albania</option>
    <option value="DZ">Algeria</option>
    <option value="AS">American Samoa</option>
    <option value="AD">Andorra</option>
    <option value="AO">Angola</option>
    <option value="AI">Anguilla</option>
    <option value="AQ">Antarctica</option>
    <option value="AG">Antigua and Barbuda</option>
    <option value="AR">Argentina</option>
    <option value="AM">Armenia</option>
    <option value="AW">Aruba</option>
    <option value="AU">Australia</option>
    <option value="AT">Austria</option>
    <option value="AZ">Azerbaijan</option>
    <option value="BS">Bahamas</option>
    <option value="BH">Bahrain</option>
    <option value="BD">Bangladesh</option>
    <option value="BB">Barbados</option>
    <option value="BY">Belarus</option>
    <option value="BE">Belgium</option>
    <option value="BZ">Belize</option>
    <option value="BJ">Benin</option>
    <option value="BM">Bermuda</option>
    <option value="BT">Bhutan</option>
    <option value="BO">Bolivia</option>
    <option value="BA">Bosnia and Herzegowina</option>
    <option value="BW">Botswana</option>
    <option value="BV">Bouvet Island</option>
    <option value="BR">Brazil</option>
    <option value="IO">British Indian Ocean Territory</option>
    <option value="BN">Brunei Darussalam</option>
    <option value="BG">Bulgaria</option>
    <option value="BF">Burkina Faso</option>
    <option value="BI">Burundi</option>
    <option value="KH">Cambodia</option>
    <option value="CM">Cameroon</option>
    <option value="CA">Canada</option>
    <option value="CV">Cape Verde</option>
    <option value="KY">Cayman Islands</option>
    <option value="CF">Central African Republic</option>
    <option value="TD">Chad</option>
    <option value="CL">Chile</option>
    <option value="CN">China</option>
    <option value="CX">Christmas Island</option>
    <option value="CC">Cocos (Keeling) Islands</option>
    <option value="CO">Colombia</option>
    <option value="KM">Comoros</option>
    <option value="CG">Congo</option>
    <option value="CD">Congo, the Democratic Republic of the</option>
    <option value="CK">Cook Islands</option>
    <option value="CR">Costa Rica</option>
    <option value="CI">Cote d'Ivoire</option>
    <option value="HR">Croatia (Hrvatska)</option>
    <option value="CU">Cuba</option>
    <option value="CY">Cyprus</option>
    <option value="CZ">Czech Republic</option>
    <option value="DK">Denmark</option>
    <option value="DJ">Djibouti</option>
    <option value="DM">Dominica</option>
    <option value="DO">Dominican Republic</option>
    <option value="TP">East Timor</option>
    <option value="EC">Ecuador</option>
    <option value="EG">Egypt</option>
    <option value="SV">El Salvador</option>
    <option value="GQ">Equatorial Guinea</option>
    <option value="ER">Eritrea</option>
    <option value="EE">Estonia</option>
    <option value="ET">Ethiopia</option>
    <option value="FK">Falkland Islands (Malvinas)</option>
    <option value="FO">Faroe Islands</option>
    <option value="FJ">Fiji</option>
    <option value="FI">Finland</option>
    <option value="FR">France</option>
    <option value="FX">France, Metropolitan</option>
    <option value="GF">French Guiana</option>
    <option value="PF">French Polynesia</option>
    <option value="TF">French Southern Territories</option>
    <option value="GA">Gabon</option>
    <option value="GM">Gambia</option>
    <option value="GE">Georgia</option>
    <option value="DE">Germany</option>
    <option value="GH">Ghana</option>
    <option value="GI">Gibraltar</option>
    <option value="GR">Greece</option>
    <option value="GL">Greenland</option>
    <option value="GD">Grenada</option>
    <option value="GP">Guadeloupe</option>
    <option value="GU">Guam</option>
    <option value="GT">Guatemala</option>
    <option value="GN">Guinea</option>
    <option value="GW">Guinea-Bissau</option>
    <option value="GY">Guyana</option>
    <option value="HT">Haiti</option>
    <option value="HM">Heard and Mc Donald Islands</option>
    <option value="VA">Holy See (Vatican City State)</option>
    <option value="HN">Honduras</option>
    <option value="HK">Hong Kong</option>
    <option value="HU">Hungary</option>
    <option value="IS">Iceland</option>
    <option value="IN">India</option>
    <option value="ID">Indonesia</option>
    <option value="IR">Iran (Islamic Republic of)</option>
    <option value="IQ">Iraq</option>
    <option value="IE">Ireland</option>
    <option value="IL">Israel</option>
    <option value="IT">Italy</option>
    <option value="JM">Jamaica</option>
    <option value="JP">Japan</option>
    <option value="JO">Jordan</option>
    <option value="KZ">Kazakhstan</option>
    <option value="KE">Kenya</option>
    <option value="KI">Kiribati</option>
    <option value="KP">Korea, Democratic People's Republic of</option>
    <option value="KR">Korea, Republic of</option>
    <option value="KW">Kuwait</option>
    <option value="KG">Kyrgyzstan</option>
    <option value="LA">Lao People's Democratic Republic</option>
    <option value="LV">Latvia</option>
    <option value="LB">Lebanon</option>
    <option value="LS">Lesotho</option>
    <option value="LR">Liberia</option>
    <option value="LY">Libyan Arab Jamahiriya</option>
    <option value="LI">Liechtenstein</option>
    <option value="LT">Lithuania</option>
    <option value="LU">Luxembourg</option>
    <option value="MO">Macau</option>
    <option value="MK">Macedonia, The Former Yugoslav Republic of</option>
    <option value="MG">Madagascar</option>
    <option value="MW">Malawi</option>
    <option value="MY">Malaysia</option>
    <option value="MV">Maldives</option>
    <option value="ML">Mali</option>
    <option value="MT">Malta</option>
    <option value="MH">Marshall Islands</option>
    <option value="MQ">Martinique</option>
    <option value="MR">Mauritania</option>
    <option value="MU">Mauritius</option>
    <option value="YT">Mayotte</option>
    <option value="MX">Mexico</option>
    <option value="FM">Micronesia, Federated States of</option>
    <option value="MD">Moldova, Republic of</option>
    <option value="MC">Monaco</option>
    <option value="MN">Mongolia</option>
    <option value="MS">Montserrat</option>
    <option value="MA">Morocco</option>
    <option value="MZ">Mozambique</option>
    <option value="MM">Myanmar</option>
    <option value="NA">Namibia</option>
    <option value="NR">Nauru</option>
    <option value="NP">Nepal</option>
    <option value="NL">Netherlands</option>
    <option value="AN">Netherlands Antilles</option>
    <option value="NC">New Caledonia</option>
    <option value="NZ">New Zealand</option>
    <option value="NI">Nicaragua</option>
    <option value="NE">Niger</option>
    <option value="NG">Nigeria</option>
    <option value="NU">Niue</option>
    <option value="NF">Norfolk Island</option>
    <option value="MP">Northern Mariana Islands</option>
    <option value="NO">Norway</option>
    <option value="OM">Oman</option>
    <option value="PK">Pakistan</option>
    <option value="PW">Palau</option>
    <option value="PA">Panama</option>
    <option value="PG">Papua New Guinea</option>
    <option value="PY">Paraguay</option>
    <option value="PE">Peru</option>
    <option value="PH">Philippines</option>
    <option value="PN">Pitcairn</option>
    <option value="PL">Poland</option>
    <option value="PT">Portugal</option>
    <option value="PR">Puerto Rico</option>
    <option value="QA">Qatar</option>
    <option value="RE">Reunion</option>
    <option value="RO">Romania</option>
    <option value="RU">Russian Federation</option>
    <option value="RW">Rwanda</option>
    <option value="KN">Saint Kitts and Nevis</option> 
    <option value="LC">Saint LUCIA</option>
    <option value="VC">Saint Vincent and the Grenadines</option>
    <option value="WS">Samoa</option>
    <option value="SM">San Marino</option>
    <option value="ST">Sao Tome and Principe</option> 
    <option value="SA">Saudi Arabia</option>
    <option value="SN">Senegal</option>
    <option value="SC">Seychelles</option>
    <option value="SL">Sierra Leone</option>
    <option value="SG">Singapore</option>
    <option value="SK">Slovakia (Slovak Republic)</option>
    <option value="SI">Slovenia</option>
    <option value="SB">Solomon Islands</option>
    <option value="SO">Somalia</option>
    <option value="ZA">South Africa</option>
    <option value="GS">South Georgia and the South Sandwich Islands</option>
    <option value="ES">Spain</option>
    <option value="LK">Sri Lanka</option>
    <option value="SH">St. Helena</option>
    <option value="PM">St. Pierre and Miquelon</option>
    <option value="SD">Sudan</option>
    <option value="SR">Suriname</option>
    <option value="SJ">Svalbard and Jan Mayen Islands</option>
    <option value="SZ">Swaziland</option>
    <option value="SE">Sweden</option>
    <option value="CH">Switzerland</option>
    <option value="SY">Syrian Arab Republic</option>
    <option value="TW">Taiwan, Province of China</option>
    <option value="TJ">Tajikistan</option>
    <option value="TZ">Tanzania, United Republic of</option>
    <option value="TH">Thailand</option>
    <option value="TG">Togo</option>
    <option value="TK">Tokelau</option>
    <option value="TO">Tonga</option>
    <option value="TT">Trinidad and Tobago</option>
    <option value="TN">Tunisia</option>
    <option value="TR">Turkey</option>
    <option value="TM">Turkmenistan</option>
    <option value="TC">Turks and Caicos Islands</option>
    <option value="TV">Tuvalu</option>
    <option value="UG">Uganda</option>
    <option value="UA">Ukraine</option>
    <option value="AE">United Arab Emirates</option>
    <option value="GB">United Kingdom</option>
    <option value="US">United States</option>
    <option value="UM">United States Minor Outlying Islands</option>
    <option value="UY">Uruguay</option>
    <option value="UZ">Uzbekistan</option>
    <option value="VU">Vanuatu</option>
    <option value="VE">Venezuela</option>
    <option value="VN">Viet Nam</option>
    <option value="VG">Virgin Islands (British)</option>
    <option value="VI">Virgin Islands (U.S.)</option>
    <option value="WF">Wallis and Futuna Islands</option>
    <option value="EH">Western Sahara</option>
    <option value="YE">Yemen</option>
    <option value="YU">Yugoslavia</option>
    <option value="ZM">Zambia</option>
    <option value="ZW">Zimbabwe</option>
</select>
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
<script src="//cdn.tutorialjinni.com/jquery/3.6.1/jquery.min.js"></script>
<script src="//cdn.tutorialjinni.com/twitter-bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script src="//cdn.tutorialjinni.com/bootstrap-select/1.12.4/js/bootstrap-select.min.js"></script>
<script src="//g.tutorialjinni.com/mojoaxel/bootstrap-select-country/dist/js/bootstrap-select-country.min.js"></script>
<script src="../Scripts/complementos.js"></script><!-- no esta funcionandome el llamado-->
</body>
</html> 
