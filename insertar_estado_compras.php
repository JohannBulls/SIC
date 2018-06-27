<?php
require("../../controlador/conecxion.php");

 $registros=$mysql->query("SELECT estado FROM `compras` ") or die($mysql->error);

$estado=reg['estado'];


if($estado = 'entregado'){
	
	 $mysql->query("update compras set estado=('por entregar') where id =('$_REQUEST[id]')") or
die('error a modificar');

	
	
if($estado = 'por entregar'){

 $mysql->query("update compras set estado=('entrega') where id =('$_REQUEST[id]')") or
die('error a modificar');
	
}
}
echo"<script type=\"text/javascript\">alert('se a entregado el pedido'); window.location='../pagi_cocina.php';</script>"; 

 ?>