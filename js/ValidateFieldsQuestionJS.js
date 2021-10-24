



var form = document.getElementById('fquestion');
form.addEventListener('submit',function(event)
{
document.getElementById("botonEnviar").onclick = verificar()

function verificar(){

if (email.value ===null|| email.value === '' )
{
	
alert("La dirección de correo no puede estar vacía");
event.preventDefault();

}
let r =/[A-Za-z ]*/
else if(!r.test(email.value)){	
event.preventDefault();
	alert("El email no es correcto");

}
else if (form.enunciado.value ==null || enunciado.value == '')
{
	event.preventDefault();
alert("Campos obligatorios vacíos1");


}

else if (form.correcta.value == null || enunciado.value == '')
{
	event.preventDefault();
alert("Campos obligatorios vacíos2");

}

else if (form.incorrecta1.value == null || enunciado.value == '')
{
	event.preventDefault();
alert("Campos obligatorios vacíos3");

}
else if (form.incorrecta2.value == null || enunciado.value == '')
{
	event.preventDefault();
alert("Campos obligatorios vacíos4");

}
else if (form.incorrecta3.value == null || enunciado.value == '')
{
	event.preventDefault();
alert("Campos obligatorios vacíos5");

}
else if (form.complejidad.value == null || enunciado.value == '')
{
	event.preventDefault();
alert("Campos obligatorios vacíos6");

}
else if (form.tema.value== null || enunciado.value == '')
{
	event.preventDefault();
alert("Campos obligatorios vacíos7");

}
else{
	event.preventDefault();
	alert("enviar");
}

};


