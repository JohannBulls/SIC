<!DOCTYPE html>
<html lang="en">
	<head>
	<title>Registrar</title>
	
<link rel="shortcut icon" type="../image/ico" href="../images/lom.png">
	</head>
<body class="indexx">
<!--==============================header=================================-->
<?php
include "../controlador/include.php";

?>
<!--=======content================================-->
 <div class="full-width-container block-3 parallax-block" data-stellar-background-ratio="0.5">
 <div id="genaeral">
<center>
  <?php	
require("../controlador/conecxion.php");
	$a1=$_POST['name'];
	$a2=$_POST['Apellido'];
	$a3=$_POST['documento'];
	
	$a5=$_POST['number'];
	$a6=$_POST['password'];
	$a4=$_POST['Pregunta'];
	$a7=$_POST['Respuesta'];
	
	
          $registro=$mysql->query("insert into registro(nombre,apellido,Documento,telefono,password,rol,pregunta,respuesta) values ('$a1','$a2','$a3','$a5',sha1('$a6'),'1','$a4','$a7')")
	  
	 or die ('<span style="color:#000000; font-size:25px;"> <br><br><br>El documento ingresado ya existe en nuestra base de datos. <br></h2><br> <form name="areat" method="post" action="registrar.php" >

  <button class="btn btn-lg btn-success btn-block btn-sm" style="width:200px"<input type="submit" name="login">Volver A INTENTAR</button>

</form><br><br><br>');
	
	
	 
 $mysql->close();
  error_reporting(E_ERROR);
 echo '<br><br><br><span style="color:#000000; font-size:25px;">REGISTRO EXITOSO</span><br><br><br>';
 
        ?> 
           <form method="post" action="login.php">
  <button class="btn btn-lg btn-primary btn-block btn-sm" style="width:150px">INICIAR SESION </button></form>
           <br><br>
	 </div></div>
<!--=======footer=================================-->
<footer id="footer">
	<div class="footer_bottom">
	<a href="" rel="nofollow"><img src="../images/footer-logo.png" alt="logo">
	</a></div>
</footer>
<!--=======controlador=================================-->

<?php

include "../controlador/barra_fin_tarea.php";	
?>
</body>
</html>