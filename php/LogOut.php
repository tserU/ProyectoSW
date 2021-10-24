<!DOCTYPE html>
<html>
<head>
  <?php include '../html/Head.html'?>
  
  <meta http-equiv="Refresh" content = "0;url = Layout.php">
</head>
<body>
  <?php include '../php/Menus.php' ?>
  <section class="main" id="s1">
    <div method = "get">
 
  


<?php 
session_start();
$_SESSION['sesion'] = false;
echo ("<script>alert('HASTA PRONTO')</script>");

?>


	
    </div>
  </section>
  <?php include '../html/Footer.html' ?>
</body>
</html>
