<?php
require("../../controlador/conecxion.php");

$nombreimg =$_FILES['imagen']['name'];
$archivo=$_FILES['imagen']['tmp_name'];
$ruta="../empleados";
$ruta=$ruta."/".$nombreimg;
move_uploaded_file($archivo,$ruta);


 $mysql->query("INSERT INTO empleados (empleado,empleado_apellido,imagen,cargo,telefono,sueldo,trabajo,iden)VALUES('$_REQUEST[empleado]','$_REQUEST[apellido]','".$ruta."','$_REQUEST[cargo]','$_REQUEST[telefono]','$_REQUEST[sueldo]','$_REQUEST[trabajo]','$_REQUEST[iden]')") or die('problema');


 $mysql->query("INSERT INTO registro (nombre,apellido,Documento,telefono,pasaemple,respuesta,pregunta,rol)VALUES('$_REQUEST[empleado]','$_REQUEST[apellido]','$_REQUEST[iden]','$_REQUEST[telefono]','$_REQUEST[contra]','$_REQUEST[respuesta]','¿Nombre del color preferido?','3')") or die('problema');



 	header('Location: ../pagi_empleados.php');


 $mysql->close();
 
?>