<!DOCTYPE html>
<html>
<head>
  <?php include '../html/Head.html'?>
  
  
</head>
<body>
  <?php include '../php/Menus.php' ?>
  <section class="main" id="s1">
    <div>
 
  

   
 
 
 <form id='signUp' name='signUp'  METHOD ="POST" ACTION = 'SignUp.php'>
      <h2>REGISTRO</h2>
      Tipo Usuario*:
      <input type = "radio"  id = "Alumno" name = "tipo" value = "Alumno" checked>
      <label for="Alumno">Alumno</label>
 
      <input type = "radio" id = "Profesor" name = "tipo" value = "Profesor">
      <label for="Profesor">Profesor</label><br>
 
      Email*:
      <input type = "text" id= "email" name = "email" size ="40"  > <br>
	  Nombre y Apellidos*:
      <input type = "text" id= "nombre" name = "nombre" size ="40"> <br>
 
      Password*:
      <input type = "password" id= "pass" name = "pass" size ="40"  MINLENGTH = "8"> <br>
 
      Repetir Password*:
      <input type = "password" id= "pass2" name = "pass2" size ="40"  MINLENGTH = "8"> <br>
 
      <input type = "submit"  id= "botonEnviar" name = "boton" value ="Enviar Solicitud"><br>
	
	  <a href="javascript:history.back()">Ir atrás</a>
	  
      </form>  
	  
	  <?php
 
 

    function validarEmail(){
		$error = "";
      
		$tipo = $_POST['tipo'];
		$email = $_POST['email'];
		if (!empty($email)){
			if ($tipo == "Alumno"){
				
				$patternAlumno = '/^[A-Za-z]+\d{3}@ikasle\.ehu\.(eus|es)$/';
				$match = preg_match( $patternAlumno, $email );
				if( $match != 1){
					$error = 'Email no válido';
				}
				
			}
			else if($tipo =="Profesor"){
				$patternProfesor = '/^[A-Za-z]+(\.[A-Za-z]+)?@ehu\.(eus|es)$/';
				$match = preg_match($patternProfesor, $email);
				if( $match != 1){
					$error = 'Email no válido';
				}
				
			}
		}else $error = "<p> Email vacío</p>";
		
		return $error;
    }
	
	function validarNombre(){
		$error = "";
		$nombre = $_POST['nombre'];
		if ($nombre != ''){
			$pattern = '/^[A-Za-z][A-Za-z]*\s[A-Za-z][A-Za-z]*$/';
			$match = preg_match($pattern,$nombre);
			if($match != 1){
				$error = 'Nombre y Apellidos no válidos';
			}
		}else $error = 'Nombre y Apellidos vacío';
		return $error;
	}
	function validarPassword(){
		$error = '';
		$pass1 = $_POST['pass'];
		$pass2 = $_POST['pass2'];
		if($pass1 == ''){
			$error = 'Password vacío';
		}
		else if($pass2 == ''){
			$error = 'Repetir Password vacío';
		}
		else if ($pass1 != $pass2){
			$error = 'El servidor dice que las contraseñas no coinciden';
		}
		
		return $error;
	}
 
    $errores3 = "";
    $errores2 = "";
    $errores = "";
    if (isset($_POST['boton'])){
		$errores = validarEmail();
		$errores2 = validarNombre();
		$errores3 = validarPassword();
	
		$tipo=$_POST['tipo'];
		$email=$_POST['email'];
		$nombre=$_POST['nombre'];
		$pass1=$_POST['pass'];
		if($errores ==''&&$errores2==''&&$errores3==''){
			$mysqli = mysqli_connect ("localhost", "root", "", "quiz");
			$sql = "insert into usuarios (TipoUsuario,Email,NombreApellidos,Password) 
			values ( '$tipo' , '$email','$nombre','$pass1')";
			if (!$mysqli)
            {
				   echo("Se ha producido algún tipo de error,vuelva a intentarlo");
                   die ("Fallo al conectar a MySQL: " . mysqli_connect_error());
				   
            }
            echo 'Connection OK';
			if (!mysqli_query($mysqli,$sql))
            {
                   echo("Se ha producido algún tipo de error,vuelva a intentarlo");
				 
				   die('Error:'.mysqli_error($mysqli));
				 
            }
            echo 'Usuario almacenado en la BD';
			
            // Cerrar conexión
            mysqli_close($mysqli);
			
		
			header('location: LogIn.php');

		}
		else {
			echo $errores;
			echo $errores2;
			echo $errores3;
		}
		
	 
    } 	

	?>
    </div>
  </section>
  <?php include '../html/Footer.html' ?>
</body>
</html>
