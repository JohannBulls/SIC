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
  
 <a href="pagi_proveedores.php"> <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">  <img src=../images/FLECHA.PNG width=50 height=50px></button></a>
  

                                
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

<section id="content">
	<div class="full-width-container block-1">
		<div class="container">
			<div class="row">
				
<!--=======contenedor principal================-->
          <font color="#000000"><div class="adsi-css"  style="auto"><h6><font color="#000000">
          
     <div class="full-width-container block-1">
		<div class="container">
			<div class="row">
				<div class="grid_12">
					<header>
<!--=======titulo================-->
						<span style="color:#036">

 <h4 class='box-title'><div  class="fa-3x" style=" color:#066"> proveedor </div>
                        </span></h4>
          
							
							<!--=======fondo imagen================-->
							<div class="full-width-container block-3">
		
			
			
		
<font color="#000000"><div class="adsi-css" style="auto"> 


				<!--=======formato================-->   
				 <h4> <p class="p" style="color: black">nuevo proveedor </h4></p>
				 <br>
 
 <form method="post"  action="insertar/insertar_proveedor_proveedor.php">
          
<p class="l" style="color: black">Ingrese nombre del empresa:
 <input type="text" name="empresa" required>
 <br><br>
 Ingrese nombre proveedor:
 <input type="text" name="proveedor" required>
 <br> <br>
  Ingrese telefono:
 <input type="text" name="telefono" required>
 <br><br>
 Ingrese categoria del producto:
 <input type="text" name="categoria" required>
 <br><br>
 Ingrese descripcion :
 <input type="text" name="descripcion" required>
 <br><br>
	 </p>
<input type="submit" class="boton_personalizado" value="insertar">
 </form>
          
              
			
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

     
	<br><br><br><br><br><br><br>
	<div> 	

				</div>
		<br><br>
			</center>					
		</div>
	</div>
	</div>
	
</h6></font></div>
</div></h7></font>
<!--=======footer=================================

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