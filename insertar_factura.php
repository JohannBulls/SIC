<?php
	ini_set('display_errors','off');
ini_set('display_startup_errors','off');
error_reporting(0);
 
require("../controlador/conecxion.php");
	$registro=$mysql->query("SELECT max(idfactura) from factura") or die('està mal numero de factura');
	 while ($re=$registro->fetch_array())
	 {
		$factura= $re['max(idfactura)']; 
	 }
		$registros=$mysql->query("SELECT factura.idfactura AS Nfactura,registro.nombre AS cliente,compras.nombre as compra,compras.cantidad AS cantidad,compras.idmesa as mesa ,compras.precio AS precio_unitario,compras.subtotal AS total FROM compras JOIN factura on compras.Id= factura.idcompras JOIN registro on factura.cliente= registro.codigo WHERE factura.idfactura =$factura")or die('mall');

 while ($reg=$registros->fetch_array())
 {
$cliente=$reg['cliente'];
$compra=$reg['compra'];	
$mesa=$reg['mesa'];				
$cantidad =$reg['cantidad'];
$precio =$reg['precio_unitario'];
$total=$reg['total'];
}
$registro=$mysql->query("insert into detalle_factura (idfactura,cliente,compra,idmesa,cantidad,precio,TOTAL,estado) values('$factura','$cliente','$compra','$mesa','$cantidad','$precio','$total','sinpagar')") or die('no inserto datos');


echo"<script type=\"text/javascript\">alert('SU FACTURA A SIDO ENVIADA A LA CAJA'); window.location='menu_usu.php';</script>"; 

 ?> 