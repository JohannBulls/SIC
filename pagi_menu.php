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

     

<img src="../images/menu_lista.png" width="900">  
						    
          
							
							<!--=======fondo imagen================-->
							<div class="full-width-container block-3">
	<a href="insertar_menu.php"><button type="button" title="Agrega un nuevo plato" class="anadir">Agrega un nuevo plato</button></a><br><br><br>
		<!--=======BUSQUEDAD================--> 
		 
			 <div class='col-md-2'>
				
					
					 <button type="button" >
					 
						 
						 
							<form name="form1" method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>" id="cdr" >
						
  <span style="color:#020202"><h3  style="color: #010101"><p class="h1"> Menu de hoy </p> </h3>
 <br>
 
       
        <?php require("../controlador/conecxion.php");

$registros=$mysql->query("SELECT * FROM `productos` where estado='activo' ORDER BY id ASC") or die($mysql->error);
echo'<center>';
echo '<table id="tabla_articulos" class="table1">'; 
																					  
while ($reg=$registros->fetch_array())
 {
echo '<tr>'; 
echo '<td>';
echo '<p class="l">',$reg['nombre'],'</p>';
echo '</td>';
echo '</tr>'; 
 }
echo '</table>'; 
 ?>
      
        <br>
         <br>
    
</form>
				
							
							 </button>
						</div>
			
<font color="#000000"><div class="adsi-css" style="auto"> 
				

				<!--=======tablas================--> 
				<table class="table1">  
			<?php include "tablas/menu.php";?>
					   </table>
			
             
                     
			</header>
					</font>

					</div> <br>
					
					 
					
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