<?php

require("../controlador/conecxion.php");
 
 $mysql->query("INSERT INTO contacto (nombre,email,asunto,mensaje)VALUES('$_REQUEST[nombre]','$_REQUEST[email]','$_REQUEST[asunto]','$_REQUEST[text]')") or die('no ingresa datos a base de datos');


 echo"<script type=\"text/javascript\">alert('Mensaje enviado'); window.location='contacto.php';</script>"; 
 


?>