<!DOCTYPE html>

<html lang="en" class="no-js">
	<head>
	<title>Administrador</title>
	
	</head>
	<link rel="stylesheet"  href="../css/component.css" />
	<script>(function(e,t,n){var r=e.querySelectorAll("html")[0];r.className=r.className.replace(/(^|\s)no-js(\s|$)/,"$1js$2")})(document,window,0);</script>
<body class="indexx1">

<!--==============================conectar link=================================-->
  
  
  <?php include "include_admin.php"; ?>

<!--=======COMANDO FFECHA========================-->
 

   <!--==============================boton de atras =================================-->
  
 
<div class="grid_1">
  
 <a href="pag_admi.php"> <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">  <img src=../images/FLECHA.PNG width=50 height=50px></button></a>
  

                                
         </div>  
         
         
                             
 <center>
 
 <section id="content">
	<div class="full-width-container block-1">
		
            <br>
            <br>
            
				<div class="grid_6">
				      <header>					

                               <br><br><br>
                                
						 </div> </h7></font><h7><font color="#000000"><div class="adsi-css"  style="auto"><h6><font color="#000000"><?php echo $fecha; ?></h6></font></div>
</div></h7></font>
					</header>
                    	
</div>							
</div>
</div>
</div>
  <table>
  	<tr height="40"></tr>
  </table>

     

<img src="../images/perfil.png" width="300">

                
				
          
							
							<!--=======fondo imagen================-->
							
		
		 <div class="full-width-container block-3 parallax-block" data-stellar-background-ratio="0.5">
 <div id="genaeral">	
			

<center>
				<!--=======formato================--> 
				  <h4> <p class="p" style="color: black"><img src="../images/1448784664user-icon.png" width="200"></h4></p>
				 
				 <h1> ADMINISTRADOR </h1></p>
				 <br>
 <?php require("../controlador/conecxion.php");
$nombre=$_SESSION['nombre'];
$Documento=$_SESSION['Documento'];		
 $registros=$mysql->query("SELECT * FROM `registro` where Documento ='$Documento'") or die('error tabla');
	
 while ($reg=$registros->fetch_array())
 {
?>
 <form method="post"  action="modificar/modifi_perfil.php" class="form-signin">
          
<h7>Nombre:
 <input type="text" name="name" class="adsi-css" style="width:150px; height:30px" required value="<?php echo $_SESSION['nombre'];?>">
 <br>
 Apellidos:
 <input type="text" name="Apellido" class="adsi-css" style="width:150px; height:30px" required value="<?php echo $reg['apellido'];?>">
 <br> 
Documento:
 <input type="number" name="Documento" class="adsi-css" style="width:150px; height:30px" required value="<?php echo $reg['Documento'];?>">
 <br>
Teléfono:
 <input type="number" name="telefono" class="adsi-css" style="width:120px; height:30px" required value="<?php echo $reg['telefono'];?>">
 <br>
 Contraseña:</h7>
 <input type="password" name="pasadmin" class="adsi-css" style="width:100px; height:30px" required value="<?php echo $reg['pasadmin'];?>">
 <br>

  
   <hr class="tagline-divide">
               
              <p><h4>Frase de seguridad</p></h4>
               <h9>Verifica que su respueta coincida con su pregunta de seguridad, de esta manera te aseguraras de estar modificando bien tus datos</h9>
               
              <br><br>
 

 <select  name="Pregunta" class="adsi-css"  required>
  <h7>
  <option value="<?php echo $reg['pregunta'];?>" name="Pregunta" >Elige una pregunta</option>
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
 <input type="text"  class="adsi-css" name="Respuesta" placeholder="Respuesta" required autofocus style="width:300px; height:40px"  value=<?php echo $reg['respuesta'];?>> 
 <br>
<input type="submit" class="boton_personalizado" value="Modificar">

 </form>
 <br>
      <?php
 } 
	 $mysql->close();
	?>    
              
			
			</header>
					</font>

					</div>
						             </div>

						</div></div>
				</div>
         </div>
 </div>  
          </center>
          
          
          
				<div id="touch_gallery">
					<div class="grid_3">
					
						<article>
                        <h4><em style="color:#F00"></em> </h4>
                      
						</article>
			</div>
			</div>
		</div>
	</div>
</section>

				
		</div>
	</div>
	</div>
	
</h6></font></div>
</div></h7></font>
<!--=======footer==================================-->

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