<!DOCTYPE html>
<html>
<head>
  <?php include '../html/Head.html'?>

</head>
<body>
  <?php include '../php/Menus.php' ?>
  <section class="main" id="s1">
    <div>
	
<form id='fquestion' name='fquestion'  METHOD ="GET" ACTION = "AddQuestion.php">

Email*:
<input type = "text" id= "email" name = "email" size ="40">
<br>
Enunciado de la pregunta*:
<input type = "text" id= "enunciado" name = "enunciado" size ="80">
<br>
Respuesta Correcta*:
<input type = "text" id= "correcta" name = "correcta" size ="80">
<br>
Respuesta Incorrecta*:
<input type = "text" id= "incorrecta1" name = "incorrecta1" size ="80">
<br>
Respuesta Incorrecta*:
<input type = "text" id= "incorrecta2" name = "incorrecta2" size ="80">
<br>
Respuesta Incorrecta*:
<input type = "text" id= "incorrecta3" name = "incorrecta3" size ="80">
<br>
Complejidad*:
<select name = "complejidad">
        <option>Baja</option>
		<option>Media</option>
		<option>Alta</option>
</select>
<br>
Tema (subject)*:
<input type = "text" id= "tema" name = "tema">
<br>

<input type = "submit"  id= "botonEnviar" name = "boton" value ="Enviar Solicitud">

</form>


    </div>
  </section>
  <?php include '../html/Footer.html'  
 ?>
  <script src = '../js/jquery-3.4.1.min.js'></script>
 <script src = '../js/ValidateFieldsQuestionJQ.js'></script>
 
 
</body>
</html>
