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
	 
     
	  
	$data = file_get_contents("../json/Questions.json"); 
	$array=json_decode($data);
	echo '<h3><center>CONTENIDO DEL FICHERO JSON </h3><p><p>';
	echo '<body>';
	echo '<p><center><table ><tr><th>AUTOR</th><th>ENUNCIADO</th><th>RESPUESTA CORRECTA</th></tr>';
	foreach($array->assessmentItems as $assessmentItem)
	{
		$autor = $assessmentItem->author;
		$enunciado=$assessmentItem->itemBody->p;
		$respuesta=$assessmentItem->correctResponse->value;
		echo '<tr>
		<td>' . $autor . '</td>
		<td>' . $enunciado . '</td>
		<td>' . $respuesta . '</td>
		</tr>';
	}
	echo '</table><center>';
	echo '</body>';
      ?>
	  
    </div>
  </section>
  <?php include '../html/Footer.html' ?>
</body>
</html>