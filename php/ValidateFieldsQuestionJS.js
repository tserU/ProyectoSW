


//function verificar()
//{
/*var nombre = document.formulario.nombre.value;
var grupo = document.formulario.grupo.value;*/

//var form = document.form;
var form = document.getElementById('fquestion');
form.addEventListener('submit',function(event)
{
	event.preventDefault();
if (email.value ===null|| email.value === '' )
{
alert("La dirección de correo no puede estar vacía");
//return false;
}
if (form.enunciado.value ==null || enunciado.value == '')
{
alert("Campos obligatorios vacíos1");
//return false;
}

if (form.correcta.value == null || enunciado.value == '')
{
alert("Campos obligatorios vacíos2");
//return false;
}

if (form.incorrecta1.value == null || enunciado.value == '')
{
alert("Campos obligatorios vacíos3");
//return false;
}
if (form.incorrecta2.value == null || enunciado.value == '')
{
alert("Campos obligatorios vacíos4");
//return false;
}
if (form.incorrecta3.value == null || enunciado.value == '')
{
alert("Campos obligatorios vacíos5");
//return false;
}
if (form.complejidad.value == null || enunciado.value == '')
{
alert("Campos obligatorios vacíos6");
//return false;
}
if (form.tema.value== null || enunciado.value == '')
{
alert("Campos obligatorios vacíos7");
//return false;
}
//return true;
});


