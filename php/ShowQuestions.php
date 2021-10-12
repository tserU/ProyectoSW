<!DOCTYPE html>
<html>
<head>
  <?php include '../html/Head.html'?>
</head>
<body>
  <?php include '../php/Menus.php' ?>
  <section class="main" id="s1">
    <div>
      Código PHP para mostrar una tabla con las preguntas de la BD.<br>
      La tabla no incluye las imágenes
	  <?php
	  $link = mysqli_connect ("localhost", "G28", "3o5zj9cQIHitH", "db_G28");
      $usuarios = mysqli_query($link, "select email,enunciado,RespuestaCorrecta from preguntas" );
      echo '<table border=1> <tr> <th> AUTOR </th> 
      <th>ENUNCIADO</th> <th>RESPUESTA CORRECTA</th> </tr>';
      while ($row = mysqli_fetch_array( $usuarios )) {
      echo '<tr><td>' . $row['email'] . '</td> <td>'.$row['enunciado']
	  .'</td><td>'.$row['RespuestaCorrecta'].'</td></tr>';
      }
      echo '</table>';
      $usuarios->close();
      mysqli_close($link);
      ?>
	  
    </div>
  </section>
  <?php include '../html/Footer.html' ?>
</body>
</html>
