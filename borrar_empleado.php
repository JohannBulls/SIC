<?php
 require("../../controlador/conecxion.php");

 $mysql->query("delete from empleados where iden= $_REQUEST[iden]") or die('mal');

 

 header('Location: ../pagi_empleados.php');
 
 
 ?>
