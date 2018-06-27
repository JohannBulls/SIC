<!DOCTYPE html>
<html lang="en">
	<head>
	<title>Registrar</title>
	
<link rel="shortcut icon" type="../image/ico" href="../images/lom.png">
</head>
<body class="indexx">
<BODY oncontextmenu="return false" onselectstart="return false" ondragstart="return false"> 
<!--==============================header=================================-->
<?php
include "../controlador/include.php";

?>
<!--=======content================================-->
 <div class="full-width-container block-3 parallax-block" data-stellar-background-ratio="0.5">
 <div id="genaeral">
<center>
  	
   
                          
           <br>
            <img src="../images/1448784664user-icon.png" width="150">
            <br>
               <br>   
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
                  placeholder="Contraseña" required/><br><br>
                       <hr class="tagline-divide">
               
              <p><h6>Frase de seguridad</p></h6>
               <h9>Verifica que su frase de seguridad sea correcta, de esta manera te aseguraras de estar ingresando Lomo & Parrilla</h9>
               
              <br><br>
 
 
 <select  name="Pregunta" class="adsi-css" >
  <h7>
  <option value="">Elige una Pregunta</option>
  <option>&iquest;Nombre de su cancion preferida?</option>
  <option>&iquest;Nombre de su pelicula preferida?</option>
  <option>&iquest;Nombre de la ciudad que desea conocer?</option>
  <option>&iquest;Nombre de su libro preferido?</option>
  <option>&iquest;Nombre de su restaurante preferido?</option>
  <option>&iquest;Nombre de su juego de infancia preferido?</option>
  <option>&iquest;Nombre de su color preferido?</option>
  <option>&iquest;Nombre de su Comida preferida?</option>
  <option>&iquest;Nombre de su deporte preferido?</option>
  <option>&iquest;Alguna fecha importante?</option>
  </h7>
</select>

 <br><br>         
 <input type="text"  class="adsi-css" name="Respuesta" placeholder="Respuesta" required autofocus style="width:300px; height:40px"> 
 <br>

  
 <tr><td height="100px">
 <center><button class="btn btn-lg btn-primary btn-block btn-sm" type="submit" class="botonlg" style="width:180px">Registrar</button>
            
              <br>  <br></form></center>
 
               
               
                
      
                               
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