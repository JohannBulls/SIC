<?php
 require("../../controlador/conecxion.php");

 $mysql->query("delete from inventario where id=$_REQUEST[id]") or
 die($mysql->error);

 $mysql->close();

 header('Location: ../pagi_inventario.php');
 ?>

