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

                               <br><br><br>
                                
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
<style>

		</style>	
				   
				<!--=======tablas================-->   
				<table class="table1">
				
			<?php
ini_set('display_errors','off');
ini_set('display_startup_errors','off');
error_reporting(0);
 
require("../controlador/conecxion.php");

 $buscar = $_POST['T1'];
 $registros=$mysql->query("SELECT distinct mesa.idmesa FROM mesa JOIN detalle_factura ON mesa.idmesa=detalle_factura.idmesa ORDER BY mesa.idmesa ") or die($mysql->error);

 echo '<table id="tabla_articulos" class="table1">';
 while ($reg=$registros->fetch_array())
 {
	 echo '<div class="producti"><div class="image">'; 
 echo '<a href="factura_prueba.php?idmesa='.$reg['idmesa'].'"><img src="../images/2018-06-07.png"><h1 style=" color:black" class="center"><' .$reg['idmesa'].'></h1></a>';
	 echo'</div></div>';
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