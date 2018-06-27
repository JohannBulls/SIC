<?php
 require("../../controlador/conecxion.php");
 
 $mysql->query("update proveedores set
 nombre=('$_REQUEST[nombre]'),
 nombreprove=('$_REQUEST[nombreprove]'), telefono=('$_REQUEST[telefono]'), producto=('$_REQUEST[producto]')
 where id_proveedor=('$_REQUEST[num]')") or die('error a modificar la base de datos proveedores ');

echo"<script type=\"text/javascript\">alert('el valor se guardo'); window.location='../pagi_proveedores.php';</script>"; 
 
 
 ?>
