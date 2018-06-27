
<!DOCTYPE html>
<html lang="en">
	<head>
	<title>Menu</title>
	
<link rel="shortcut icon" type="../image/ico" href="../images/lom.png">
<link rel="stylesheet" href="../css/style_tablas.css">
</head>
<body class="indexx1">
<!--==============================header=================================-->
<?php
include "include_usu.php";
?>

<?php
	ini_set('display_errors','off');
ini_set('display_startup_errors','off');
error_reporting(0);
 
require("../controlador/conecxion.php");
	$registro=$mysql->query("SELECT max(idfactura) from factura") or die('està mal numero de factura');
	 while ($re=$registro->fetch_array())
	 {
		$factura= $re['max(idfactura)']; 
	
	?>

<!--==============================COMANDO FACTURA=================================-->
<?php
ini_set('display_errors','off');
ini_set('display_startup_errors','off');
error_reporting(0);
 
require("../controlador/conecxion.php");
		$registros=$mysql->query("SELECT factura.idfactura AS Nfactura,registro.nombre AS cliente,compras.nombre as compra,compras.cantidad AS cantidad,compras.idmesa as mesa ,compras.precio AS precio_unitario,compras.subtotal AS total FROM compras JOIN factura on compras.Id= factura.idcompras JOIN registro on factura.cliente= registro.codigo WHERE factura.idfactura =$factura")or die('mall');

 while ($reg=$registros->fetch_array())
 {

$cliente=$reg['cliente'];
$compra=$reg['compra'];	
$mesa=$reg['mesa'];				
$cantidad =$reg['cantidad'];
$precio =$reg['precio_unitario'];
$total=$reg['total'];
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
<!--=======contenedor principal================-->
          <font color="#000000"><div class="adsi-css"  style="auto"><h6><font color="#000000">
          
     <table bgcolor="blue"><tr><td bgcolor="alpine green"><div class="grid_11"><center><p style="color:white" class="h1">FACTURA DE VENTA<p></center></div></td></tr></table>
				<div id="touch_gallery">
					<div class="grid_3">
						<article>
						<br><br><br><br><br>
							<span ><h7>LOMO & PARRILLA</h7></span><br>
                        <span>RESTAURANTE Y CAFETERIA</span></p></font>
							<h5>
				
				<span>fecha:&nbsp;&nbsp;<?php echo $fecha; ?></span>
				<br><p></p>
				<span>Dirección:&nbsp;&nbsp;cl 102 # 706-71</span>
				<br><p></p>
				<span>Cel:&nbsp;&nbsp;304&nbsp;472&nbsp;5261 </span>
				</h5>
				</p><br><br><br><br>

						<div class="img_container"><div class="imagen"><a href="pagi_venta.php"><img src="../images/lom.png" alt="pimtura">	</a></div></div>
						</article>
					</div>
					<div class="grid_6">
					
						<article>
						<br><br><br><br>
							<h3><em style="color:black"><u>FACTURA n°<?php echo $factura; ?></u></em></h3><BR><BR><BR><BR>
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
							<h3><em style="color:black"><u> compras realizadas</u></h3><br><br><br>
							<?php

 echo '<table id="tabla_articulos" class="table1">';
 echo'<thead>';

 echo '<tr><th class="center">numero mesa</th><th class="center">&nbsp;&nbspcompra realizada</th><th class="center">&nbsp;&nbspcantidad</th><th class="center">&nbsp;&nbspprecio</th><th class="center">&nbsp;&nbsptotal a pagar</th>';
 


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
 echo '</tr>';

    
 echo '</table>';

					
?>		
	<?php 
  }
 }?>
	<br><br><br><br><br><br><br><br><br><br>		
	<div class="grid_12">
<form name="me" action="insertar_factura.php" method="post">
<input  type="submit"class="boton_personalizado" value="Aceptar">
</form>
	</div>
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
 