<!DOCTYPE html>
<html>
<head>
  <?php include '../html/Head.html'?>
  
  
</head>
<body>
  <?php include '../php/Menus.php' ?>
  <section class="main" id="s1">
    <div>
 
  

   
 
 
 <form id='login' name='login' action = "LogIn.php" method = "POST" method 'GET'>
      <h2>Login</h2>
     
     
 
      Email*:
      <input type = "text" id= "email" name = "email" size ="40"  > <br>
	
 
      Password*:
      <input type = "password" id= "pass" name = "pass" size ="40"  MINLENGTH = "8"> <br>
 
     
 
      <input type = "submit"  id= "botonEnviar" name = "boton" value ="Enviar"><br>
	
	 
	  
      </form>  
	  
	<?php
	include 'DbConfig.php';
	if (isset($_POST['email'])){
		

	$mysql= mysqli_connect($server, $user, $pass, $basededatos) or
	die(mysqli_connect_error());
	
	$username=$_POST['email']; 
	$pass=$_POST['pass'];
	
	$usuarios = mysqli_query( $mysql,"select * from usuarios where Email ='$username' and
	Password ='$pass'");
	
	$cont= mysqli_num_rows($usuarios); 
	mysqli_close( $mysql);
	if($cont==1){
		echo("<script> alert ('BIENVENIDO AL SISTEMA:". $username . "')</script>");
	echo ("Login correcto<p><a href=‘Layout.php'>Puede insertar preguntas</a>");
	
	session_start();
	$_SESSION['sesion'] = true;
	
	header('location: Layout.php');}
	else {echo
	("Par&aacute;metros de login incorrectos ");}
	}
	?>
	
    </div>
  </section>
  <?php include '../html/Footer.html' ?>
</body>
</html>
