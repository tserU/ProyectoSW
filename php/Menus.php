<div id='page-wrap'>
<header class='main' id='h1'>
  <span class="right">
		<?php session_start();
		if ($_SESSION['sesion'] === true){
			echo '<span class="right" ><a href="LogOut.php">Logout</a></span>';
			
		}else 
		
			echo '<a href="SignUp.php">Registro</a></span>
			<span class="right"><a href="LogIn.php">Login</a></span> Anonimo';
		?>
		
 
</header>
<nav class='main' id='n1' role='navigation'>
  <span><a href='Layout.php'>Inicio</a></span>
  <span><a href='Credits.php'>Creditos</a></span>
  
  <?php 
  if ($_SESSION['sesion'] === true) { echo "
  <span><a href='QuestionForm.php'> Insertar Pregunta</a></span>
  <span><a href='ShowQuestions.php'>Ver Preguntas</a></span>
  <span><a href='ShowXmlQuestions.php'>Ver Preguntas XML</a></span>
  <span><a href='ShowJsonQuestions.php'>Ver Preguntas JSON</a></span>"
  ;}
  ?>
</nav>

