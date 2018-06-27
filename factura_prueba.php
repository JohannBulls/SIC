 <!DOCTYPE html>
<html lang="en">
	<head>
	<title>Menu</title>
	
<link rel="shortcut icon" type="../image/ico" href="../images/lom.png">
<link href="file:///C|/xampp/htdocs/restaurant/css/style_carro.css" rel="stylesheet"
media="screen">
    </head>
<body class="indexx1">
<!--==============================header=================================-->
<?php
include "../vista_emple/include_emple.php";
?>


<!--==============================COMANDO FACTURA=================================-->
<?php
ini_set('display_errors','off');
ini_set('display_startup_errors','off');
error_reporting(0);
 
require("../controlador/conecxion.php");
					
 $registro=$mysql->query("select *
 from detalle_factura where idmesa = $_REQUEST[idmesa] and estado='sinpagar' ") or
 die('error selecionando la base de datos ');
 
	
	
if ($reg=$registro->fetch_array())
 {
	  
		  
$numero_factura=$reg['idfactura'];
$cliente=$reg['cliente'];
$compra=$reg['compra'];	
$mesa=$reg['idmesa'];				
$cantidad =$reg['cantidad'];
$precio =$reg['precio'];
$total=$reg['TOTAL'];
$estado=$reg['estado'];
	 
	
	 
 ?> 
 
<!--=======COMANDO FFECHA========================-->
 <?php
       
        $dias = array("Domingo","Lunes","Martes","Miercoles","Jueves","Viernes","Sábado");
        $meses = array("Enero","Febrero","Marzo","Abril","Mayo","Junio","Julio","Agosto","Septiembre","Octubre","Noviembre","Diciembre");
        $fecha=$dias[date('w')]." ".date('d')." de ".$meses[date('n')-1]. " del ".date('Y') ;

      
        ?>

 <center>
  <div class="full-width-container block-3 parallax-block" data-stellar-background-ratio="0.5"><section id="content">
	<div class="full-width-container block-1">
		
						
</header>	

<center>
</body>
 <body class="index-2">     

<section id="content">
	<div class="full-width-container block-1">
		<div class="container">
			<div class="row">
			<!--==============================boton de atras =================================-->
  
 
<div class="grid_2">
  
 <a href="factura_reporte.php"> <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">  <img src=../images/FLECHA.PNG width=50 height=50px></button></a><br><br><br><br>
  

                                
         </div> 
<!--=======contenedor principal================-->
          <font color="#000000"><div class="adsi-css"  style="auto"><h6><font color="#000000">
          
     <table bgcolor="blue"><tr><td bgcolor="alpine green"><div class="grid_11"><center><p style="color:white" class="h1">FACTURA DE VENTA<p></center></div></td></tr></table>
				<div id="touch_gallery">
					<div class="grid_3">
						<article>
                        <h1><p style="color: #000000" class="h1"><span>LOMO & PARRILLA</span></h1><span>RESTAURANTE Y CAFETERIA</span></p></font>
                        <br><br><br><br><br>
							<p class="p"><h5>
				
				<span>fecha:&nbsp;&nbsp;<?php echo $fecha; ?></span>
				<br><p></p>
				<span>Dirección:&nbsp;&nbsp;cl 102 # 706-71</span>
				<br><p></p>
				<span>Cel:&nbsp;&nbsp;304&nbsp;472&nbsp;5261 </span>
				</h5>
				</p><br><br><br><br>

						<div class="img_container"><div class="imagen"><a href="#"><img src="../images/lom.png" alt="pimtura">	</a></div></div>
						</article>
					</div>
					<div class="grid_6">
					
						<article>
						<br><br><br><br>
							<h3><em style="color:black">FACTURA n°<?php echo $numero_factura; ?></em></h3><BR><BR><BR><BR>
							<p class="L" style="color:BLACK">
							Director:&nbsp;&nbsp; OMAR HERNANDEZ DURAN<BR>
							Fecha de emisión:&nbsp;&nbsp;<?php echo $fecha; ?><br> 
							<h5><strong>CLIENTE:&nbsp;&nbsp;<?php echo $cliente?></strong></h5>
							

					</p>
						</article>
					</div>
					<div class="grid_6">
					<br><br><br><br>
					
						<article>
							<h3><em style="color:black"> compras realizadas</h3><br><br><br>
							<?php

 echo '<table id="tabla_articulos" class="table1">';
 echo'<thead>';

 echo '<tr><th class="center">numero mesa</th><th class="center">&nbsp;&nbspcompra realizada</th><th class="center">&nbsp;&nbspcantidad</th><th class="center">&nbsp;&nbspprecio</th><th class="center">&nbsp;&nbsptotal a pagar</th><th class="center">&nbsp;&nbspESTADO</th>';
 


 echo '<tr>';
 echo '<td>';
 echo '<center><h4><p class="l" bgcolor
 ="white">'.$mesa.'</center>';
 echo '</td>';
  echo '<td>';
 echo '<center><h4><p class="l" bgcolor
 ="white">'.$compra.'</center>';
 echo '</td>';
  echo '<td>';
 echo '<center><h4><p class="l" bgcolor
 ="white">'.$cantidad.'</center>';
 echo '</td>';
  echo '<td>';
 echo '<center><h4><p class="l" bgcolor
 ="white">'.$precio.'</center>';
 echo '</td>';
 echo '<td >';
 echo '<center><h4><p class="l" bgcolor
 ="white">'.$total.'</center>';
 echo '</td>';
	  echo '<td bgcolor="ORANGE" >';
 echo '<center><h4><p class="l" bgcolor
 ="white">'.$estado.'</center>';
 echo '</td>';
	 echo '</td>';
	  echo '<td >&nbsp;&nbsp&nbsp;&nbsp&nbsp;&nbsp';echo '</td>';
	  echo '<td >';
 echo '<center><h4><p class="l" bgcolor><a href="../pdf/pdf/pdf.php?idmesa='.$reg['idmesa'].'&nbsp;&nbsp"><img src="../images/chulo.png" width="33"></a></center>';
 echo '</td>';
echo '</tr>';

    
 echo '</table>';

				
?>		
	<?php 
 }else {
		 echo'<!--==============================boton de atras =================================-->
  
 
<div class="grid_1">
  
 <a href="factura_reporte.php"> <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">  <img src=../images/FLECHA.PNG width=50 height=50px></button></a>
  

                                
         </div> 
		 <center><br><br><br><font color="#000000"><div class="adsi-css"  style="auto"><h6 class="h1"><font color="#000000">no se ha realizado compra <br><br><img src="../images/interrogante.png" width="50" height="50"></font></h6></div></font>';
	 }
 ?>


	<br><br><br><br><br><br><br><br><br><br>		
	<br><br><br><br><br><br><br><br><br><br>	
	<br><br><br>	
   
					</article>
					</div>
					
			</div>
		</div>
	</div>
</section>

    
	<div> 	

				</div>
		<br><br>
			</center>					
		</div>
	</div>
	</div>
	
</h6></font></div>
</div></h7></font>
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
 





          
