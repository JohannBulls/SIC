<?php
//Prevenir Error
  error_reporting(E_ERROR); 
  
  //conectamos con el servidor
 $mysql=new mysqli("localhost","root","","sic");
 if ($mysql->connect_error)
 die("Problemas con la conexión a la base de datos");


?>

