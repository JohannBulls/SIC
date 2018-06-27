<?php
$v=$_REQUEST['valor'];
$v1=$_REQUEST['cantidad'];
$v2=($_REQUEST['valor']*$_REQUEST['cantidad']);

 require("../../controlador/conecxion.php");
 
 $mysql->query("update inventario set
 producto=('$_REQUEST[producto]'),
 cantidad=('$_REQUEST[cantidad]'), descripcion=('$_REQUEST[descripcion]'),  idcate=('$_REQUEST[idcate]'), codigo=('$_REQUEST[codigo]'), valor=('$_REQUEST[valor]'), valorCantidad=($v2)
 where id = ('$_REQUEST[id]')") or
die('error a modificar');

echo"<script type=\"text/javascript\">alert('el valor se guardo'); window.location='../pagi_inventario.php';</script>"; 
 
 
 ?>