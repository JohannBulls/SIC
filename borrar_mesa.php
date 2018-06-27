<?php 
 $mysql=new mysqli("localhost","root","","sic");
 if ($mysql->connect_error)
 die("Problemas con la conexiأ╠n a la base de datos");
 
 $mysql->query("DELETE FROM mesa WHERE idmesa =$_REQUEST[idmesa]") or die($mysql->error);
 $mysql->close("problemas para eliminar");

 header('Location: ../insertar_mesa.php');
 ?>
