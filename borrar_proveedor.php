<?php
 require("../../controlador/conecxion.php");

 $mysql->query("DELETE FROM `proveedores` WHERE telefono= $_REQUEST[telefono]") or die('error a borrar el elemento ');

 

 header('Location: ../pagi_proveedores.php');
 
 
 ?>