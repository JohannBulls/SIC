<?php
 require("../../controlador/conecxion.php");
 $mysql->query("delete from compras where id= $_REQUEST[id]") or die('mal');

 

 header('Location: ../pagi_venta.php');
 
 
 ?>
