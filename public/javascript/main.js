const tarjeta = document.querySelector('#tarjeta'),
	  btnAbrirFormulario = document.querySelector('#btn-abrir-formulario'),
	  formulario = document.querySelector('#formulario-tarjeta'),
	  numeroTarjeta = document.querySelector('#tarjeta .numero'),
	  nombreTarjeta = document.querySelector('#tarjeta .nombre'),
	  logoMarca = document.querySelector('#logo-marca'),
	  firma = document.querySelector('#tarjeta .firma p'),
	  mesExpiracion = document.querySelector('#tarjeta .mes'),
	  yearExpiracion = document.querySelector('#tarjeta .year');
	  ccv = document.querySelector('#tarjeta .ccv');

// * Volteamos la tarjeta para mostrar el frente.
const mostrarFrente = () => {
	if(tarjeta.classList.contains('active')){
		tarjeta.classList.remove('active');
	}
}

// * Rotacion de la tarjeta
tarjeta.addEventListener('click', () => {
	tarjeta.classList.toggle('active');
});

// * Boton de abrir formulario
btnAbrirFormulario.addEventListener('click', () => {
	btnAbrirFormulario.classList.toggle('active');
	formulario.classList.toggle('active');
});

// * Select del mes generado dinamicamente.
for(let i = 1; i <= 12; i++){
	let opcion = document.createElement('option');
	opcion.value = i;
	opcion.innerText = i;
	formulario.selectMes.appendChild(opcion);
}

// * Select del año generado dinamicamente.
const yearActual = new Date().getFullYear();
for(let i = yearActual; i <= yearActual + 8; i++){
	let opcion = document.createElement('option');
	opcion.value = i;
	opcion.innerText = i;
	formulario.selectYear.appendChild(opcion);
}

// * Input numero de tarjeta
formulario.inputNumero.addEventListener('keyup', (e) => {
	let valorInput = e.target.value;

	formulario.inputNumero.value = valorInput
	// Eliminamos espacios en blanco
	.replace(/\s/g, '')
	// Eliminar las letras
	.replace(/\D/g, '')
	// Ponemos espacio cada cuatro numeros
	.replace(/([0-9]{4})/g, '$1 ')
	// Elimina el ultimo espaciado
	.trim();

	numeroTarjeta.textContent = valorInput;

	if(valorInput == ''){
		numeroTarjeta.textContent = '#### #### #### ####';

		logoMarca.innerHTML = '';
	}

	if(valorInput[0] == 4){
		logoMarca.innerHTML = '';
		const imagen = document.createElement('img');
		imagen.src = 'img/logos/visa.png';
		logoMarca.appendChild(imagen);
	} else if(valorInput[0] == 5){
		logoMarca.innerHTML = '';
		const imagen = document.createElement('img');
		imagen.src = 'img/logos/mastercard.png';
		logoMarca.appendChild(imagen);
	}

	// Volteamos la tarjeta para que el usuario vea el frente.
	mostrarFrente();
});

// * Input nombre de tarjeta
formulario.inputNombre.addEventListener('keyup', (e) => {
	let valorInput = e.target.value;

	formulario.inputNombre.value = valorInput.replace(/[0-9]/g, '');
	nombreTarjeta.textContent = valorInput;
	firma.textContent = valorInput;

	if(valorInput == ''){
		nombreTarjeta.textContent = 'Jhon Doe';
	}

	mostrarFrente();
});

// * Select mes
formulario.selectMes.addEventListener('change', (e) => {
	mesExpiracion.textContent = e.target.value;
	mostrarFrente();
});

// * Select Año
formulario.selectYear.addEventListener('change', (e) => {
	yearExpiracion.textContent = e.target.value.slice(2);
	mostrarFrente();
});

// * CCV
formulario.inputCCV.addEventListener('keyup', () => {
	if(!tarjeta.classList.contains('active')){
		tarjeta.classList.toggle('active');
	}

	formulario.inputCCV.value = formulario.inputCCV.value
	// Eliminar los espacios
	.replace(/\s/g, '')
	// Eliminar las letras
	.replace(/\D/g, '');

	ccv.textContent = formulario.inputCCV.value;
});

function calcular(){
	
	select2 = document.getElementById("Pais");
	option2 = select2.options[select2.selectedIndex];
	select = document.getElementById("ocupacion");
	option = select.options[select.selectedIndex];
	caja = document.forms["registro"].elements;

	if(option.text == "Docente" && option2.value == "PA"){
	subtotal= 175;
	  dcto = 18/100;
	}else if(option.text == "Autor" && option2.value == "PA"){
	subtotal= 275;
	  dcto = 15 / 100;
	}else if(option.text == "Investigador" && option2.value == "PA"){
	  subtotal= 175;
	  dcto = 25 / 100;
	}else if(option.text == "Estudiante" && option2.value == "PA"){
	  subtotal= 125;
	  dcto = 18 / 100;
	}else if (option.text == "Estudiante") {
	  subtotal= 125;
	  dcto = 15 / 100;
	} else if (option.text == "Investigador") {
	subtotal= 175;
	  dcto = 20 / 100;
	} else if (option.text == "Autor") {
	subtotal= 275;
	  dcto = 10 / 100;
	} else if (option.text == "Docente") {
	subtotal= 175;
	  dcto = 15 / 100;
	}else {
	  dcto = 0;
	}
	caja["subtotal"].value = subtotal;
	caja["descuento"].value = dcto;
	total = subtotal - (subtotal * dcto);
	caja["costo"].value = total;
	}
	function ComprobarClave(){
		p1 = document.registro.passwrd.value;
		p2 = document.registro.repasswrd.value;
	
		if(p1 != p2){
		  alert("Ambas claves deben ser iguales.");
		  return false;
		}
	  }
	  function toggleHidden(selector){
		  element = document.querySelector(selector);
		  elemento = document.getElementById('DIEEE')
		  opt = elemento.options[elemento.selectedIndex];
		  if (opt.text == "Yes/Si") {
		  element.hidden = false;
		  }
		  else
		  {
			element.hidden = true;
		  }
		}
		function toggleHidden2(selector) {
		  element = document.querySelector(selector);
		  elemento = document.getElementById('CAAEEE')
		  opt = elemento.options[elemento.selectedIndex];
		  if (opt.text == "Yes/Si") {
		  element.hidden = false;
		  }
		  else
		  {
			element.hidden = true;
		  }
		}
		function toggleHidden3(selector) {
		  element = document.querySelector(selector);
		  elemento = document.getElementById('Pais')
		  opt = elemento.options[elemento.selectedIndex];
		  if (opt.value == "PA") {
		  element.hidden = false;
		  }
		  else
		  {
			element.hidden = true;
		  }
		}
		function toggleHidden4(selector) {
			element = document.querySelector(selector);
			elemento = document.getElementById('prov');
			opt = elemento.options[elemento.selectedIndex];
			valor=opt.value;
			if (!!valor) {
			element.hidden = false;
			removeOptions(document.getElementById('dist'));
			CDist(valor)
			} 
			else
			{
			  element.hidden = true;
			}
			
		  }
		  function toggleHidden5(){
			h1=document.getElementById('CIE');
			h2=document.getElementById('CAE');
			h3=document.getElementById('provin1');
			h4=document.getElementById('dist1');
	
			h1.hidden = true;
			h2.hidden = true;
			h3.hidden = true;
			h4.hidden = true;
		  }
		function CDist(distrito) {
	 const d1 = ["Almirante", "Bocas del Toro", "Changuinola", "Chiriquí Grande"];
	 const d2 = ["Aguadulce", "Antón", "La Pintada", "Natá", "Olá", "Penonomé"];
	 const d3 = ["Colón", "Chagres", "Donoso", "Portobelo", "Santa Isabel", "Omar Torrijos Herrera"];
	 const d4 = ["Alanje", "Barú", "Boquerón", "Boquete", "Bugaba","David", "Dolega", "Gualaca", "Remedios", "Renacimiento","San Félix", "San Lorenzo", "Tierras Altas", "Tolé"];
	 const d5 = ["Chepigana", "Pinogana", "Santa Fe"];
	 const d6 = ["Chitré", "Las Minas", "Los Pozos", "Ocú", "Parita", "Pesé", "Santa María"];
	 const d7 = ["Guararé", "Las Tablas", "Los Santos", "Macaracas", "Pedasí", "Pocrí", "Tonosí"];
	 const d8 = ["Balboa", "Chepo", "Chimán", "Panamá", "San Miguelito", "Taboga"];
	 const d9 = ["Atalaya", "Calobre", "Cañazas", "La Mesa", "Las Palmas", "Mariato", "Montijo", "Río de Jesús", "San Francisco", "Santa Fe", "Santiago", "Soná"];
	 const d10 = ["El Porvenir"];
	 const d11 = ["Cémaco", "Sambú"];
	 const d12 = ["Besikó", "Kankintú", "Kusapín", "Mironó", "Müna", "Nole Düima", "Ñürüm", "Jirondai","Santa Catalina o Calovébora"];
	 const d13 = ["Arraiján", "Capira", "Chame", "La Chorrera", "San Carlos"];
	 const d14 = ["No", "Funciono", "El", "if", "mario hugo"];
	 var long;
	 // Ordena el Array Alfabeticamente;)):
	 d1.sort();
	 d2.sort();
	 d3.sort();
	 d4.sort();
	 d5.sort();
	 d6.sort();
	 d7.sort();
	 d8.sort();
	 d9.sort();
	 d10.sort();
	 d11.sort();
	 d12.sort();
	 d13.sort();
	if (distrito == "Bocas del Toro"){
	  long=d1.length-1;
	  addOptions("dist", d1,long);
	}
	else if(distrito == "Coclé"){
	  long=d2.length-1;
	  addOptions("dist", d2,long);
	}else if(distrito == "Colón"){
	  long=d3.length-1;
	  addOptions("dist", d3,long);
	}else if(distrito == "Chiriquí"){
	  long=d4.length-1;
	  addOptions("dist", d4,long);
	}else if(distrito == "Darién"){
	  long=d5.length-1;
	  addOptions("dist", d5,long);
	}else if(distrito == "Herrera"){
	  long=d6.length-1;
	  addOptions("dist", d6,long);
	}else if(distrito == "Los Santos"){
	  long=d7.length-1;
	  addOptions("dist", d7,long);
	}else if(distrito == "Panamá"){
	  long=d8.length-1;
	  addOptions("dist", d8,long);
	}else if(distrito == "Veraguas"){
	  long=d9.length-1;
	  addOptions("dist", d9,long);
	}else if(distrito == "Guna Yala"){
	  long=d10.length-1;
	  addOptions("dist", d10,long);
	}else if(distrito == "Emberá-Wounaan"){
	  long=d11.length-1;
	  addOptions("dist", d11,long);
	}else if(distrito == "Ngäbe-Buglé"){
	  long=d12.length-1;
	  addOptions("dist", d12,long);
	}else if(distrito == "Panama Oeste"){
	  long=d13.length-1;
	  addOptions("dist", d13,long);
	}
	else
	{
	  long=d14.length-1;
	 addOptions("dist", d14,long);
	}
	 
	}
	
	// Rutina para agregar opciones a un <select>
	function addOptions(domElement, array,long) {
	 var select = document.getElementsByName(domElement)[0];
	 var i;
	 for (i = 0; i <= long; i++) {
	  var option = document.createElement("option");
	  option.text = array[i];
	  option.value = array[i];
	  select.add(option);
	 }
	}
	function removeOptions(selectElement) {
		var i, L = selectElement.options.length - 1;
		for(i = L; i >= 0; i--) {
		   selectElement.remove(i);
		}
	 }