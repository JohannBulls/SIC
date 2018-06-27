<!DOCTYPE html>
<html lang="en">
	<head>
	<title>Contraseña</title>
	
<link rel="shortcut icon" type="../image/ico" href="../images/lom.png">
</head>
<body class="indexx">

<!--==============================header=================================-->
<?php
include "../controlador/include.php";

?>

<!--=======content================================-->
 <div class="full-width-container block-3 parallax-block" data-stellar-background-ratio="0.5">
 <div id="genaeral" style="width:350px; height:autopx">
<center>
  	
   
                          
           <br>
            <img src="../images/user-icon.png" width="150">
            <br>
               <br>   
               <!--=======formulario================================-->         
           
                                      
                                        <h9>Selecione que tipo de usuario es.</h9> <br><br>   
                      
                                            
 <select id="tipos" name="tipos"  onChange="tipo(this.value);"class="adsi-css" style="width:200px; height:40px" required>
  <h7>
  <option value="">Tipo de usuario</option>
  <option value="usu">Usuario</option>
  <option value="emp">Empleado</option>
  <option value="amd">Administrador</option>
   
  </h7><br><br>
</select>  
               
            
              <div id="usu" style="display: none;">
             	       <!--=======Usuario Recuperar=======-->
              	       <form method="POST" action="recuperar_Cxn.php" class="form-signin">          
           <h9>Ingrese su Numero de Documento para que podamos restablecer su contraseña.</h9> <br><br>                       
                  <h7>Numero de Documento</h7>
                <br><br>
                 
            <input type="Documento" class="adsi-css" style="width:200px; height:40px" name="Documento" 
                placeholder="Documento" required/>
                     
                <button class="btn btn-lg btn-primary btn-block btn-sm" type="submit" class="botonlg" style="width:180px">Enviar</button>
            </form>
              </div>
                 <div id="emp" style="display: none;">
                 <!--=======Empleado Recuperar=======-->
              <form method="POST" action="recuperar_Cxn_emp.php" class="form-signin">          
           <h9>Ingrese su Numero de Documento para que podamos restablecer su contraseña.</h9> <br><br>                       
                  <h7>Numero de Documento</h7>
                <br><br>
                 
            <input type="Documento" class="adsi-css" style="width:200px; height:40px" name="Documento" 
                placeholder="Documento" required/>
                     
                <button class="btn btn-lg btn-primary btn-block btn-sm" type="submit" class="botonlg" style="width:180px">Enviar</button>
            </form>  
              </div>
                 <div id="amd" style="display: none;">
                 <!--=======Administrador Recuperar=======-->
           <form method="POST" action="recuperar_Cxn_amd.php" class="form-signin">          
           <h9>Ingrese su Numero de Documento para que podamos restablecer su contraseña.</h9> <br><br>                       
                  <h7>Numero de Documento</h7>
                <br><br>
                 
            <input type="Documento" class="adsi-css" style="width:200px; height:40px" name="Documento" 
                placeholder="Documento" required/>
                     
                <button class="btn btn-lg btn-primary btn-block btn-sm" type="submit" class="botonlg" style="width:180px">Enviar</button>
            </form> 
              </div>
                  
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
<!--=======controlador=================================-->
<?php
include "../controlador/barra_fin_tarea.php";	
?>
</body></body>
</html>