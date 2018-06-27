    <html lang="en">
	<head>
	<title>SIC</title>
	<link rel="shortcut icon" type="image/ico" href="images/lom.png">
	
<body class="index">
<!--==============================header=================================-->
<?php
include "include_usu.php";
?>
<!--=======content================================-->

<div class="full-width-container block-3 parallax-block" data-stellar-background-ratio="0.5">
 <div id="genaeral">
<center>
			<br><br>
						<h2><font color="#000000">Modificar Datos
					                          
	</font><br><br>
            <img src="../images/user-icon.png" width="150">
            <br></h2>
                 
               <!--=======formulario================================-->
<form method="POST" action="Registro.php" class="form-signin">
          
                  <h7>Nombre</h7>
                  <br><br>
            	  <input type="name" class="adsi-css" style="width:400px; height:30px" name="name" 
                  placeholder="Nombre" required/><br> 
                
                  <h7>Apellido</h7>
                  <br><br>
            	  <input type="Apellido" class="adsi-css" style="width:400px; height:30px" name="Apellido" 
                  placeholder="Apellido" ><br> 
               
                  <h7>Numero de Documento</h7>
                  <br><br>
            	  <input type="number" class="adsi-css" style="width:400px; height:30px" name="documento" 
                  placeholder="Documento" required/><br> 
                  
                  <h7>Telefono</h7>
                  <br><br>
            	  <input type="number" class="adsi-css" style="width:400px; height:30px" name="number" 
                  placeholder="Telefono" required/><br> 
                  
                  <h7>Contraseña</h7>
                  <br><br>
            	  <input type="password" class="adsi-css" style="width:400px; height:30px" name="password" 
                  placeholder="Contraseña" required/><br>
                   
                <button class="btn btn-lg btn-primary btn-block btn-sm" type="submit" class="botonlg" style="width:180px">CAMBIAR</button>
            </form>
                <br>            
            <br>   
            <br>                   
            </center>
            </div>
           </div>
         
            </div>




<!--=======footer=================================-->
<footer id="footer">
	<div class="footer_bottom">
	<a href="" rel="nofollow"><img src="../images/footer-logo.png" alt="logo">
	</a></div>
</footer>
<!--=======footer=================================-->
<?php
include "../controlador/galeria.php";
	
?>
<!--=======controlador=================================-->
<?php include "../controlador/Inhabilitar_boton_derecho.php"; ?>
<?php 
include "../controlador/barra_fin_tarea.php";	
?>
</body>
</html>