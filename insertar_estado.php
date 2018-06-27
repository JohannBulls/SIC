<?php
require("../../controlador/conecxion.php");
 
 $mysql->query("update productos set
 estado=('inactivo') where id = ('$_REQUEST[id]')") or
die('error a modificar');

echo"<script type=\"text/javascript\">alert('Valor Inactivo'); window.location='../pagi_menu.php';</script>"; 
 
 
 ?>