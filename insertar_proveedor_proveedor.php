<?php
require("../../controlador/conecxion.php");
 
 $mysql->query("INSERT INTO proveedores (nombre,nombreprove,producto,telefono)VALUES('$_REQUEST[empresa]','$_REQUEST[proveedor]','$_REQUEST[categoria]','$_REQUEST[telefono]')") or die('no ingresa datos a base de datos proveedores ');

 $mysql->query("INSERT INTO categoria (nombre,descripcion)VALUES('$_REQUEST[categoria]','$_REQUEST[descripcion]')") or die('no ingresa datos a base de datos categoria');

 	header('Location: ../pagi_proveedores.php');



?>