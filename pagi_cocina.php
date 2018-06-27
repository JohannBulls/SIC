<!DOCTYPE html>

<html lang="en">
	<head>
	<title>Administrador</title>
	
	</head>
<body class="indexx1">
<!--==============================header=================================-->
<?php
include "../vista_emple/include_emple.php";
?>
<!--=======COMANDO FFECHA========================-->
 <?php
       
        $dias = array("Domingo","Lunes","Martes","Miercoles","Jueves","Viernes","Sábado");
        $meses = array("Enero","Febrero","Marzo","Abril","Mayo","Junio","Julio","Agosto","Septiembre","Octubre","Noviembre","Diciembre");
        $fecha=$dias[date('w')]." ".date('d')." de ".$meses[date('n')-1]. " del ".date('Y') ;

      
        ?>

                        
 <center>
 <section id="content">
	<div class="full-width-container block-1">
		
            <br>
            <br>
            
				<div class="grid_6">
				      <header>					

                               <br>
                                
</div></h7></font><h7><font color="#000000"><div class="adsi-css"  style="auto"><h6><font color="#000000"><?php echo $fecha; ?></h6></font></div>
</div></h7></font>
					</header>
                    	
</div>							
</div>

<center>
</body>
 <body class="index-2">     


<!--=======titulo================-->
						<span style="color:#036"><br><br><br>

 <h4 class='box-title'><div  class="fa-3x" style=" color:#066">Información Venta Caja</div>
                        </span></h4>
          
							
							<!--=======fondo imagen================-->
							<div class="full-width-container block-3">
		
			
			
		
<font color="#000000"><div class="adsi-css" style="auto"> 

				<!--=======tablas================-->   
				<table class="table1">
				
			<?php
ini_set('display_errors','off');
ini_set('display_startup_errors','off');
error_reporting(0);
 
require("../controlador/conecxion.php");

 $buscar = $_POST['T1'];
 $registros=$mysql->query("SELECT id,idmesa,fecha,nombre,cantidad,estado FROM `compras` WHERE fecha = '$fecha' ") or die($mysql->error);

echo '<table id="tabla_articulos" class="table1">';
 echo'<thead >';

 echo '<tr><th class="center">Fecha</th><th class="center">Mesa</th><th class="center">Nombre</th><th class="center">cantidad</th><th class="center">Estado</th><th class="center">selección</th>';
 

 while ($reg=$registros->fetch_array())
 {
 echo '<tr >';
  echo '<td width="150px">';
 echo $reg['fecha'];
 echo '</td>';
echo '<td >';
 echo $reg['idmesa'];
 echo '</td>';
 echo '<td>';
 echo $reg['nombre'];
 echo '</td>';
 echo '<td>';
 echo '<center>'.$reg['cantidad'].'<center>';
 echo '</td>';
echo '<td>';
 echo '<center>'.$reg['estado'].'<center>';
 echo '</td>';	 
 echo '<td >';
 echo '<center>'.'<a href="compras/insertar_estado_compras.php?id='.$reg['id'].'"><img src="../images/chulo.png" width="33"></a>'.'<center>';
 echo '</td>';
 echo '</tr>';
 }
    
 echo '<table>';
 $mysql->close();
 ?> 
				   
				   
				   
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