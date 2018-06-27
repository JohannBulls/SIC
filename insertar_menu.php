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



   <!--==============================boton de atras =================================-->
  
 
<div class="grid_1">
  
 <a href="pagi_menu.php"> <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">  <img src=../images/FLECHA.PNG width=50 height=50px></button></a>
  

                                
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

 <h4 class='box-title'><div  class="fa-3x" style=" color:#066"> menu </div>
                        </span></h4>
          
							
							<!--=======fondo imagen================-->
							<div class="full-width-container block-3">
		
			
			
		
<font color="#000000"><div class="adsi-css" style="auto"> 


				<!--=======formato================-->   
				 <h4> <p class="p" style="color: black">nuevo plato </h4></p>
				 <br>
 
<form method="post" action="insertar/insertar_menu.php"  enctype="multipart/form-data">
 <p class="l" style="color: black">Ingrese nombre del plato:
	 <input type="text" name="nombre" required ></p>
 <br>
 <p class="l" style="color: black">Ingrese descripciòn:
	 <input type="text" name="descripcion" required></p>
 <br>
 <p class="l" style="color: black">Ingrese precio:
	 <input type="text" name="precio" required></p>

 
  <br>
  <p class="l" style="color: black">Ingrese imagen:   
  
  <input type="file" name="imagen" id="file-1" class="inputfile inputfile-1" enctype="multipart/form-data" required />
					<label for="file-1"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="17" viewBox="0 0 20 17"><path d="M10 0l-5.2 4.9h3.3v5.1h3.8v-5.1h3.3l-5.2-4.9zm9.3 11.5l-3.2-2.1h-2l3.4 2.6h-3.5c-.1 0-.2.1-.2.1l-.8 2.3h-6l-.8-2.2c-.1-.1-.1-.2-.2-.2h-3.6l3.4-2.6h-2l-3.2 2.1c-.4.3-.7 1-.6 1.5l.6 3.1c.1.5.7.9 1.2.9h16.3c.6 0 1.1-.4 1.3-.9l.6-3.1c.1-.5-.2-1.2-.7-1.5z"/></svg> <span>Subir archivos</span></label> <br>
	 
 <br>
 <input type="submit" class="boton_personalizado" value="Confirmar">
 <br>
 <p>
 <p>

 
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