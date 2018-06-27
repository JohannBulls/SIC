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
  
 <a href="pagi_empleados.php"> <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">  <img src=../images/FLECHA.PNG width=50 height=50px></button></a>
  

                                
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

 <h4 class='box-title'><div  class="fa-3x" style=" color:#066"> empleado</div>
                        </span></h4>
          
							
							<!--=======fondo imagen================-->
							<div class="full-width-container block-3">
		
			
			
		
<font color="#000000"><div class="adsi-css" style="auto"> 


				<!--=======formato modificar================-->   
				<br>
  <br>
			
 <?php	
require("../controlador/conecxion.php");
 $registro=$mysql->query("select *
 from empleados where id = $_REQUEST[id]") or
 die('error selecionando la base de datos ');
 if ($reg=$registro->fetch_array())
 {
 ?>
 
 <form method="post" action="modificar/modifi_empleado.php">
 <h4> <p class="p" style="color: black">numero de empleado <input  name="empleado" size="1" value="<?php echo $reg['id'];?>"></p></h4>
 <br>
  <p>
 <p class="l" style="color: black">nombres del empleado:
	 <input type="text" name="empleado" size="10" value="<?php echo $reg['empleado']; ?>"></p>
 
 <br>
 <p class="l" style="color: black">Apellidos del empleado:
	 <input type="text" name="apellido" size="10" value="<?php echo $reg['empleado_apellido']; ?>"></p>
 
 <br><br>
  <p class="l" style="color: black">
 identificación:
 <input type="text" name="iden" size="10" value="<?php echo $reg['iden']; ?>">
&nbsp;&nbsp;&nbsp;&nbsp;
 Telefono:
 <input type="text" name="telefono" size="10" value="<?php echo $reg['telefono']; ?>">
 &nbsp;&nbsp;&nbsp;&nbsp;
 <br>
 <br>
 Cargo:
 <select name="cargo">
 <?php
require("../controlador/conecxion.php");
 $registros=$mysql->query("select distinct cargo from empleados") or
 die('error a selecionar la base de datos');
 while ($reg=$registros->fetch_array())
 {
 echo "<option value=\"".$reg['cargo']."\" >".$reg['cargo']."</option>";
 }
 ?>

 </select>
 
 &nbsp;&nbsp;&nbsp;&nbsp;
 sueldo:
 <input type="text" name="sueldo" size="10" value="<?php echo $reg['sueldo']; ?>">
 <p>
 <p>
<br>
 <br>
 <input type="submit" class="boton_personalizado" value="modificar">
 
 <p>
 <p><br>
 <br>

 </form>
 <?php
 }
 else
 echo 'No existe un articulo con dicho codigo';
 $mysql->close();
 ?>
          
          
          
			
			
			
			
			
			
			
			
			
			
			
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