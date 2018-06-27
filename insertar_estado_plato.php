<?php
require("../../controlador/conecxion.php");
 
 $mysql->query("update productos set
 estado=('activo') where id = ('$_REQUEST[id]')") or
die('error a modificar');

echo"<script type=\"text/javascript\">alert('Valor activo'); window.location='../pagi_menu.php';</script>"; 
 
 
 ?>