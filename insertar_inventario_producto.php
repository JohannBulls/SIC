<?php
require("../../controlador/conecxion.php");

$v=$_REQUEST['valor'];
$v1=$_REQUEST['cantidad'];
$v2=($_REQUEST['valor']*$_REQUEST['cantidad']);


 $mysql->query("INSERT INTO inventario (producto,cantidad,descripcion,codigo,valor,idcate,valorCantidad)VALUES('$_REQUEST[producto]','$_REQUEST[cantidad]','$_REQUEST[descripcion]','$_REQUEST[codigo]','$_REQUEST[valor]','$_REQUEST[idcate]',$v2)") or die('problema');

 $verificar_producto = mysqli_query(mysqli_connect("localhost", "root", "", "sic"), "SELECT * FROM inventario WHERE producto = '$_REQUEST[producto]' ");
 if (mysqli_num_rows($verificar_producto) >0) {
 	header('Location: ../pagi_inventario.php');
 	exit;
 }

 $mysql->close();
 
?>