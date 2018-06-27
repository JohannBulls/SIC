<?php
require("../../controlador/conecxion.php");
 
 $mysql->query("update detalle_factura set estado=('pago') where idmesa =('$_REQUEST[idmesa]')") or
die('error a modificar');

$mysql->query("update mesa set estado=('disponible') where idmesa =('$_REQUEST[idmesa]')") or
die('error a modificar');


echo"<script type=\"text/javascript\">alert('se a realizado pago de la compra'); window.location='../../pdf/pdf/pdf.php';</script>"; 

 ?>
