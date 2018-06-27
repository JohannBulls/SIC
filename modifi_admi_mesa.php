<?php
require("../../controlador/conecxion.php");
 
 $mysql->query("update productos set
 nombre=('$_REQUEST[nombre]'),
 descripcion=('$_REQUEST[descripcion]'), imagen=('$_REQUEST[imagen]'), precio=('$_REQUEST[precio]')
 where id = ('$_REQUEST[id]')") or
die('error a modificar');

echo"<script type=\"text/javascript\">alert('el valor se guardo'); window.location='../pagi_menu.php';</script>"; 
 
 
 ?>