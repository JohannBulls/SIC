<!DOCTYPE html>
<html lang="en">
	<head>
	<title>Administrador</title>
	
	</head>
<body class="indexx1">

<!--==============================conectar link=================================-->
  
  
  <?php include "include_admin.php"; ?>

<!--=======COMANDO FFECHA========================-->
 

 <center>
 <section id="content">
	<div class="full-width-container block-1">
		
            <br>
            <br>
            <header>
				<table>
				      <tr>
				      <td width="850px" ></td>	
				      <td>			
						<font color="#000000"><div class="adsi-css"  style="auto"><h6><font color="#000000"><?php echo $fecha; ?></h6></font></div></td>	
						</tr></table>
</div></font>
						
						
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
				<div class="grid_12">
                <img src="../images/admin.png" width="650">
				</div>
				<br><br><br><br><br><br><br>
<!--=======contenedor principal================-->
        <center>
         <div class="adsi-css"  style="width:80%">
          <br>
			<br>
			
     
				
					<div class="grid_3">
						<div class="img_container"><div class="imagen"><a href="pagi_venta.php"><img  src="../images/icono_venta.png" alt="projects"></a></div></div>
						<article>
                        <h3><em style="color:#F00"><a href="pagi_venta.php">CONSULTA <br> VENTAS</a></em> </h3>
							
						</article>
					</div>
					<div class="grid_3">
						<div class="img_container"><div class="imagen"><a href="pagi_empleados.php"><img src="../images/icono-empleados.png" alt="projects"></a></div></div>
						<article>
							<h3><em style="color:#F00"><a href="pagi_empleados.php">CONSULTA EMPLEADOS</a></h3>
							
						</article>
					</div>
					<div class="grid_3">
						<div class="img_container"><div class="imagen"><a href="pagi_inventario.php"><img src="../images/icono_inventario.png" alt="projects"></a></div></div>
						<article>
							<h3><em style="color:#F00"><a href="pagi_inventario.php">CONSULTA INVENTARIO</a></h3>
							
						</article>
						<br>
						<br>
					</div>
					<div class="grid_3">
						<div class="img_container"><div class="imagen"><a href="pagi_menu.php"><img src="../images/icono_menu.png" alt="projects"></a></div></div>
						<article>
							<h3><em style="color:#F00"><a href="pagi_menu.php">CONSULTAR <br>MENU</a></h3>
							
						</article>
					</div>
					<div class="grid_3">
						<div class="img_container"><div class="imagen"><a href="insertar_mesa.php"><img src="../images/unnamed.png" alt="projects"></a></div></div>
						<article>
							<h3><em style="color:#F00"><a href="insertar_mesa.php">CONSULTAR<br> MESAS</a></h3>
							
						</article>
					</div>
					<div class="grid_3">
						<div class="img_container"><div class="imagen"><a href="pagi_proveedores.php"><img src="../images/icono-proveedores.png" alt="projects"></a></div></div>
						<article>
							<h3><em style="color:#F00"><a href="pagi_proveedores.php">CONSULTA PROVEEDORES</a></h3>
							
						<br>
						<br>
				</div>
			
		</div><br>
			<br>
			<br>
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