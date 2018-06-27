<!DOCTYPE html>

<html lang="en">
	<head>
	<title>Administrador</title>
	
	</head>
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

     

<img src="../images/ventas_lista.png" width="700">  
						<br>       
						<br>       
							
							<!--=======fondo imagen================-->
					<div class="full-width-container block-3 parallax-block" data-stellar-background-ratio="0.5">
 <center>

			
			 <!--=======BUSQUEDAD================--> 
			 <div class='col-md-2'>
				
					 <button type="button" >
					 
						 
						 
							<form name="form1" method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>" id="cdr" >
						
  <span style="color:#020202"><h3  style="color: #010101"><p class="l"> Buscar</p> </h3>
 
        <input name="T1"  type="text" class="list-group-item-danger" size="20">
        <br>
         <br>
        
	  <input  name="buscar" type="submit" class="boton_personalizado" width="10", height="10" value="Buscar" />
    
</form>
				
							
							 </button>
						</div>
			<!--=======contenedor tablas================-->
			
			
<font color="#000000"><div class="adsi-css" style="auto"> 

				<!--=======tablas================-->
			 
	<table class="table1">
			<?php include "tablas/venta.php";?>
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