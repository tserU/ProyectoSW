<SCRIPT LANGUAGE="JavaScript">
“ código JavaScript”
function verificar()
{
/*var nombre = document.formulario.nombre.value;
var grupo = document.formulario.grupo.value;*/
var form = document.form;
if (form.email.value ==null )
{
alert("Error en el email");
return false;
}
if (form.enunciado.value ==null)
{
alert("Error en el identificador de grupo");
return false;
}

if (form.correcta.value == null)
{
alert("Error en el identificador de grupo");
return false;
}

if (form.incorrecta1.value == null)
{
alert("Error en el identificador de grupo");
return false;
}
if (form.incorrecta2.value == null)
{
alert("Error en el identificador de grupo");
return false;
}
if (form.incorrecta3.value == null)
{
alert("Error en el identificador de grupo");
return false;
}
if (form.complejidad.value == null)
{
alert("Error en el identificador de grupo");
return false;
}
if (form.tema.value== null)
{
alert("Error en el identificador de grupo");
return false;
}
return true;
}

</SCRIPT>
