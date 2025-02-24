
const formulario = document.getElementById('formulario');
const inputs = document.querySelectorAll('#formulario input');

const expresiones = {
	Nombre: /^[a-zA-ZÀ-ÿ\s]{1,40}$/, // Letras y espacios, pueden llevar acentos.
	Contrasena: /^.{4,12}$/, // 4 a 12 digitos.
	Confirmar_contrasena: /^.{4,12}$/, // 4 a 12 digitos.
	Correo: /^[a-zA-Z0-9_.+-]+@[a-zA-Z0-9-]+\.[a-zA-Z0-9-.]+$/,
	Celular: /^\d{7,14}$/ // 7 a 14 numeros.
}

  const campos = {
	Nombre: false,
	Contrasena: false,
	Correo: false,
	Celular: false,
}  

const validarFormulario = (e) => {
     switch (e.target.name) {

		
	 	case "Nombre":
			validarCampo(expresiones.Nombre, e.target, 'Nombre');
		break;

		case "Celular":
			validarCampo(expresiones.Celular, e.target, 'Celular');
		break;

		case "Correo":
			validarCampo(expresiones.Correo, e.target, 'Correo');
		break;

		case "Contrasena":
			validarCampo(expresiones.Contrasena, e.target, 'Contrasena');
			validarPassword2();
		break;

		case "Confirmar_contrasena":
			validarPassword2();
		break;


	}  
} 
/* Base para no póner el codigo mas complicado */
  const validarCampo = (expresion, input, campo) => {
	if(expresion.test(input.value)){
		document.getElementById(`grupo__${campo}`).classList.remove('formulario__grupo-incorrecto');
		document.getElementById(`grupo__${campo}`).classList.add('formulario__grupo-correcto');
		document.querySelector(`#grupo__${campo} i`).classList.add('fa-check');
		document.querySelector(`#grupo__${campo} i`).classList.remove('fa-circle-xmark');
		document.querySelector(`#grupo__${campo} .formulario__input-error`).classList.remove('formulario__input-error-activo');
		campos[campo] = true;
	} else {
		document.getElementById(`grupo__${campo}`).classList.add('formulario__grupo-incorrecto');
		document.getElementById(`grupo__${campo}`).classList.remove('formulario__grupo-correcto');
		document.querySelector(`#grupo__${campo} i`).classList.add('fa-circle-xmark');
		document.querySelector(`#grupo__${campo} i`).classList.remove('fa-check');
		document.querySelector(`#grupo__${campo} .formulario__input-error`).classList.add('formulario__input-error-activo');
		campos[campo] = false;
	}
} 
/* validar Contrasena */
  const validarPassword2 = () => {
	const inputPassword1 = document.getElementById('Contrasena');
	const inputPassword2 = document.getElementById('Confirmar_contrasena');

	if(inputPassword1.value !== inputPassword2.value){
		document.getElementById(`grupo__Confirmar_contrasena`).classList.add('formulario__grupo-incorrecto');
		document.getElementById(`grupo__Confirmar_contrasena`).classList.remove('formulario__grupo-correcto');
		document.querySelector(`#grupo__Confirmar_contrasena i`).classList.add('fa-circle-xmark');
		document.querySelector(`#grupo__Confirmar_contrasena i`).classList.remove('fa-check');
		document.querySelector(`#grupo__Confirmar_contrasena .formulario__input-error`).classList.add('formulario__input-error-activo');
		campos['Contrasena'] = false;
	} else {
		document.getElementById(`grupo__Confirmar_contrasena`).classList.remove('formulario__grupo-incorrecto');
		document.getElementById(`grupo__Confirmar_contrasena`).classList.add('formulario__grupo-correcto');
		document.querySelector(`#grupo__Confirmar_contrasena i`).classList.remove('fa-circle-xmark');
		document.querySelector(`#grupo__Confirmar_contrasena i`).classList.add('fa-check');
		document.querySelector(`#grupo__Confirmar_contrasena .formulario__input-error`).classList.remove('formulario__input-error-activo');
		campos['Contrasena'] = true;
	}
}  

 inputs.forEach((input) => {
	input.addEventListener('keyup', validarFormulario);
	input.addEventListener('blur', validarFormulario);
});
 
 formulario.addEventListener('submit', (e) => {
	e.preventDefault();

 	 const terminos = document.getElementById('terminos');
	if(campos.Nombre && campos.Contrasena && campos.Correo && campos.Celular && terminos.checked ){
		formulario.reset();

		document.getElementById('formulario__mensaje-exito').classList.add('formulario__mensaje-exito-activo');
		setTimeout(() => {
			document.getElementById('formulario__mensaje-exito').classList.remove('formulario__mensaje-exito-activo');
		}, 5000);

		document.querySelectorAll('.formulario__grupo-correcto').forEach((icono) => {
			icono.classList.remove('formulario__grupo-correcto');
		});
	} else {
		document.getElementById('formulario__mensaje').classList.add('formulario__mensaje-activo');
	}  
}); 

