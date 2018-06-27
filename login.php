<!DOCTYPE html>
<html lang="en">
	<head>
	<title>Login</title>

<link rel="shortcut icon" type="../image/ico" href="../images/lom.png">
</head>
<body class="indexx">
<!--==============================header=================================-->
<?php
include "../controlador/include.php";

?>
<!--=======content================================-->
 <div class="full-width-container block-3 parallax-block" data-stellar-background-ratio="0.5">
 <center>
 <div id="genaeral">

  	
   
      <!--=======formulario================================-->                    
           <br>
            <img src="../images/1448784664user-icon.png" width="150">
            <br>
               <br>            
            <form method="POST" action="../controlador/validar.php" class="form-signin">
          
                
                
                  <h7>Numero de Documento</h7>
                <br><br>
            <input type="Documento" class="adsi-css" style="width:400px; height:40px" name="Documento" 
                placeholder="Documento" required/>
               
               <br> 
               
                 <h7>Contraseña del Usuario</h7>
               <br><br>
            <input type="password" class="adsi-css" style="width:400px; height:40px" name="password"  placeholder="Contraseña" required>
               
               <br>
                
             
                <br>
                <button class="btn btn-lg btn-primary btn-block btn-sm" type="submit" class="botonlg" style="width:180px">Ingresar</button>
            </form>
                <br>
            <a href="recuperar.php" class="forgot-password">                
            ¿Olvidó la contraseña?
            </a> 
            <br>   
            <br>                   
            </center>
            </div>
           </div>
         
            
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