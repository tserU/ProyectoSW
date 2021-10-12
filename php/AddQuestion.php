<!DOCTYPE html>
<html>
<head>
  <?php include '../html/Head.html'?>
</head>
<body>
  <?php include '../php/Menus.php' ?>
  <section class="main" id="s1">
    <div>

	
			
			<?php
		
			
		
			
			$email =$_GET['email'];
			$enunciado = $_GET['enunciado'];
			$correcta = $_GET['correcta'];
			$incorrecta1 = $_GET['incorrecta1'];
			$incorrecta2 = $_GET['incorrecta2'];
			$incorrecta3 = $_GET['incorrecta3'];
			$tema = $_GET['tema'];
			
			echo $email;
			echo $enunciado;
			echo $correcta;
			echo $incorrecta1;
			echo $incorrecta2;
			echo $incorrecta3;
			echo $tema;
			//IdPreguntas,
			$mysqli = mysqli_connect ("localhost", "G28", "3o5zj9cQIHitH", "db_G28");
			$sql = "insert into preguntas (Email,enunciado,RespuestaCorrecta,
			RespuestaIncorrecta1,RespuestaIncorrecta2,RespuestaIncorrecta3,Complejidad,Tema) 
			values ( '$email' , '$enunciado','$correcta','$incorrecta1','$incorrecta2','$incorrecta3',1,'$tema')";
            if (!$mysqli)
            {
				   echo("Se ha producido algún tipo de error,vuelva a intentarlo");
                   die ("Fallo al conectar a MySQL: " . mysqli_connect_error());
				   
            }
            echo 'Connection OK';
			if (!mysqli_query($mysqli,$sql))
            {
                   echo("Se ha producido algún tipo de error,vuelva a intentarlo");
				   $preguntas = '<br> <a  href = "QuestionForm.php">  Ir a insertar pregunta </a>';
				   echo $preguntas;
				   die('Error:'.mysqli_error($mysqli));
				 
            }
            echo 'Pregunta almacenada en la BD';
			$preguntasInsertadas = '<br> <a  href = "ShowQuestions.php">  Ver preguntas de la BD </a>';
		    echo $preguntasInsertadas;
			
            // Cerrar conexión
            mysqli_close($mysqli);


			?>
			

    </div>
  </section>
  <?php include '../html/Footer.html' ?>
</body>
</html>
