<?php
 require("../../controlador/conecxion.php");
 
 $mysql->query("update empleados set
 empleado=('$_REQUEST[empleado]'),empleado_apellido=('$_REQUEST[apellido]'),
 cargo=('$_REQUEST[cargo]'), telefono=('$_REQUEST[telefono]'), sueldo=('$_REQUEST[sueldo]')
 where iden=('$_REQUEST[iden]')") or
die($mysql->error);

echo"<script type=\"text/javascript\">alert('el valor se guardo'); window.location='../pagi_empleados.php';</script>"; 
 
 
 ?>


