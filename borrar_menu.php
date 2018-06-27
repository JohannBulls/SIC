<?php
 require("../../controlador/conecxion.php");

 $mysql->query("delete from productos where id = $_REQUEST[id]") or
 die($mysql->error);

 $mysql->close();

 header('Location: ../pagi_menu.php');
 ?>

