<!DOCTYPE html>
<html>
<head>
  <?php include '../html/Head.html'?>
</head>
<body>
  <?php include '../php/Menus.php';
  include 'DbConfig.php';?>
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
		
			
			$mysqli = mysqli_connect ($server, $user, $pass, $basededatos);
			$sql = "insert into preguntas (Email,enunciado,RespuestaCorrecta,
			RespuestaIncorrecta1,RespuestaIncorrecta2,RespuestaIncorrecta3,Complejidad,Tema) 
			values ( '$email' , '$enunciado','$correcta','$incorrecta1','$incorrecta2','$incorrecta3',1,'$tema')";
            if (!$mysqli)
            {
				   echo("<br>Se ha producido algún tipo de error,vuelva a intentarlo<br>");
                   die ("Fallo al conectar a MySQL: " . mysqli_connect_error());
				   
            }
          
			if (!mysqli_query($mysqli,$sql))
            {
                   echo("<br>Se ha producido algún tipo de error,vuelva a intentarlo<br>");
				   $preguntas = '<br> <a  href = "QuestionForm.php">  Ir a insertar pregunta </a>';
				   echo $preguntas;
				   die('Error:'.mysqli_error($mysqli));
				 
            }
            echo '<br>Pregunta guardada en la BD<br>';
		
			
            // Cerrar conexión
            mysqli_close($mysqli);
			
			//XML
			libxml_use_internal_errors(true);
            $xml = simplexml_load_file("../xml/Questions.xml");
			
			if($xml === false){
				echo "<br>Error al insertar la pregunta en el fichero XML<br>";
				libxml_clear_errors();
			}else{
 
            $assessmentItem = $xml -> addChild('assessmentItem');
            $assessmentItem-> addAttribute('subject',$tema);
            $assessmentItem-> addAttribute('author',$email);
			
			$itemBody = $assessmentItem->addChild('itemBody');
            $itemBody -> addChild('p',$enunciado);
			
 
            $correctResponse = $assessmentItem->addChild('correctResponse');
			$correctResponse -> addChild('response',$correcta);
			
			$incorrectResponses = $assessmentItem->addChild('incorrectResponses');
			$incorrectResponses -> addChild('response',$incorrecta1);
			$incorrectResponses -> addChild('response',$incorrecta2);
			$incorrectResponses -> addChild('response',$incorrecta3);
 
            echo "<br>Pregunta guardada en el fichero XML<br>";
            $xml -> asXML('../xml/Questions.xml');
            
			}
			//JSON 
			$data = file_get_contents("../json/Questions.json");
			$array=json_decode($data);
			
			$assessmentItems = new stdClass();
			$assessmentItems->subject=$tema;
			$assessmentItems->author=$email;
			
			$itemBody = new stdClass();
			$itemBody-> p=$enunciado;
			$assessmentItems->itemBody=$itemBody;
			
			$correctResponse = new stdClass();
			$correctResponse-> value = $correcta;
			$assessmentItems->correctResponse=$correctResponse;
			
			$incorrectResponses = new stdClass();
			$incorrectResponses-> value = [$incorrecta1,$incorrecta2,$incorrecta3];
			$assessmentItems->incorrectResponses=$incorrectResponses;
			
			$preguntaarray[0] = $assessmentItems;
			array_Push($array->assessmentItems, $preguntaarray[0]);
			$jsonData = json_encode($array); 
			$jsonData = str_replace('{', '{'.PHP_EOL, $jsonData); 
			$jsonData = str_replace(',', ','.PHP_EOL, $jsonData); 
			$jsonData = str_replace('}', PHP_EOL.'}', $jsonData);
			file_put_contents("../json/Questions.json",$jsonData);
			echo '<br>Pregunta guardada en el fichero JSON<br>';
			?>
			

    </div>
  </section>
  <?php include '../html/Footer.html' ?>
</body>
</html>
