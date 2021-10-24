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
	 
     
	  
	  echo '<h3><center>CONTENIDO DEL FICHERO XML </h3><p><p>';
	 
	   echo '<table border=1> <tr> <th> AUTOR </th> 
      <th>ENUNCIADO</th> <th>RESPUESTA CORRECTA</th> </tr>';
	  
	  $xml = simplexml_load_file('../xml/Questions.xml');
	  
	  foreach($xml->assessmentItem as $assessmentItem){
		  echo '<tr><td>'  .$assessmentItem['author'] . '</td> <td>'.$assessmentItem->itemBody->p
	  .'</td><td>'.$assessmentItem->correctResponse->response.'</td></tr>';
	  }
     
      
      echo '</table>';
      ?>
	  
    </div>
  </section>
  <?php include '../html/Footer.html' ?>
</body>
</html>