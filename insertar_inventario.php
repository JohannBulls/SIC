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
  
 <a href="pagi_inventario.php"> <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">  <img src=../images/FLECHA.PNG width=50 height=50px></button></a>
  

                                
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

 <h4 class='box-title'><div  class="fa-3x" style=" color:#066"> inventario</div>
                        </span></h4>
          
							
							<!--=======fondo imagen================-->
							<div class="full-width-container block-3">
		
			
			
		
<font color="#000000"><div class="adsi-css" style="auto"> 


				<!--=======formato insertar================-->   
				<br>
  <br>
	    <h4><p class="p" style="color: black">nuevo producto</h4>
		  <form method="post" action="insertar/insertar_inventario_producto.php">
		   <p class="l" style="color: black">
 Ingrese nombre del producto:
 <input type="text" name="producto" required>
 <br><br>
 Ingrese cantidad:
 <input type="text" name="cantidad" required>
 <br><br>
 Ingrese duración del producto:
 <input type="text" name="descripcion" required>
 <br><br>
 Categoria:
 <select name="idcate">
<?php	
require("../controlador/conecxion.php");
 
 $registros2=$mysql->query("select id,nombre from categoria") or
 die($mysql->error);
 while ($reg2=$registros2->fetch_array())
 {
 if ($reg2['id']==$reg['idcate'])
 echo "<option value=\"".$reg2['id']."\" selected>".$reg2['nombre']."</option>";
 else
 echo "<option value=\"".$reg2['id']."\">".$reg2['nombre']."</option>";
 }
 ?>

 </select>
  <br><br>
  Ingrese codigo:
 <input type="text" name="codigo" required>
 <br><br>
ingrese valor x unidad medida:
<input type="text" name="valor" required>
 <br><br>
 <input type="submit" class="boton_personalizado" value="confirmar">
 <br>
 <p>
 <p>
 <br><br>

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