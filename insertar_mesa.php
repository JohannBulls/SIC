<!DOCTYPE html>

<html lang="en">
	<head>
	<title>Administrador</title>
	
	</head>
<body class="indexx1">

<!--==============================conectar link=================================-->
  
  
  <?php include "include_admin.php"; ?>



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
                                
</div></h7></font><h7><font color="#000000"><div class="adsi-css"  style="auto"><h6><font color="#000000"><?php echo $fecha; ?></h6></font></div>
</div></h7></font>
					</header>
                    	
</div>							
</div>
</div>
<center>
</body>
 <body class="index-2">     


<table>
  	<tr height="40"></tr>
  </table>

     

<img src="../images/mesas_lista.png" width="900">  
						<br>       
						<br>    
          
							
							<!--=======fondo imagen================-->
					<div class="full-width-container block-3 parallax-block" data-stellar-background-ratio="0.5">
 <center>

			
			 <!--=======espacio formulario================--> 
			 <div class='col-md-6'>

						 <!--=======código de ingresar mesas================-->

 <font color="#000000"><div class="adsi-css" style="auto">
	 <h6 class='box-title'><div  class="fa-3x" style=" color:#066">Ingresa Mesa </div></h6>
	 
 <form name="me" action="insertar/inse_mesa.php" method="post">
                       <br>
                        <p>                      </p>
                        <p>
                         <p class="l" style="color: black">Cantidad de puestos  
                          <input type="text" name="puesto" placeholder="cantidad puestos"></p>
                          <br>
                           <p class="l" style="color: black">Numero de mesa
                          <input type="text" name="num" placeholder="numero mesa"></p>
                          <p>
                          <br>
                          <br>
                          <input  type="submit"class="boton_personalizado" value="Agregar">
                        
                      </form>
                       
			 </div>
                      </font>
		
						</div>
			<!--=======contenedor tablas================-->
			
<font color="#000000"><div class="adsi-css" style="auto"> 

				<!--=======tablas================-->
			 
	<table class="table1">
		<h6 class='box-title'><div  class="fa-3x" style=" color:#066">Mesas Existentes </div></h6>
		<br>
		
			<?php include "tablas/mesa.php";?>
	</table>
		
			</header>
					</font>

					</div>
						</div>

						</div>
				</div>
         </div>
 </div>  
          
          
          
          
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